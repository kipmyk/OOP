<?php
/*
Plugin Name: Password Generator
Description: Generates random passwords
Version: 1.0
Author: Your kipmyk
Author URI: https://kipmyk.co.ke/
License: GPL2
*/

class Password_Generator_Plugin {

    private $options;

    public function __construct() {
        // Initialize options
        $this->options = get_option('password_generator_options');

        // Register the shortcode [password_generator]
        add_shortcode('password_generator', array($this, 'generate_password_shortcode'));

        // Add a menu page for the plugin settings
        add_action('admin_menu', array($this, 'add_options_page'));

        // Register plugin settings
        add_action('admin_init', array($this, 'register_settings'));

        // Display generated password after saving options
        add_action('admin_notices', array($this, 'display_generated_password'));
    }

    public function generate_password_shortcode() {
        // Generate a random password
        $length = isset($this->options['password_length']) ? intval($this->options['password_length']) : 8;
        $password = $this->generate_password($length);

        // Store the generated password in options
        $this->options['generated_password'] = $password;
        update_option('password_generator_options', $this->options);

        // Display the generated password
        return '<p>Generated Password: ' . $password . '</p>';
    }

    private function generate_password($length = 8) {
        // Define the characters that can be used in the password
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';

        // Generate the password
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= substr($characters, mt_rand(0, strlen($characters) - 1), 1);
        }

        return $password;
    }

    public function add_options_page() {
        // Add a new menu page under "Settings"
        add_options_page(
            'Password Generator Settings',
            'Password Generator',
            'manage_options',
            'password-generator-settings',
            array($this, 'render_options_page')
        );
    }

    public function render_options_page() {
        ?>
        <div class="wrap">
            <h1>Password Generator Settings</h1>
            <form method="post" action="options.php">
                <?php
                // Output nonce, action, and option_page fields
                settings_fields('password_generator_options');
                do_settings_sections('password-generator-settings');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    public function register_settings() {
        // Register the plugin settings
        register_setting(
            'password_generator_options',
            'password_generator_options',
            array($this, 'sanitize_options')
        );

        // Add a section for the plugin settings
        add_settings_section(
            'password_generator_section',
            'Password Generator Settings',
            array($this, 'render_section_description'),
            'password-generator-settings'
        );

        // Add a field for password length
        add_settings_field(
            'password_length',
            'Password Length',
            array($this, 'render_password_length_field'),
            'password-generator-settings',
            'password_generator_section'
        );
    }

    public function sanitize_options($options) {
        // Sanitize the password length field
        $options['password_length'] = isset($options['password_length']) ? absint($options['password_length']) : 8;

        return $options;
    }

    public function render_section_description() {
        echo '<p>Configure the settings for the password generator.</p>';
    }

    public function render_password_length_field() {
        // Render the password length field
        $value = isset($this->options['password_length']) ? esc_attr($this->options['password_length']) : 8;
        echo '<input type="number" name="password_generator_options[password_length]" value="' . $value . '" min="1" step="1" />';
    }

    public function display_generated_password() {
        // Check if a generated password is available
        if (isset($this->options['generated_password'])) {
            echo '<div class="notice notice-success"><p>Generated Password: ' . esc_html($this->options['generated_password']) . '</p></div>';
            // Clear the generated password from options
            unset($this->options['generated_password']);
            update_option('password_generator_options', $this->options);
        }
    }
}

// Instantiate the plugin
new Password_Generator_Plugin();
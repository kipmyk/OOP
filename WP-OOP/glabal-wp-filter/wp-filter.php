<?php

class GlobalBlockSettings {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_settings_page'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('wpforms_process_validate_email', array($this, 'blacklist_global_domains'), 10, 3);
    }

    public function add_settings_page() {
        add_options_page('Global Block Settings', 'Global Block', 'manage_options', 'wpf_global_block_settings', array($this, 'render_settings_page'));
    }

    public function register_settings() {
        register_setting('wpf_global_block_settings_group', 'wpf_global_block_content');
    }

    public function render_settings_page() {
        ?>
        <div class="wrap">
            <h2>Global Block Settings</h2>
            <form method="post" action="options.php">
                <?php settings_fields('wpf_global_block_settings_group'); ?>
                <?php do_settings_sections('wpf_global_block_settings_group'); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Global Block Content</th>
                        <td>
                            <textarea name="wpf_global_block_content" rows="5" cols="50"><?php echo esc_textarea(get_option('wpf_global_block_content')); ?></textarea>
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }

    public function blacklist_global_domains($field_id, $field_submit, $form_data) {
        $global_block_content = get_option('wpf_global_block_content');
        $pattern = '/\(([\w.-]+)\)/';
        preg_match_all($pattern, $global_block_content, $matches);
        $blacklist = $matches[1];
        if (in_array($field_submit, $blacklist)) {
            wpforms()->process->errors[$form_data['id']][$field_id] = esc_html__('We apologize, this domain is not accepted.', 'wpforms');
            return;
        }
    }
}

$global_block_settings = new GlobalBlockSettings();

<?php

class DomainAgeCalculator {
    private $domain;

    public function __construct($domain) {
        $this->domain = $domain;
    }

    public function getDomainAge() {
        $whois_output = shell_exec("whois {$this->domain}");
        if (preg_match('/Creation Date: (.+)/i', $whois_output, $matches)) {
            $creation_date = trim($matches[1]);
            
            // Calculate domain age
            $creation_timestamp = strtotime($creation_date);
            $current_timestamp = time();
            $age_seconds = $current_timestamp - $creation_timestamp;
            $age_years = floor($age_seconds / (365 * 24 * 60 * 60));
            $age_months = floor(($age_seconds % (365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
            $age_days = floor(($age_seconds % (30 * 24 * 60 * 60)) / (24 * 60 * 60));
            
            // Prepare age message
            if ($age_years > 0) {
                $age_message = "The domain '{$this->domain}' is $age_years year" . ($age_years > 1 ? "s" : "") . " old.";
            } elseif ($age_months > 0) {
                $age_message = "The domain '{$this->domain}' is $age_months month" . ($age_months > 1 ? "s" : "") . " and $age_days day" . ($age_days > 1 ? "s" : "") . " old.";
            } else {
                $age_message = "The domain '{$this->domain}' is $age_days day" . ($age_days > 1 ? "s" : "") . " old.";
            }

            return $age_message;
        } else {
            return "Unable to retrieve the domain age.";
        }
    }

    public function getWhoisDetails() {
        return shell_exec("whois {$this->domain}");
    }
}

// Prompt user for domain input
echo "Enter the domain name: ";
$domain = trim(fgets(STDIN));

// Calculate and display domain age
$calculator = new DomainAgeCalculator($domain);
echo $calculator->getDomainAge() . "\n";

// Display WHOIS details
echo "WHOIS Details:\n";
echo $calculator->getWhoisDetails();

?>

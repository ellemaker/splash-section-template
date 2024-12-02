<?php
/*
Plugin Name: Splash Section Template
Plugin URI: https://example.com
Description: A simple plugin to display "Lorem ipsum" placeholder text using a shortcode.
Version: 1.0
Author: Your Name
Author URI: https://example.com
License: GPL2
GitHub Plugin URI: https://github.com/ellemaker/splash-section-template
*/


// Function to handle the [greetings] shortcode
function splash_section_greetings_shortcode() {
    return "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
}

// Register the shortcode
add_shortcode('greetings', 'splash_section_greetings_shortcode');
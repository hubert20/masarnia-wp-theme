<?php


function masarnia_wp_theme_customize_register($wp_customize)
{
    // Add control for logo uploader
    $wp_customize->add_setting('masarnia_wp_theme_logo', array(
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'masarnia_wp_theme_logo', array(
        'label'    => __('Upload Logo (replaces text)', 'masarnia-wp-theme'),
        'section'  => 'title_tagline',
        'settings' => 'masarnia_wp_theme_logo',
    )));
}

add_action('customize_register', 'masarnia_wp_theme_customize_register');

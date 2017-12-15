<?php


class AboutUsSectionAdmin
{
    public function __construct($wp_customize, $options_pages)
    {
        $wp_customize->add_section(
            'bakes_and_cakes_about_us_settings',
            array(
                'title' => __( 'About Us Section', 'bakes-and-cakes' ),
                'priority' => 20,
                'panel' => 'bakes_and_cakes_home_page_settings',
            )
        );
        /** Enable/Disable about us Section */
        $wp_customize->add_setting(
            'bakes_and_cakes_ed_about_section',
            array(
                'default' => '',
                'sanitize_callback' => 'bakes_and_cakes_sanitize_checkbox',
            )
        );

        $wp_customize->add_control(
            'bakes_and_cakes_ed_about_section',
            array(
                'label' => __( 'Enable About us Section', 'bakes-and-cakes' ),
                'section' => 'bakes_and_cakes_about_us_settings',
                'type' => 'checkbox',
            )
        );
        /*select page for about us section*/
        $wp_customize->add_setting(
            'bakes_and_cakes_about_us_page',
            array(
                'default' => '',
                'sanitize_callback' => 'bakes_and_cakes_sanitize_select',
            )
        );

        $wp_customize->add_control(
            'bakes_and_cakes_about_us_page',
            array(
                'label' => __( 'Select Page', 'bakes-and-cakes' ),
                'section' => 'bakes_and_cakes_about_us_settings',
                'type' => 'select',
                'choices' => $options_pages,
            )
        );
    }
}
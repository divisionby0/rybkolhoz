<?php


class ContactFormSectionAdmin
{
    public function __construct($wp_customize, $options_pages)
    {
        $wp_customize->add_section(
            'bakes_and_cakes_contact_form_settings',
            array(
                'title' => __( 'Contact form Section', 'bakes-and-cakes' ),
                'priority' => 20,
                'panel' => 'bakes_and_cakes_home_page_settings',
            )
        );
        $wp_customize->add_setting(
            'bakes_and_cakes_ed_contactform_section',
            array(
                'default' => '',
                'sanitize_callback' => 'bakes_and_cakes_sanitize_checkbox',
            )
        );

        $wp_customize->add_control(
            'bakes_and_cakes_ed_contactform_section',
            array(
                'label' => __( 'Enable Contact form Section', 'bakes-and-cakes' ),
                'section' => 'bakes_and_cakes_contact_form_settings',
                'type' => 'checkbox',
            )
        );
        $wp_customize->add_setting(
            'bakes_and_cakes_contact_form_page',
            array(
                'default' => '',
                'sanitize_callback' => 'bakes_and_cakes_sanitize_select',
            )
        );

        $wp_customize->add_control(
            'bakes_and_cakes_contact_form_page',
            array(
                'label' => __( 'Select Page', 'bakes-and-cakes' ),
                'section' => 'bakes_and_cakes_contact_form_settings',
                'type' => 'select',
                'choices' => $options_pages,
            )
        );
    }
}
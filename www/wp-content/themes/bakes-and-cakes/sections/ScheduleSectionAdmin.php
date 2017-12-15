<?php


class ScheduleSectionAdmin
{
    public function __construct($wp_customize, $options_pages)
    {
        $wp_customize->add_section(
            'bakes_and_cakes_schedule_settings',
            array(
                'title' => __( 'Schedule Section', 'bakes-and-cakes' ),
                'priority' => 40,
                'panel' => 'bakes_and_cakes_home_page_settings',
            )
        );

        /** Enable/Disable just text Section */
        $wp_customize->add_setting(
            'bakes_and_cakes_ed_schedule_section',
            array(
                'default' => '',
                'sanitize_callback' => 'bakes_and_cakes_sanitize_checkbox',
            )
        );
        $wp_customize->add_control(
            'bakes_and_cakes_ed_schedule_section',
            array(
                'label' => __( 'Enable Schedule Section', 'bakes-and-cakes' ),
                'section' => 'bakes_and_cakes_schedule_settings',
                'type' => 'checkbox',
            )
        );
        /*select page for just text section*/
        $wp_customize->add_setting(
            'bakes_and_cakes_schedule_page',
            array(
                'default' => '',
                'sanitize_callback' => 'bakes_and_cakes_sanitize_select',
            )
        );

        $wp_customize->add_control(
            'bakes_and_cakes_schedule_page',
            array(
                'label' => __( 'Select Page', 'bakes-and-cakes' ),
                'section' => 'bakes_and_cakes_schedule_settings',
                'type' => 'select',
                'choices' => $options_pages,
            )
        );
    }
}
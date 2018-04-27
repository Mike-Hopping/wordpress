<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 16/04/2018
 * Time: 1:20 PM
 */

function pistoncranky_customize_register($wp_customize){
//-------------About--------------//
    //About Text
    $wp_customize->add_section('pistoncranky_about_section',
        array(
            'title' =>__('About'),
            'priority' => 30
        ));
    $wp_customize->add_setting('pistoncranky_about_text', array());
    $wp_customize->add_control('pistoncranky_about_text_ctrl', array(
        'type' => 'textarea',
        'section' => 'pistoncranky_about_section',
        'label' => __('About Us Text'),
        'settings' => 'pistoncranky_about_text'
        )
    );

    //About Image
    $wp_customize->add_setting('pistoncranky_about_image', array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'pistoncranky_about_image_ctrl',
        array(
            'section' => 'pistoncranky_about_section',
            'label' => __('About Image'),
            'settings' => 'pistoncranky_about_image'
            ),
//        Image crop
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'pistoncranky_about_image_crop',
                array(
            'section' => 'pistoncranky_about_section',
            'label' => __('Crop Image'),
                    'settings' => 'pistoncranky_about_image',
            'width' => 355,
            'height' => 200,
                            )))
        )
    );

    //Meet the team

    $wp_customize->add_section('pistoncranky_team_section',
        array(
            'title' =>__('Meet the team'),
            'priority' => 30
        ));
    $wp_customize->add_setting('pistoncranky_team_text', array());
    $wp_customize->add_control('pistoncranky_team_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'pistoncranky_team_section',
            'label' => __('Meet The Team Text'),
            'settings' => 'pistoncranky_team_text'
        )
    );

    //Testimonials

    $wp_customize->add_section('pistoncranky_testimonials_section',
        array(
            'title' =>__('Testimonials'),
            'priority' => 30
        ));
    $wp_customize->add_setting('pistoncranky_testimonials_text', array());
    $wp_customize->add_control('pistoncranky_testimonials_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'pistoncranky_testimonials_section',
            'label' => __('Testimonials Text'),
            'settings' => 'pistoncranky_testimonials_text'
        )
    );

    //Contact

    $wp_customize->add_section('pistoncranky_contact_section',
        array(
            'title' =>__('Contact'),
            'priority' => 30
        ));
    $wp_customize->add_setting('pistoncranky_contact_text', array());
    $wp_customize->add_control('pistoncranky_contact_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'pistoncranky_contact_section',
            'label' => __('Contact Text'),
            'settings' => 'pistoncranky_contact_text'
        )
    );

    //Home

    $wp_customize->add_section('pistoncranky_home_statement_section',
        array(
            'title' =>__('Home Statement'),
            'priority' => 30
        ));
    $wp_customize->add_setting('pistoncranky_home_statement_text', array());
    $wp_customize->add_control('pistoncranky_home_statement_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'pistoncranky_home_statement_section',
            'label' => __('Home Mission Statement Text'),
            'settings' => 'pistoncranky_home_statement_text'
        )
    );

    //Home Image 1

    $wp_customize->add_section('pistoncranky_home_statement_image_one_section',
        array(
            'title' =>__('Home Statement Image 1'),
            'priority' => 30
        ));
    $wp_customize->add_setting('pistoncranky_home_statement_image_one', array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'pistoncranky_home_statement_image_one_ctrl',
        array(
            'section' => 'pistoncranky_home_statement_image_one_section',
            'label' => __('Home Image 1'),
            'settings' => 'pistoncranky_home_statement_image_one'
        ),

        //Home Image 2

        $wp_customize->add_section('pistoncranky_home_statement_image_two_section',
            array(
                'title' =>__('Home Statement Image 2'),
                'priority' => 30
            ),
        $wp_customize->add_setting('pistoncranky_home_statement_image_two', array()),
        $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'pistoncranky_home_statement_image_two_ctrl',
        array(
            'section' => 'pistoncranky_home_statement_image_two_section',
            'label' => __('Home Image 2'),
            'settings' => 'pistoncranky_home_statement_image_two'
        )))
        )
    ));
    //----------------Products----------------//
}

add_action('customize_register', 'pistoncranky_customize_register');

?>
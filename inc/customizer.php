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
    //----------------Products----------------//
}

add_action('customize_register', 'pistoncranky_customize_register');

?>
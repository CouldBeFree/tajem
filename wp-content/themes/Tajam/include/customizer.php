<?php
/**
 * theme Theme Customizer
 *
 * @package theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'header' , array(
        'title'      => __( 'Header Section', 'Tajam' ),
        'priority'   => 10,
    ) );

    $wp_customize->add_setting( 'logo' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label'      => __( 'Upload a logo', 'theme_name' ),
                'section'    => 'header',
                'settings'   => 'logo'
            )
        )
    );

    $wp_customize->add_setting('footer', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_section('footer-logo', array(
        'title' => __('Footer', 'mytheme'),
        'priority' => 100
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer-logo',
            array(
                'label'      => __( 'Download footer logo', 'theme_name' ),
                'section'    => 'footer-logo',
                'settings'   => 'footer'
            )
        )
    );

    /*Under logo*/

    $wp_customize->add_setting('footer-content', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'footer-content',
        array(
            'label' => __('Footer', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'footer-content',
            'type' => 'textarea'
        )
    );

    /*Middle headline*/

    $wp_customize->add_setting('middle-headline', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'middle-headline',
        array(
            'label' => __('Middle headline', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'middle-headline',
            'type' => 'text'
        )
    );

    /*Middle content*/

    $wp_customize->add_setting('middle-content', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'middle-content',
        array(
            'label' => __('Middle content', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'middle-content',
            'type' => 'textarea'
        )
    );

    /*Middle number*/

    $wp_customize->add_setting('middle-number', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'middle-number',
        array(
            'label' => __('Middle-number', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'middle-number',
            'type' => 'text'
        )
    );

    /*Right part*/

    $wp_customize->add_setting('right-headline', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'right-headline',
        array(
            'label' => __('Right headline', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'right-headline',
            'type' => 'text'
        )
    );

    /*Facebook*/

    $wp_customize->add_setting('facebook', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'facebook',
        array(
            'label' => __('facebook', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'facebook',
            'type' => 'text'
        )
    );

    /*Twitter*/

    $wp_customize->add_setting('twitter', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'twitter',
        array(
            'label' => __('twitter', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'twitter',
            'type' => 'text'
        )
    );

    /*Dribble*/

    $wp_customize->add_setting('dribble', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'dribble',
        array(
            'label' => __('dribble', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'dribble',
            'type' => 'text'
        )
    );

    /*instagram*/

    $wp_customize->add_setting('instagram', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'instagram',
        array(
            'label' => __('instagram', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'instagram',
            'type' => 'text'
        )
    );

    /*google*/

    $wp_customize->add_setting('google', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'google',
        array(
            'label' => __('google', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'google',
            'type' => 'text'
        )
    );

    /*youtube*/

    $wp_customize->add_setting('youtube', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'youtube',
        array(
            'label' => __('youtube', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'youtube',
            'type' => 'text'
        )
    );

}
add_action( 'customize_register', 'theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function theme_customize_preview_js() {
	wp_enqueue_script( 'theme_customizer', get_template_directory_uri() . '/assets/scripts/customizer.js', array( 'customize-preview' ), false, true );
}
add_action( 'customize_preview_init', 'theme_customize_preview_js' );

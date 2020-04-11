<?php
/**
 * Akki Theme Customizer
 *
 * @package Akki WP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function akki_wp_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'akki_wp_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'akki_wp_customize_partial_blogdescription',
        ));
    }



    $wp_customize->add_section(
        'sec_freelancer_name',
        array(
            'title'             => 'Freelancer Name Goes Here',
            'description'       => 'John Doe Name Goes Here'
        )
    );

                //  Freelacer Name

    $wp_customize->add_setting(
        'set_freelancer_name',
        array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

$wp_customize->add_control(
        'set_freelancer_name',
        array(
        'label'                   =>  'Freelancer Name',
        'description'             =>  'Enter John Doe Name Here',
        'section'                 =>  'sec_freelancer_name',
        'type'                    =>  'text'
        )
    );

    $wp_customize->add_section(
        'sec_developer',
        array(
            'title'             => 'Developer Section',
            'description'       => 'Enter Web Developer | Wordpress Developer'
        )
    );

    //  Developer Section 1

    $wp_customize->add_setting(
                'set_web_developer',
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

    $wp_customize->add_control(
                'set_web_developer',
                array(
                'label'                   =>  'Web Developer',
                'description'             =>  'Enter Web Developer Here',
                'section'                 =>  'sec_developer',
                'type'                    =>  'text'
                )
            );

    //  Developer Section 2

    $wp_customize->add_setting(
                 'set_web_designer',
                 array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
             );

    $wp_customize->add_control(
                'set_web_designer',
                array(
                'label'                   =>  'Web Developer',
                'description'             =>  'Enter Web Designer Here',
                'section'                 =>  'sec_developer',
                'type'                    =>  'text'
                )
            );


    // Contact Section

    $wp_customize->add_section(
        'sec_contact',
        array(
            'title'             => 'Contact Us Settings',
            'description'       => 'Contact Us Section'
        )
    );


    // Field 1 - contact Address

    $wp_customize->add_setting(
                 'set_contact_name',
                 array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
             );

    $wp_customize->add_control(
                'set_contact_name',
                array(
                'label'                   =>  'Enter Company Name Here',
                'description'             =>  'Enter Business Name Here',
                'section'                 =>  'sec_contact',
                'type'                    =>  'text'
                )
            );


    // Field 1 - contact Address

    $wp_customize->add_setting(
                 'set_contact_name',
                 array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
             );

    $wp_customize->add_control(
                'set_contact_name',
                array(
                'label'                   =>  'Enter Company Name Here',
                'description'             =>  'Enter Business Name Here',
                'section'                 =>  'sec_contact',
                'type'                    =>  'text'
                )
            );

    // company descriptiopn

    $wp_customize->add_setting(
                   'set_contact_desc',
                   array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => ''
                )
               );

    $wp_customize->add_control(
                 'set_contact_desc',
                 array(
                'label'                   =>  'Short Description About Your Company',
                'description'             =>  'Short Description about Akki',
                'section'                 =>  'sec_contact',
                'type'                    =>  'textarea'
                )
             );

    // Field 1 - contact Address

    $wp_customize->add_setting(
                'set_contact_address',
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

    $wp_customize->add_control(
                'set_contact_address',
                array(
                'label'                   =>  'Contact Address Goes here',
                'description'             =>  'Enter Your Address Here',
                'section'                 =>  'sec_contact',
                'type'                    =>  'text'
                )
            );


    // Field 1 - contact phone number

    $wp_customize->add_setting(
                'set_contact_number',
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

    $wp_customize->add_control(
                 'set_contact_number',
                 array(
                'label'                   =>  'Contact Phone Number',
                'description'             =>  'Enter Your Phone Number Here Seperate with Comma if its more than one.',
                'section'                 =>  'sec_contact',
                'type'                    =>  'text'
                )
             );

    // contact email

    $wp_customize->add_setting(
                'set_contact_email',
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_email'
                )
            );

    $wp_customize->add_control(
                 'set_contact_email',
                 array(
                'label'                   =>  'Contact Email',
                'description'             =>  'Enter Your Contact Email',
                'section'                 =>  'sec_contact',
                'type'                    =>  'email'
                )
             );


                

    // company Fax

    $wp_customize->add_setting(
                'set_contact_fax',
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

    $wp_customize->add_control(
                 'set_contact_fax',
                 array(
                'label'                   =>  'Enter Your Fax Number',
                'description'             =>  'Enter Your Fax Number Here',
                'section'                 =>  'sec_contact',
                'type'                    =>  'text'
                )
             );


    // Copyright Section

    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'             => 'Copyright Settings',
            'description'       => 'Copyright Section'
        )
    );

    // Field 1 - copyright textbox

    $wp_customize->add_setting(
                'set_copyright',
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

    $wp_customize->add_control(
                'set_copyright',
                array(
                'label'                   =>  'CopyRight Information',
                'description'             =>  'Please Add Your Copyright Information Here',
                'section'                 =>  'sec_copyright',
                'type'                    =>  'text'
                )
            );


    // Header Social Media

    $wp_customize->add_section(
                 'sec_social',
                 array(
                    'title'             => 'Social Media Settings',
                    'description'       => 'Social Media'
                )
             );

    // Facebook

    $wp_customize->add_setting(
                'set_facebook_url',
                array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'esc_url_raw'
                )
            );
            
    $wp_customize->add_control(
                'set_facebook_url',
                array(
                    'label'			=> __('Facebook', 'akki-wp'),
                    'description'	=> __('Enter Facebook Link Here', 'akki-wp'),
                    'section'		=> 'sec_social',
                    'type'			=> 'url'
                )
            );
            
    // Twitter

    $wp_customize->add_setting(
                'set_twitter_url',
                array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'esc_url_raw'
                )
            );
            
    $wp_customize->add_control(
                'set_twitter_url',
                array(
                    'label'			=> __('Twitter', 'akki-wp'),
                    'description'	=> __('Enter Twitter Link Here', 'akki-wp'),
                    'section'		=> 'sec_social',
                    'type'			=> 'url'
                )
            );
            

    // Insagram

    $wp_customize->add_setting(
                 'set_instagram_url',
                 array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'esc_url_raw'
                )
             );
            
    $wp_customize->add_control(
                'set_instagram_url',
                array(
                    'label'			=> __('instagram', 'akki-wp'),
                    'description'	=> __('Enter Twitter Link Here', 'akki-wp'),
                    'section'		=> 'sec_social',
                    'type'			=> 'url'
                )
            );
    
            
    // Youtube

    $wp_customize->add_setting(
                'set_youtube_url',
                array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'esc_url_raw'
                )
            );
            
    $wp_customize->add_control(
                'set_youtube_url',
                array(
                    'label'			=> __('Youtube', 'akki-wp'),
                    'description'	=> __('Enter Youtube Link Here', 'akki-wp'),
                    'section'		=> 'sec_social',
                    'type'			=> 'url'
                )
            );
}
add_action('customize_register', 'akki_wp_customize_register');

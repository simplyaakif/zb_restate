<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_builder_uw_ar_restate";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'redux_builder_uw_ar_restate',
        'use_cdn' => TRUE,
        'display_name' => 'AR Real Estate',
        'display_version' => '1.01',
        'page_slug' => 'zigbar_realestate',
        'page_title' => 'AR Real Estate',
        'update_notice' => TRUE,
        'intro_text' => 'This is made for Real Estate Site',
        'menu_type' => 'menu',
        'menu_title' => 'AR Real Estate',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'page_priority' => '130',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'main-color',
                'type'     => 'color',
                'title'    => __('Main Site Color', 'redux-framework-demo'), 
                'subtitle' => __('Pick a color for the theme (default: #000).', 'redux-framework-demo'),
                'default'  => '#000',
                'validate' => 'color',
                'output'    => array(
                    'color' => 'h2, .site-footer, .agent_details i',
                    'background-color' => '.bar_center h2::after, .bar_left h2::after,.breadcrumbs',
                ),
            ),
            array(
                'id'       => 'ar-bgcolor',
                'type'     => 'color',
                'title'    => __('Site Background Color', 'redux-framework-demo'), 
                'subtitle' => __('Pick a color for the page background (default: #fff).', 'redux-framework-demo'),
                'default'  => '#fff',
                'validate' => 'color',
                'output'    => array(
                    'background-color' => '.wrapper,body',
                ),
            ),
            array(
                'id'       => 'ar-logo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Logo', 'redux-framework-demo'),
                'desc'     => __('Logo Uploader for Site', 'redux-framework-demo'),
                'subtitle' => __('Main Site Logo', 'redux-framework-demo'),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                ),
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Top Bar', 'redux-framework-demo' ),
        'desc'       => __( 'Settings for the Top Bar', 'redux-framework-demo' ),
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'tb-bgcolor',
                'type'     => 'color',
                'title'    => __( 'Top Bar background color', 'redux-framework-demo' ),
                'subtitle' => __( 'Set the color for the background', 'redux-framework-demo' ),
                // 'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => '#fff',
                'validate' => 'color',
                'output'    => array(
                    'background-color' => '.ar_topbar',
                ),
            ),
            array(
                'id'       => 'tb-color',
                'type'     => 'color',
                'title'    => __( 'Top Bar text color', 'redux-framework-demo' ),
                'subtitle' => __( 'Set the color for the text', 'redux-framework-demo' ),
                // 'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => '#000',
                'validate' => 'color',
                'output'    => array(
                    'color' => '.ar_topbar',
                ),
            ),
            array(
                'id'               => 'tb-editor',
                'type'             => 'editor',
                'title'            => __('Top Bar Right Section', 'redux-framework-demo'), 
                'subtitle'         => __('Enter your text for right topbar', 'redux-framework-demo'),
                'default'          => 'Real Estate Site',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            )

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Navbar', 'redux-framework-demo' ),
        'id'     => 'ar-navbar',
        'desc'   => __( 'Fonts for the navbar links', 'redux-framework-demo' ),
        'icon'   => 'el el-fontsize',
        'fields' => array(
            array(
                'id'          => 'ar-navlinks',
                'type'        => 'typography', 
                'title'       => __('Navbar Font', 'redux-framework-demo'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('.navbar-light .navbar-nav .nav-link'),
                'units'       =>'px',
                'subtitle'    => __('Typography options for navigation links', 'redux-framework-demo'),
                'default'     => array(
                    'color'       => '#333', 
                    
                ),
            )

        )
    ) );

    /*
     * <--- END SECTIONS
     */



    // Typogragpy Section for the Whole Website and Details for IT.
     
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Typography', 'redux-framework-demo' ),
        'id'     => 'typo',
        'desc'   => __( 'Fonts for the Whole Site', 'redux-framework-demo' ),
        'icon'   => 'el el-fontsize',
        'fields' => array(
            array(
                'id'          => 'typo_body',
                'type'        => 'typography', 
                'title'       => __('Site Font', 'redux-framework-demo'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('body'),
                'units'       =>'px',
                'subtitle'    => __('Typography options for whole body', 'redux-framework-demo'),
                'default'     => array(
                    'color'       => '#333', 
                    'font-style'  => '700', 
                    'font-family' => 'Abel', 
                    'google'      => true,
                    'font-size'   => '33px', 
                    'line-height' => '40'
                ),
            )

        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'  => __( 'Social Media', 'redux-framework-demo' ),
        'id'     => 'site_sm',
        'desc'   => __( 'Social Media links for site', 'redux-framework-demo' ),
        'icon'   => 'el el-facebook',
        'fields' => array(

            array(
                'id'       => '1agent_fb',
                'type'     => 'text',
                'title'    => __('Agent Fb Page Address', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => '1agent_tw',
                'type'     => 'text',
                'title'    => __('Agent Twitter', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => '1agent_li',
                'type'     => 'text',
                'title'    => __('Agent Linkedin', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => '1agent_ig',
                'type'     => 'text',
                'title'    => __('Agent Instagram', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => '1agent_ytube',
                'type'     => 'text',
                'title'    => __('Agent Youtube', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),


            )
            ) );


    Redux::setSection( $opt_name, array(
        'title'  => __( 'Agent Details', 'redux-framework-demo' ),
        'id'     => 'site_agent',
        'desc'   => __( 'Real Estate Agent Information', 'redux-framework-demo' ),
        'icon'   => 'el el-user',
        'fields' => array(
            array(
                'id'       => 'agent_dp',
                'type'     => 'media',
                'title'    => __('Agent Picture', 'redux-framework-demo'),
                'subtitle' => __('Agent picture to be displayed.', 'redux-framework-demo'),
                'url       => false ',
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                ),
            ),
            array(
                'id'       => 'agent_name',
                'type'     => 'text',
                'title'    => __('Agent Name', 'redux-framework-demo'),
                'subtitle' => __('Enter agent Name', 'redux-framework-demo'),
                'default'  => 'Agent Name'
            ),
            array(
                'id'       => 'agent_subname',
                'type'     => 'text',
                'title'    => __('Agent Title', 'redux-framework-demo'),
                'subtitle' => __('Enter Agent Title', 'redux-framework-demo'),
                'default'  => 'Agent Title'
            ),
            array(
                'id'               => 'agent_bio',
                'type'             => 'editor',
                'title'            => __('Agent Details', 'redux-framework-demo'), 
                'subtitle'         => __('Biography text would go here.', 'redux-framework-demo'),
                'default'          => 'Agent Biography.',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            ),
            array(
                'id'       => 'agent_address',
                'type'     => 'text',
                'title'    => __('Agent Office Address', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => 'Some address'
            ),
            array(
                'id'       => 'agent_phone',
                'type'     => 'text',
                'title'    => __('Agent Phone Number', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => '000-000000'
            ),
            array(
                'id'       => 'agent_email',
                'type'     => 'text',
                'title'    => __('Agent Email Address', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => 'email@address.com'
            ),
            array(
                'id'       => 'agent_website',
                'type'     => 'text',
                'title'    => __('Agent Website Address', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => 'www.website.com'
            ),
            array(
                'id'       => 'agent_fb',
                'type'     => 'text',
                'title'    => __('Agent Fb Page Address', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => 'agent_tw',
                'type'     => 'text',
                'title'    => __('Agent Twitter', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => 'agent_li',
                'type'     => 'text',
                'title'    => __('Agent Linkedin', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => 'agent_ig',
                'type'     => 'text',
                'title'    => __('Agent Instagram', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),
            array(
                'id'       => 'agent_ytube',
                'type'     => 'text',
                'title'    => __('Agent Youtube', 'redux-framework-demo'),
                'subtitle' => __('You can leave it blank as well', 'redux-framework-demo'),
                'default'  => ''
            ),

        )
    ) );
     



    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'redux-framework-demo' ),
        'id'     => 'foot',
        'desc'   => __( 'Footer for the Site', 'redux-framework-demo' ),
        'icon'   => 'el el-edit',
        'fields' => array(
            array(
                'id'       => 'bgfoot',
                'type'     => 'color',
                'title'     => __('Footer Background Color', 'redux-framework-demo'),
                'subtitle'  => __('Pick a background color.', 'redux-framework-demo'),
                'default'   => '#12171b ',
                'output'    => array('background-color' => '.main-foot')
            ),
            array(
                'id'       => 'ar-ftlogo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Footer Logo', 'redux-framework-demo'),
                'desc'     => __('Logo Uploader for Site Footer' , 'redux-framework-demo'),
                'subtitle' => __('Main Site Logo', 'redux-framework-demo'),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                ),
            ),
            array(
                'id'               => 'ft-deseditor',
                'type'             => 'editor',
                'title'            => __('Footer Description Area', 'redux-framework-demo'), 
                'subtitle'         => __('Description about site', 'redux-framework-demo'),
                'default'          => 'Real Estate Site',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            ),
            array(
                'id'               => 'ft-address',
                'type'             => 'text',
                'title'            => __('Office Address', 'redux-framework-demo'), 
                'subtitle'         => __('Office Postal', 'redux-framework-demo'),
                'default'          => 'Real Estate Site',
            ),
            array(
                'id'               => 'ft-phone',
                'type'             => 'text',
                'title'            => __('Phone Number', 'redux-framework-demo'), 
                'subtitle'         => __('Office Phone Number', 'redux-framework-demo'),
                'default'          => 'Real Estate Site',
            ),
            array(
                'id'               => 'ft-mail',
                'type'             => 'text',
                'title'            => __('Mail Address', 'redux-framework-demo'), 
                'subtitle'         => __('Office Mail Address', 'redux-framework-demo'),
                'default'          => 'Real Estate Site',
            ),

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Sub Footer', 'redux-framework-demo' ),
        'id'     => 'subfoot',
        'desc'   => __( 'Lower Footer for the Site', 'redux-framework-demo' ),
        'icon'   => 'el el-edit',
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'bgsubfoot',
                'type'     => 'color',
                'title'     => __('Footer Background Color', 'redux-framework-demo'),
                'subtitle'  => __('Pick a background color.', 'redux-framework-demo'),
                'default'   => '#12171b ',
                'output'    => array('background-color' => '.copy-foot')
            ),
            array(
                'id'       => 'txsubfoot',
                'type'     => 'text',
                'title'     => __('Footer Text', 'redux-framework-demo'),
                'subtitle'  => __('Copyright text goes here', 'redux-framework-demo'),
                'default'   => '© Copyright 2017 -2018 Matt Russell. All rights reserved.',
            )

        )
    ) );


                // Css Section

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Custom Style', 'redux-framework-demo' ),
        'id'     => 'css',
        'desc'   => __( 'CSS for the Site', 'redux-framework-demo' ),
        'icon'   => 'el el-css',
        'fields' => array(
            array(
                'id'       => 'css_editor',
                'type'     => 'ace_editor',
                'title'    => __('CSS Code', 'redux-framework-demo'),
                'subtitle' => __('Paste your CSS code here.', 'redux-framework-demo'),
                'mode'     => 'css',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => "#header{\nmargin: 0 auto;\n}"
            )

        )
    ) );




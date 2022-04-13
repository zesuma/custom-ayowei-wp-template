<?php

// registering our sidebars
add_action( 'widgets_init', 'ayowei_sidebars' );

// -- INITIALIZE SIDEBARS  -- //
function ayowei_sidebars(){
    
    // HOMEPAGE
        // Hero Left sidebar
        register_sidebar(
            array(
                'name'              => 'Hero Left Sidebar',
                'id'                => 'home-hero-left',
                'description'       => 'This is the Hero Left sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // Hero Right sidebar
        register_sidebar(
            array(
                'name'              => 'Hero Right Sidebar',
                'id'                => 'home-hero-right',
                'description'       => 'This is the Hero Right sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // Home Sections
        register_sidebar(
            array(
                'name'              => 'Home Section 1',
                'id'                => 'home-section-one',
                'description'       => 'This is the Home Section One sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'Home Section 2',
                'id'                => 'home-section-two',
                'description'       => 'This is the Home Section Two sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'Home Section 3',
                'id'                => 'home-section-three',
                'description'       => 'This is the Home Section Three sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'Home Section 4',
                'id'                => 'home-section-four',
                'description'       => 'This is the Home Section Four sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // About Sections
        register_sidebar(
            array(
                'name'              => 'About Section 1',
                'id'                => 'about-section-one',
                'description'       => 'This is the About Section One sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'About Section 2',
                'id'                => 'about-section-two',
                'description'       => 'This is the About Section Two sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'About Section 3',
                'id'                => 'about-section-three',
                'description'       => 'This is the About Section Three sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'About Section 4',
                'id'                => 'about-section-four',
                'description'       => 'This is the About Section Four sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // Get Involved Sections
        register_sidebar(
            array(
                'name'              => 'Get Involved Section 1',
                'id'                => 'get-involved-section-one',
                'description'       => 'This is the Get Involved Section One sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'Get Involved Section 2',
                'id'                => 'get-involved-section-two',
                'description'       => 'This is the Get Involved Section Two sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'Get Involved Section 3',
                'id'                => 'get-involved-section-three',
                'description'       => 'This is the Get Involved Section Three sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // Blako Sections
        register_sidebar(
            array(
                'name'              => 'Blako Section 1',
                'id'                => 'blako-section-one',
                'description'       => 'This is the Blako Section One sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'Blako Section 2',
                'id'                => 'blako-section-two',
                'description'       => 'This is the Blako Section Two sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        register_sidebar(
            array(
                'name'              => 'Blako Section 3',
                'id'                => 'blako-section-three',
                'description'       => 'This is the Blako Section Three sidebar.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // Donation Page Hero Left sidebar
        register_sidebar(
            array(
                'name'              => 'Donation Page Hero Left Sidebar',
                'id'                => 'sidebar-donation-hero-left',
                'description'       => 'This is the Donation Page Hero Left sidebar. Add Donate Option here.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // Donation Page Hero Right sidebar
        register_sidebar(
            array(
                'name'              => 'Donation Page Hero Right Sidebar',
                'id'                => 'sidebar-donation-hero-right',
                'description'       => 'This is the Donation Page Hero Right sidebar. Add Title here.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // LEELIE'S PAGE
        // Leelai Hero Left sidebar
        register_sidebar(
            array(
                'name'              => 'Leelai Hero Left',
                'id'                => 'leelai-hero-left',
                'description'       => 'Leelai Hero Left sidebar. Add Title here.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );

        // Leelai Hero Right sidebar
        register_sidebar(
            array(
                'name'              => 'Leelai Hero Right',
                'id'                => 'leelai-hero-right',
                'description'       => 'Leelai Hero Right sidebar. Add Image here.',
                'before_widget'     => '',
                'after_widget'      => ''
            )
        );


// -- SPECIAL PROMO BANNER -- //
    
    // Promo Banner sidebar
    register_sidebar(
        array(
            'name'              => 'Promo Banner',
            'id'                => 'promo-banner',
            'description'       => 'Promo banner. Add whatever here.',
            'before_widget'     => '',
            'after_widget'      => ''
        )
    );
    
// -- DONATE -- //
    
    // Donation sidebar
    register_sidebar(
        array(
            'name'              => 'Donate Sidebar',
            'id'                => 'sidebar-donate',
            'description'       => 'This is the DONATE sidebar. Add Image here.',
            'before_widget'     => '',
            'after_widget'      => ''
        )
    );
    
// -- ACTUAL SIDEBARS -- //
    
    // Sub-Page sidebar
    register_sidebar(
        array(
            'name'              => 'Sub-Page Sidebar',
            'id'                => 'sidebar-3',
            'description'       => 'This is the sub-page sidebar. Add your widgets here.',
            'before_widget'     => '<div class="widget widget--wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h2 class="widget--title">',
            'after_title'       => '</h2>'
        )
    );

    // blog sidebar
    register_sidebar(
        array(
            'name'              => 'Blog Sidebar',
            'id'                => 'sidebar-4',
            'description'       => 'This is the blog sidebar. Add your widgets here.',
            'before_widget'     => '<div class="widget widget--wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h2 class="widget--title">',
            'after_title'       => '</h2>'
        )
    );

// -- TOP INFO BANNER --  //
    
    // info banner sidebar
    register_sidebar(
        array(
            'name'              => 'Info Banner Sidebar',
            'id'                => 'sidebar-banner',
            'description'       => 'This is the Info banner sidebar. Add your widgets here.',
            'before_widget'     => '<div class="info info__banner">',
            'after_widget'      => '</div>'
        )
    );

    // Social Banner
    register_sidebar(
        array(
            'name'              => 'Social Banner',
            'id'                => 'social-banner',
            'description'       => 'This is the social banner sidebar. Add your widgets here.',
            'before_widget'     => '',
            'after_widget'      => ''
        )
    );
}

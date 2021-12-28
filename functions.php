<?php 

     //including customizer settings file
     include_once('includes/class-wp-bootstrap-navwalker.php');
     include_once('templates/helpers/customizer.php');
     
     new TheMinimalist_Customizer();

    // fuction to add style file  css to the theme

    function wp_dcwcommerce_theme_scripts(){
        //includin file styles -fontawesome
        wp_enqueue_style( "fontawesome", get_template_directory_uri()."/vendor/css/all.min.css");
        
        //includin file styles -owl carousel
        wp_enqueue_style( "owlcarousel", get_template_directory_uri()."/vendor/css/owl.carousel.min.css");

        //includin file styles -owl carousel default theme
        wp_enqueue_style( "owlcarousel-dt", get_template_directory_uri()."/vendor/css/owl.theme.default.min.css");

        //includin file styles -aos librery
        wp_enqueue_style( "aos", get_template_directory_uri()."/vendor/css/aos.css");

        //includin file styles -bootstrap
        wp_enqueue_style( "bootstrap", get_template_directory_uri()."/vendor/css/bootstrap.min.css");

        //includin file styles -style.css
        wp_enqueue_style( "custom-style", get_stylesheet_uri());      

        

        //includin jquery file
        wp_enqueue_script("jqueryid",get_template_directory_uri()."/vendor/js/jquery351.min.js",array(),"1.0",true);

        //includin bootstrap file
        wp_enqueue_script("bootstrapjs",get_template_directory_uri()."/vendor/js/bootstrap.min.js",array(),"1.0",true);

        //includin aos librery js file
        wp_enqueue_script("aosjs",get_template_directory_uri()."/vendor/js/aos.js",array(),"1.0",true);

        //includin owl carousel js file
        wp_enqueue_script("owlcarouseljs",get_template_directory_uri()."/vendor/js/owl.carousel.min.js",array(),"1.0",true);

        //includin js file
        wp_enqueue_script("jsscriptid",get_template_directory_uri()."/asset/js/main.js",array("jqueryid"),"1.0",true);
    }
    add_action("wp_enqueue_scripts","wp_dcwcommerce_theme_scripts");


    //adding new features to the theme
    function wp_dcwcommerce_theme_supports(){
        add_theme_support( "title-tag");
        add_theme_support( "post-thumbnails");
        add_theme_support( "html5",array("search-form"));
        add_theme_support( "custom-logo");
    }
    add_action( "after_setup_theme","wp_dcwcommerce_theme_supports");


    //register navigation menu in the theme
    function wp_dcwcommerce_theme_nav_menu(){
        register_nav_menus(array(
            'primary-menu'=> __('primary menu','text_domain'),
            'footer-menu'=> __('footer menu','text_domain')
        ));
    }
    add_action('init','wp_dcwcommerce_theme_nav_menu');


    //override excerpt method - displaying less then 55 word
    function wp_dcwcommerce_theme_excerpt($lenght){

        return substr($lenght,10);
    }

    add_filter( 'excerpt_length', 'wp_dcwcommerce_theme_excerpt');

// string traduction with polylang plugin
    function register_strings() {
        pll_register_string('content_title', 'Acueil');
        pll_register_string('message_sensibilisation', 'Sensibilisations');
        pll_register_string('contactez', 'Pour nous contactez');        
        pll_register_string('contact', 'Contact');
        pll_register_string('annonces', 'Annonces');
        pll_register_string('messages_sensibilisation', 'Messages de sensibilisation');

        pll_register_string('services_en_ligne', 'Services en ligne');

        pll_register_string('apropos', 'Apropos');
        pll_register_string('newsletters', 'Newsletters');
        pll_register_string('stay', 'Stay update with our latest');        
        pll_register_string('instagram', 'Instagram');        
        pll_register_string('follow us', 'Follow us');        

        pll_register_string('design', 'DESIGNED BY');        
        pll_register_string('reseau', 'Notre Réseau de sites web');        
        
    }
   add_action('init','register_strings');

    //adding widget area
    function wpdcwcommerce_widgets_init() {
 
        register_sidebar( array(
            'name'          => 'Widget Area_num_vert',
            'id'            => 'custom-footer-widget_num_vert',
            'before_widget' => '<div class="panneau-image">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="title">',
            'after_title'   => '</div>',
        ) );
        register_sidebar( array(
            'name'          => 'Widget Area_facturation',
            'id'            => 'custom-footer-widget_facturation',
            'before_widget' => '<div class="panneau-image">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="title">',
            'after_title'   => '</div>',
        ) );
        register_sidebar( array(
            'name'          => 'Widget Area_commerce_ext',
            'id'            => 'custom-footer-widget_commerce_ext',
            'before_widget' => '<div class="panneau-image">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="title">',
            'after_title'   => '</div>',
        ) );
        register_sidebar( array(
            'name'          => 'Widget Area_indice',
            'id'            => 'custom-footer-widget_indice',
            'before_widget' => '<div class="panneau-image">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="title">',
            'after_title'   => '</div>',
        ) );

//-------------------------widget services------------------------
        register_sidebar( array(
            'name'          => 'Widget_service_stat',
            'id'            => 'widget_service_stat',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_event',
            'id'            => 'widget_service_event',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_galerie',
            'id'            => 'widget_service_galerie',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_reglementation',
            'id'            => 'widget_service_reg',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_formulaires',
            'id'            => 'widget_service_forms',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_dossiers',
            'id'            => 'widget_service_dossiers',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_plainte',
            'id'            => 'widget_service_plainte',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );        
        register_sidebar( array(
            'name'          => 'Widget_service_annonce',
            'id'            => 'widget_service_annonce',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_faq',
            'id'            => 'widget_service_faq',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_alerte',
            'id'            => 'widget_service_alerte',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_guide',
            'id'            => 'widget_service_guide',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => 'Widget_service_sondage',
            'id'            => 'widget_service_sondage',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    //-----------------sidebare widget-------------------------
        register_sidebar( array(
            'name'          => 'sidebar_service_online',
            'id'            => 'sidebar_service_online',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h5 class="title-content col-md-12 py-3">',
            'after_title'   => '</h5>',
        ) );
        register_sidebar( array(
            'name'          => 'sidebar_frontiere',
            'id'            => 'sidebar_frontiere',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h5 class="title-content col-md-12 py-3">',
            'after_title'   => '</h5>',
        ) );
        register_sidebar( array(
            'name'          => 'sidebar_permanence',
            'id'            => 'sidebar_permanence',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h5 class="title-content col-md-12 py-3">',
            'after_title'   => '</h5>',
        ) );
        register_sidebar( array(
            'name'          => 'sidebar_operateurs',
            'id'            => 'sidebar_operateurs',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h5 class="title-content col-md-12 py-3">',
            'after_title'   => '</h5>',
        ) );
        //-----------------slider widget-------------------------
        register_sidebar( array(
            'name'          => 'widget_slider',
            'id'            => 'widget_slider',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<div>',
            'after_title'   => '</div>',
        ) );
         //-----------------languages widget-------------------------
         register_sidebar( array(
            'name'          => 'widget_languages',
            'id'            => 'widget_languages',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
     
    }
    
    add_action( 'widgets_init', 'wpdcwcommerce_widgets_init' );

?>
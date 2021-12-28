<?php 

class TheMinimalist_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->header_callout_section( $wp_customize );
        $this->social_callout_section( $wp_customize );
        $this->site_callout_section( $wp_customize );

        $this->actualite_callout_section( $wp_customize );
        $this->contact_callout_section( $wp_customize );


        $this->sensibilisation_callout_section( $wp_customize );
        $this->annonce_callout_section( $wp_customize );
        $this->direction_callout_section( $wp_customize );
       
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }

    /* actualiser identity site Section */
    private function site_callout_section( $wp_customize ) {
		
        //add setting - adresse en arabe
        $wp_customize->add_setting('site_adress_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'حي النسيم رقم 09 إمامة تلمسان'        
        ));        
    
        //add controls - adresse en arabe
        $wp_customize->add_control('site_adress_text_control',array(
            'label'=>__('adresse en arabe','wp-dcwcommerce'),            
            'type'=>'textarea',          
            'section'=>'title_tagline',
            'settings'=>'site_adress_text_field'
        ));        

         //add setting - slogan du site en arabe
         $wp_customize->add_setting('site_nom_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'مديرية التجارة لولاية تلمسان'        
        ));        
    
        //add controls - slogan arabe == dcwtlemcen
        $wp_customize->add_control('site_nom_text_control',array(
            'label'=>__('slogan en arabe','wp-dcwcommerce'),            
            'section'=>'title_tagline',
            'settings'=>'site_nom_text_field'
        ));        
        
    }

  
    /* header settings Section */
    private function header_callout_section( $wp_customize ) {
		// New section == header settings
        $wp_customize->add_section('header', array(
            'title' => 'header settings',
            'priority' => 2,
            'description' => __('header section settings', 'wp-dcwcommerce'),
        ));    
        // setting for header image
        $wp_customize->add_setting('header_image_fr', array(            
            'capability' => 'edit_theme_options',            
            'type'                  =>  'theme_mod',
        ));
        // control for header image ==header image
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-image_fr-control', array(
            'label' => 'image d\'entete francais',
            'height' => 75,
           'width' => 537,
            'section' => 'header',
            'settings' => 'header_image_fr',            
        )));        

        // setting for header image
        $wp_customize->add_setting('header_image_ar', array(            
            'capability' => 'edit_theme_options',   
            'type'                  =>  'theme_mod',         
        ));
        // control for header image ==header image
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-image_ar-control', array(
            'label' => 'image d\'entete arabe',
            'height' => 75,
            'width' => 537,
            'section' => 'header',
            'settings' => 'header_image_ar',            
        )));                


        //add setting - header text francais ==dcwtlemcen
        $wp_customize->add_setting('header_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'dcwtlemcen'        
        ));        
    
        //add controls - header text francais == dcwtlemcen
        $wp_customize->add_control('header_text_control',array(
            'label'=>__('header text - francais','wp-dcwcommerce'),
            'description'=>'change header text like dcwtlemcen',
            'section'=>'header',
            'settings'=>'header_text_field'
        ));        
        //add setting - header text arabe ==dcwtlemcen
        $wp_customize->add_setting('header_text_field_ar',array(
            'capability'=>'edit_theme_options',
            'default'=>'مديرية التجارة'        
        ));        
    
        //add controls - header text arabe == dcwtlemcen
        $wp_customize->add_control('header_text_control_ar',array(
            'label'=>__('header text - arabe','wp-dcwcommerce'),
            'description'=>'change header text like dcwtlemcen',
            'section'=>'header',
            'settings'=>'header_text_field_ar'
        ));        
    
    
        //add header text setting - description 
        $wp_customize->add_setting('header_text_description_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'de la wilaya de tlemcen'        
        ));        
    
        //add controls - header text - description
        $wp_customize->add_control('header_text_description_control',array(
            'label'=>__('header text description','wp-dcwcommerce'),
            'description'=>'change header text description like direction du commerce de la wilaya de tlemcen',
            'section'=>'header',
            'settings'=>'header_text_description_field'
        ));                
        //add header text setting - description - arabe 
        $wp_customize->add_setting('header_text_description_field_ar',array(
            'capability'=>'edit_theme_options',
            'default'=>'لولاية تلمسان'        
        ));        
    
        //add controls - header text - description - arabe
        $wp_customize->add_control('header_text_description_control_ar',array(
            'label'=>__('header text description','wp-dcwcommerce'),
            'description'=>'change header text description like direction du commerce de la wilaya de tlemcen',
            'section'=>'header',
            'settings'=>'header_text_description_field_ar'
        ));                
    
    
    }

    /* social media Section */
    private function social_callout_section( $wp_customize ) {
		// New section for "Layout".
        $wp_customize->add_section('social', array(
            'title' => 'social media settings',            
        ));    
               
        // 1st social media image
        $wp_customize->add_setting('social-image1', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));
    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control1', array(
            'label' => '1st social image',
            'section' => 'social',
            'settings' => 'social-image1',            
        )));
        // 2sd social media image
        $wp_customize->add_setting('social-image2', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'social-image-control2', array(
            'label' => '2sd social image',
            'section' => 'social',
            'settings' => 'social-image2',            
        )));
        // 3rd social media image
        $wp_customize->add_setting('social-image3', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control3', array(
            'label' => '3rd social image',
            'section' => 'social',
            'settings' => 'social-image3',            
        )));
        // 4th social media image
        $wp_customize->add_setting('social-image4', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control4', array(
            'label' => '4th social image',
            'section' => 'social',
            'settings' => 'social-image4',            
        )));
        // 5th social media image
        $wp_customize->add_setting('social-image5', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control5', array(
            'label' => '5th social image',
            'section' => 'social',
            'settings' => 'social-image5',            
        )));
        // 6th social media image
        $wp_customize->add_setting('social-image6', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control6', array(
            'label' => '6th social image',
            'section' => 'social',
            'settings' => 'social-image6',            
        )));
        // 7th social media image
        $wp_customize->add_setting('social-image7', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control7', array(
            'label' => '7th social image',
            'section' => 'social',
            'settings' => 'social-image7',            
        )));
        // 4th social media image
        $wp_customize->add_setting('social-image8', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control8', array(
            'label' => '8th social image',
            'section' => 'social',
            'settings' => 'social-image8',            
        )));
        // 9th social media image
        $wp_customize->add_setting('social-image9', array(
            'default' => '',            
            'capability' => 'edit_theme_options',            
        ));    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social-image-control9', array(
            'label' => '9th social image',
            'section' => 'social',
            'settings' => 'social-image9',            
        )));


        //add facebook text setting and control
        $wp_customize->add_setting('facebook_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'hakki hakki@facebook.com'        
        ));            
        
        $wp_customize->add_control('facebook_text_control',array(
            'label'=>__('facebook adress','wp-dcwcommerce'),            
            'section'=>'social',
            'settings'=>'facebook_text_field'
        ));        
              
        //add twitter text setting and control
        $wp_customize->add_setting('twitter_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'hakki hakki@twitter.com'        
        ));            
        
        $wp_customize->add_control('twitter_text_control',array(
            'label'=>__('twitter adress','wp-dcwcommerce'),            
            'section'=>'social',
            'settings'=>'twitter_text_field'
        ));        

        //add instagram setting and control
        $wp_customize->add_setting('instagram_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'hakki hakki'        
        ));            
        
        $wp_customize->add_control('instagram_text_control',array(
            'label'=>__('instagram adress','wp-dcwcommerce'),            
            'section'=>'social',
            'settings'=>'instagram_text_field'
        ));        
        //add youtube setting and control
        $wp_customize->add_setting('youtube_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'hakki hakki'        
        ));            
        $wp_customize->add_control('youtube_text_control',array(
            'label'=>__('youtube chanel adress','wp-dcwcommerce'),            
            'section'=>'social',
            'settings'=>'youtube_text_field'
        ));           
    }



    /* sensibilisation panel */
    private function sensibilisation_callout_section( $wp_customize ) {

        // New section for "Layout".
        $wp_customize->add_section('sensibilisation_section', array(
            'title' => 'messages de sensibilisation',                                
        ));    
        // 1st message                  
        $wp_customize->add_setting('sens_text1_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('sens_text1_control',array(
            'label'=>__('sensibilisation text 1','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'sensibilisation_section',
            'settings'=>'sens_text1_field'
        ));        


        // 2 sd message         
        $wp_customize->add_setting('sens_text2_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('sens_text2_control',array(
            'label'=>__('sensibilisation text 2','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'sensibilisation_section',
            'settings'=>'sens_text2_field'
        ));        


        // 3 rd message         
        $wp_customize->add_setting('sens_text3_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('sens_text3_control',array(
            'label'=>__('sensibilisation text 3','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'sensibilisation_section',
            'settings'=>'sens_text3_field'
        ));        

        // 4 th message         
        $wp_customize->add_setting('sens_text4_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('sens_text4_control',array(
            'label'=>__('sensibilisation text 4','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'sensibilisation_section',
            'settings'=>'sens_text4_field'
        ));        

        // 5 sd message         
        $wp_customize->add_setting('sens_text5_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('sens_text5_control',array(
            'label'=>__('sensibilisation text 5','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'sensibilisation_section',
            'settings'=>'sens_text5_field'
        ));        
    
    }

     /* Annonces panel */
     private function annonce_callout_section( $wp_customize ) {

        // New section for "Layout".
        $wp_customize->add_section('annonces_section', array(
            'title' => 'Annonces',                                
        ));    
        // 1st annonce               
        $wp_customize->add_setting('annonce_text1_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('annonce_text1_control',array(
            'label'=>__('annonce text 1','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'annonces_section',
            'settings'=>'annonce_text1_field'
        ));        

         // 2sd annonce               
        $wp_customize->add_setting('annonce_text2_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('annonce_text2_control',array(
            'label'=>__('annonce text 2','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'annonces_section',
            'settings'=>'annonce_text2_field'
        ));        
        // 3rd annonce               
        $wp_customize->add_setting('annonce_text3_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('annonce_text3_control',array(
            'label'=>__('annonce text 3','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'annonces_section',
            'settings'=>'annonce_text3_field'
        ));        
        // 4th annonce               
        $wp_customize->add_setting('annonce_text4_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('annonce_text4_control',array(
            'label'=>__('annonce text 4','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'annonces_section',
            'settings'=>'annonce_text4_field'
        ));        
        // 5th annonce               
        $wp_customize->add_setting('annonce_text5_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('annonce_text5_control',array(
            'label'=>__('annonce text 5','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'annonces_section',
            'settings'=>'annonce_text5_field'
        ));        
    }

     /* contact panel */
     private function direction_callout_section( $wp_customize ) {

        // New section for contact
        $wp_customize->add_section('contact_section', array(
            'title' => 'Pour nous contactez',                                
        ));    
        // direction siege               
        $wp_customize->add_setting('contact_text1_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('contact_text1_control',array(
            'label'=>__('contactez la direction','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'contact_section',
            'settings'=>'contact_text1_field'
        ));        


        // inspection aux frontiere      
        $wp_customize->add_setting('contact_text2_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('contact_text2_control',array(
            'label'=>__('inspections aux frontieres','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'contact_section',
            'settings'=>'contact_text2_field'
        ));        


        // inspection territorial      
        $wp_customize->add_setting('contact_text3_field', array(            
            'capability' => 'edit_theme_options',            
        ));
            
        $wp_customize->add_control('contact_text3_control',array(
            'label'=>__('inspection territorial','wp-dcwcommerce'),  
            'type'=>'textarea',          
            'section'=>'contact_section',
            'settings'=>'contact_text3_field'
        ));        
        
    }


    /* Actualites settings Section */
    private function actualite_callout_section( $wp_customize ) {
		// New section for "Layout".
        $wp_customize->add_section('actualite', array(
            'title' => 'Actualite settings',
            'priority' => 2,
            'description' => __('Actualite section settings', 'wp-dcwcommerce'),
        ));    
               
        //add setting - actualite marquee text
        $wp_customize->add_setting('actualite_text_field',array(
            'capability'=>'edit_theme_options',
            'default'=>'dcwtlemcen'        
        ));        
    
        //add controls - header text
        $wp_customize->add_control('actualite_text_control',array(
            'label'=>__('actualite text','wp-dcwcommerce'),            
            'type'=>'textarea',
            'section'=>'actualite',
            'settings'=>'actualite_text_field'
        ));        
    
    
    }

        /* contact settings Section */
    private function contact_callout_section( $wp_customize ) {
            
                   
            //add setting - adress marquee text
            $wp_customize->add_setting('adress_text_field',array(
                'capability'=>'edit_theme_options',
                'default'=>'09 cite nassim Imama'        
            ));                    
            $wp_customize->add_control('adress_text_control',array(
                'label'=>__('adresse','wp-dcwcommerce'),            
                'type'=>'textarea',
                'section'=>'title_tagline',
                'settings'=>'adress_text_field'
            ));        

            //add setting - tel fax  text
            $wp_customize->add_setting('telfax_text_field',array(
                'capability'=>'edit_theme_options',
                'default'=>'TEL:043210874-043210876 -FAX:043210879'        
            ));                    
            $wp_customize->add_control('telfax_text_control',array(
                'label'=>__('tel / fax','wp-dcwcommerce'),            
                'type'=>'textarea',
                'section'=>'title_tagline',
                'settings'=>'telfax_text_field'
            ));        
         //add setting - email  text
            $wp_customize->add_setting('email_text_field',array(
                'capability'=>'edit_theme_options',
                'default'=>'dcptlemcen@gmail.com'        
            ));                    
            $wp_customize->add_control('email_text_control',array(
                'label'=>__('Email','wp-dcwcommerce'),            
                'type'=>'textarea',
                'section'=>'title_tagline',
                'settings'=>'email_text_field'
            ));        
        
        }
    

}




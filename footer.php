</main>
    <footer>    
      <section class="services">
        <div class="row p-0 m-0">
          <div class="col-md-2 m-0 p-0" data-aos="fade-right" data-aos-delay="200">
            <!-- widget area  services-statistiques -->    
              <?php               
                if ( is_active_sidebar( 'widget_service_stat' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="statistique">
                    <?php dynamic_sidebar( 'widget_service_stat' ); ?>
                  </div>                            
                <?php endif; ?>            
            <!-- 
            <div class="card">
              <i class="fas fa-chart-line mt-2"></i>
              <div class="card-body">
                <p class="card-text">statistiques</p>
              </div>
            </div>
             -->    
          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-right" data-aos-delay="200">
            <?php               
                if ( is_active_sidebar( 'widget_service_event' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="evenement">
                    <?php dynamic_sidebar( 'widget_service_event' ); ?>
                  </div>                            
                <?php endif; ?>   
            <!--
            <div class="card">
              <i class="far fa-calendar-alt mt-2"></i>
              <div class="card-body">
                <p class="card-text">Evenements</p>
              </div>
            </div>
            -->

          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-right" data-aos-delay="200">
              <?php               
                if ( is_active_sidebar( 'widget_service_galerie' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="galerie">
                    <?php dynamic_sidebar( 'widget_service_galerie' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--
            <div class="card">
              <i class="fas fa-camera mt-2"></i>
              <div class="card-body">
                <p class="card-text">Galerie</p>
              </div>
            </div>
            -->

          </div>
          <div class="col-md-2 m-0 p-0"  data-aos="fade-left" data-aos-delay="200"> 
              <?php               
                if ( is_active_sidebar( 'widget_service_reg' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="reglementation">
                    <?php dynamic_sidebar( 'widget_service_reg' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--
            <div class="card">
              <i class="fas fa-balance-scale mt-2"></i>
              <div class="card-body">
                <p class="card-text">Reglementation</p>
              </div>
            </div>
            -->

          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-left" data-aos-delay="200">
              <?php               
                if ( is_active_sidebar( 'widget_service_forms' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="formulaire">
                    <?php dynamic_sidebar( 'widget_service_forms' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--
            <div class="card">
              <i class="fab fa-wpforms mt-2"></i>
              <div class="card-body">
                <p class="card-text">Formulaires</p>
              </div>
            </div>
            -->

          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-left" data-aos-delay="200">
              <?php               
                if ( is_active_sidebar( 'widget_service_dossiers' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="dossiers">
                    <?php dynamic_sidebar( 'widget_service_dossiers' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--
            <div class="card">
              <i class="fas fa-folder-open mt-2"></i>
              <div class="card-body">
                <p class="card-text">Dossiers</p>
              </div>
            </div>
            -->
          </div>
        </div>
        <div class="row p-0 m-0">
          <div class="col-md-2 m-0 p-0" data-aos="fade-right" data-aos-delay="200">
              <?php               
                if ( is_active_sidebar( 'widget_service_plainte' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="plaintes">
                    <?php dynamic_sidebar( 'widget_service_plainte' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--
            <div class="card">              
              <i class="fas fa-edit mt-2"></i>
              <div class="card-body">
                <p class="card-text">Plaintes</p>
              </div>
            </div>
            -->
          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-right" data-aos-delay="200">
              <?php               
                if ( is_active_sidebar( 'widget_service_annonce' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="annonces">
                    <?php dynamic_sidebar( 'widget_service_annonce' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--            
            <div class="card">              
              <i class="fas fa-bullhorn mt-2"></i>
              <div class="card-body">
                <p class="card-text">Annonces</p>
              </div>
            </div>
            -->

          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-right" data-aos-delay="200">
              <?php               
                if ( is_active_sidebar( 'widget_service_faq' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="faq">
                    <?php dynamic_sidebar( 'widget_service_faq' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--            
            <div class="card">              
              <i class="fas fa-question-circle mt-2"></i>
              <div class="card-body">
                <p class="card-text">Faq</p>
              </div>
            </div>
            -->
          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-left" data-aos-delay="200">
             <?php               
                if ( is_active_sidebar( 'widget_service_alerte' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="alertes">
                    <?php dynamic_sidebar( 'widget_service_alerte' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--            
            <div class="card">              
              <i class="fas fa-bell mt-2"></i>
              <div class="card-body">
                <p class="card-text">Alertes</p>
              </div>
            </div>
            -->
          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-left" data-aos-delay="200">
             <?php               
                if ( is_active_sidebar( 'widget_service_guide' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="guides">
                    <?php dynamic_sidebar( 'widget_service_guide' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--            
            <div class="card">              
              <i class="fab fa-glide mt-2"></i>
              <div class="card-body">
                <p class="card-text">Guides</p>
              </div>
            </div>
            -->

          </div>
          <div class="col-md-2 m-0 p-0" data-aos="fade-left" data-aos-delay="200">
              <?php               
                if ( is_active_sidebar( 'widget_service_sondage' ) ) : ?>
                  <div id="header-widget-area" class="card service-card" role="sondages">
                    <?php dynamic_sidebar( 'widget_service_sondage' ); ?>
                  </div>                            
              <?php endif; ?>   
            
            <!--            
            <div class="card">
              <i class="fas fa-poll mt-2"></i>              
              <div class="card-body">
                <p class="card-text">Sondages</p>
              </div>
            </div>
            -->
          </div>
        </div>
      </section>
    <section>
      <div class="row p-3 row-footer ">
      <div class="col-md-12 p-0 m-0">
        <div class="title-footer">
          <span>DcwTlemcen</span>
      </div>
      </div>      
        <div class="col-md-3 col-sm-12 col-xs12">
          <div class="apropos" data-aos="fade-right" data-aos-delay="200">
              <h5><?php pll_e('Apropos','apropos');?></h5>
              <hr>
              <div class="footer-logo" data-aos="fade-up">
                <div class="logo-slogan">
                  <?php if(function_exists("the_custom_logo")): ?>
                     <a href="<?php get_bloginfo('home'); ?>">
                       <?php the_custom_logo(); ?>  
                     </a>
                  <?php else: ?>  
                     <a href="<?php get_bloginfo('home'); ?>"><?php get_bloginfo('name'); ?></a>                            
                  <?php endif; ?>                    
                  <div class="footer-slogan">
                  <div class="logo3">
                   <?php
                      
                      $str =get_bloginfo('name'); //"DCW.TLEMCEN";
                      $i=1;
                      $arr = str_split($str);
                      
                      //$arr2 = str_split($str, 3);
                      foreach ($arr as $value) {
                        ?>  
                        <span id="<?php 'id'.$i?>"><?php echo $value;?></span>
                        <?php $i++;?>
                        <?php
                      }                       
                    ?>                    
                   </div>                  
                      <div class="footer-description">
                        <?php if(get_bloginfo('language')=='ar' ): ?>
                          <?php if(get_theme_mod('site_nom_text_field')): ?>
                             <h5 data-aos-easing="ease" data-aos-delay="800"><?php echo get_theme_mod('site_nom_text_field'); ?></h5>
                          <?php  else: ?>
                             <h5 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">direction du commerce de la Wilaya de Tlemcen</h5>
                          <?php  endif; ?>                        
                        <?php else: ?>
                          <?php if(get_theme_mod('header_text_description_field')): ?>
                             <h5 data-aos-easing="ease" data-aos-delay="800"><?php echo get_theme_mod('header_text_description_field'); ?></h5>
                          <?php  else: ?>
                             <h5 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">direction du commerce de la Wilaya de Tlemcen</h5>
                          <?php  endif; ?>
                        <?php endif; ?>
                      </div>
                  </div>                  
                </div>
                <hr id="separator">
                <div class="footer-contact">  
                      <?php if(get_bloginfo('language')=='ar' ): ?>
                              <?php if(get_theme_mod( 'site_adress_text_field')): ?>                                  
                                  <span"><?php echo get_theme_mod('site_adress_text_field'); ?></span><br>
                              <?php  endif; ?>
                      <?php else: ?>
                              <?php if(get_theme_mod( 'adress_text_field')): ?>                                  
                                  <span"><?php echo get_theme_mod('adress_text_field'); ?></span><br>
                              <?php  endif; ?>
                     <?php endif; ?>
                      

                            <?php if(get_theme_mod('telfax_text_field')): ?>
                                <span"><?php echo get_theme_mod('telfax_text_field'); ?></span><br>
                            <?php  else: ?>
                              <span>TEL : 043210874 - 043210876 - FAX : 043210879</span><br>
                            <?php  endif; ?>


                            <?php if(get_theme_mod('email_text_field')): ?>
                                <span"><?php echo get_theme_mod('email_text_field'); ?></span><br>
                            <?php  else: ?>
                              <span>Email: dcptlemcen@gmail.com</span>
                            <?php  endif; ?>
                                        
                 </div>                                                        
              </div>                          
          </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs12">
          <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h5><?php pll_e('Newsletters','newsletters');?></h5>
                <hr>
                <p><?php pll_e('Stay update with our latest','stay');?></p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs12">
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h5><?php pll_e('Instagram','instagram');?></h5>
                <hr>
                <div class="flex-row">                
                    <?php if(get_theme_mod("social-image1")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image1')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/p1.jpeg" alt="insta1">
                    <?php endif; ?>  
                    <?php if(get_theme_mod("social-image2")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image2')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/p2.jpeg" alt="insta1">
                    <?php endif; ?>  
                    <?php if(get_theme_mod("social-image3")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image3')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/p3.jpeg" alt="insta1">
                    <?php endif; ?>                                          
                </div>
                <div class="flex-row">
                    <?php if(get_theme_mod("social-image4")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image4')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/p4.jpeg" alt="insta1">
                    <?php endif; ?>  
                    <?php if(get_theme_mod("social-image5")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image5')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/dcw13.jpg" alt="insta1">
                    <?php endif; ?>  
                    <?php if(get_theme_mod("social-image6")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image6')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/ministere1.jpg" alt="insta1">
                    <?php endif; ?>                                                   
                </div>
                <div class="flex-row">
                    <?php if(get_theme_mod("social-image7")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image7')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/p1.jpeg" alt="insta1">
                    <?php endif; ?>  
                    <?php if(get_theme_mod("social-image8")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image8')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/p2.jpeg" alt="insta1">
                    <?php endif; ?>  
                    <?php if(get_theme_mod("social-image9")): ?>
                      <img src="<?php echo wp_get_attachment_url(get_theme_mod('social-image9')); ?>" alt="">                            
                    <?php else: ?>  
                      <img src="asset/images/posts/p3.jpeg" alt="insta1">
                    <?php endif; ?>                                                                       
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs12">
            <div class="follow mb-3" data-aos="fade-left" data-aos-delay="200">
                <h5><?php pll_e('Follow us','follow us');?></h5>
                <hr>
                
                <div>
                          <?php if(get_theme_mod('facebook_text_field')): ?>                              
                                <a href="<?php echo get_theme_mod('facebook_text_field'); ?>"><i class="fab fa-facebook"></i></a>
                            <?php else: ?>
                                <a href="http://facebook.com/rabah.hakki"><i class="fab fa-facebook"></i></a>
                            <?php endif; ?>

                            <?php if(get_theme_mod('twitter_text_field')): ?>                              
                                <a href="<?php echo get_theme_mod('twitter_text_field'); ?>"><i class="fab fa-twitter"></i></a>                                
                            <?php else: ?>                                
                                <a href="http://twitter.com/rabah.hakki"><i class="fab fa-twitter"></i></a>
                            <?php endif; ?>

                            <?php if(get_theme_mod('instagram_text_field')): ?>                              
                                <a href="<?php echo get_theme_mod('instagram_text_field'); ?>"><i class="fab fa-instagram"></i></a>                                
                            <?php else: ?>                            
                                <a href="http://instagram.com/rabah.hakki"><i class="fab fa-instagram"></i></a>
                            <?php endif; ?>

                            <?php if(get_theme_mod('youtube_text_field')): ?>                              
                                <a href="<?php echo get_theme_mod('youtube_text_field'); ?>"><i class="fab fa-youtube"></i></a>                                
                            <?php else: ?>                                
                                <a href="http://youtube.com/rabah.hakki"><i class="fab fa-youtube"></i></a>
                            <?php endif; ?>
                    
                </div>
            </div>
            <span class="up__scroll aos-init aos-animate text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">                  
                <i class="fas fa-chevron-up chevronUp bottom" aria-hidden="true"></i><br>               
                <span id="scrollup">scroll up</span>
                
            </span>

        </div>
        
      </div>    
    </section>
    <section class="link">
      <div class="row">
        <div class="col-md-12">
          <div class="networks text-center">
          <?php if(get_bloginfo('language')=='ar' ): ?>
					  <h5 class="pb-4">شبكة مواقع الواب لقطاع الوزارة</h5>
					    <ul class="flex flex-row">              
                <li><a href="https://sidjilcom.cnrc.dz/">المركز الوطني للسجل التجاري</a></li>
							  <li><a href="http://www.cacqe.org/">المركز الوطني لمراقبة الجودة و الرزم</a></li>
								<li><a href="http://www.algex.dz/">ألجيكس</a></li>
								<li><a href="http://www.caci.dz/fr">الغرفة الجزائرية للتجارية و الصناعة</a></li>
								<li><a href="http://www.safex.dz/index.php?lang=fr">صافكس</a></li>
								<li><a href="http://www.magros.dz">ماجروس</a></li>
								<li><a href="http://www.p3a-algerie.org/">P3a</a></li>
								<li><a href="https://sidjilcom.cnrc.dz/">سجل كوم</a></li>																																			         
              <?php else: ?>
                <h5 class="pb-4">Notre Réseau de sites web</h5>
					    <ul class="flex flex-row">              
                <li><a href="https://sidjilcom.cnrc.dz/">Cnrc</a></li>
							  <li><a href="http://www.cacqe.org/">Cacqe</a></li>
								<li><a href="http://www.algex.dz/">Algex</a></li>
								<li><a href="http://www.caci.dz/fr">Caci</a></li>
								<li><a href="http://www.safex.dz/index.php?lang=fr">Safex</a></li>
								<li><a href="http://www.magros.dz">Magros</a></li>
								<li><a href="http://www.p3a-algerie.org/">P3a</a></li>
								<li><a href="https://sidjilcom.cnrc.dz/">Sidjilcom</a></li>																																			
              <?php endif; ?>              
              </ul>
				  </div>
        </div>
      </div>
    </section>
    <section class="copyright">    
      <div class="row">
        <div class="col-md-12 text-center">
          <span><a href="<?php bloginfo( 'home' ) ?>"><?php echo bloginfo( 'name' ) ?></a> &copy<?php echo date('Y');?></span>
          <span class="designer float-right">Created By : <a id="designer-name" href="mailto:hak_rab@yahoo.fr">HAKKI</a></span>
          
        </div>        
      </div>
    </section>

    </footer>
    <?php wp_footer(  ); ?>       
   
</body>
</html>
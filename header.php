<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
   
    <?php wp_head(); ?>
</head>
<body direction: rtl;  unicode-bidi: embed;
      data-aos-easing="ease-out-back" data-aos-duration="1000" data-aos-delay="0">  
    <header>
        <div class="container-fluid pt-3 p-0 m-0">          
           <div class="row">
               <div class="col-md-3 col-sm-12 col-xs-12">
                   <!-- logo area -->
                   <div class="logo" data-aos="fade-up">                   
                        <?php if(function_exists("the_custom_logo")): ?>
                            <a href="<?php get_bloginfo('home'); ?>">
                            <?php the_custom_logo(); ?>  
                            </a>
                        <?php else: ?>  
                            <a href="<?php get_bloginfo('home'); ?>"><?php get_bloginfo('name'); ?></a>                            
                        <?php endif; ?>  

                        <!-- <img src="<?php //echo get_template_directory_uri().'/asset/images/drap.gif'?>" alt="">-->
                   </div>                   
                   <!-- end logo area -->
                   <!-- logo area -->
                   <div class="logo2" data-aos="fade-up">
                   <?php
                      $str = get_bloginfo('name');  //"DCW.TLEMCEN"...ex                      
                                            
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
                   <!-- end logo area -->
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                   <!-- center header area -->
                   <div class="header-center" data-aos="fade-up">                   
                      <?php if(get_bloginfo('language')=='ar' ): ?>
                        <?php if(get_theme_mod( 'header_image_ar')): ?>
                            <img data-aos="zoom-in" src="<?php echo esc_url(get_theme_mod('header_image_ar')); ?>" alt="">
                        <?php  endif; ?>
                      <?php else: ?>
                        <?php if(get_theme_mod( 'header_image_fr')): ?>
                            <img data-aos="zoom-in"src="<?php echo esc_url(get_theme_mod('header_image_fr')); ?>" alt="">
                        <?php  endif; ?>
                      <?php endif; ?>

                        <!--<img src="asset/images/logo.png" alt="">-->
                        <div class="slogan">
                          <?php if(get_bloginfo('language')=='ar' ): ?>
                            <?php if(get_theme_mod('header_text_field_ar')): ?>
                                <h5 data-aos="zoom-in"><?php echo get_theme_mod('header_text_field_ar'); ?></h5>
                            <?php  endif; ?>
                          <?php else: ?>
                            <?php if(get_theme_mod('header_text_field')): ?>
                                <h5 data-aos="zoom-in"><?php echo get_theme_mod('header_text_field'); ?></h5>
                            <?php  endif; ?>
                          <?php endif; ?>

                            <!--<h5 data-aos="zoom-in">dcwtlemcen</h5>-->
                        </div>
                        <div class="description"> 
                          <?php if(get_bloginfo('language')=='ar' ): ?>
                            <?php if(get_theme_mod('header_text_description_field_ar')): ?>
                                <h5 data-aos="zoom-out" data-aos-delay="800"><?php echo get_theme_mod('header_text_description_field_ar'); ?></h5>
                            <?php  endif; ?>
                          <?php else: ?>
                            <?php if(get_theme_mod('header_text_description_field')): ?>
                                <h5 data-aos="zoom-out" data-aos-delay="800"><?php echo get_theme_mod('header_text_description_field'); ?></h5>
                            <?php  endif; ?>
                          <?php endif; ?>
                        
                            <!--<h5 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">direction du commerce de la Wilaya de Tlemcen</h5>-->
                        </div>                        
                        <span class="hero__scroll aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
                          Scroll down <br>
                          <i class="fa fa-chevron-down chevron bottom" aria-hidden="true"></i>
                        </span>
                   </div>            
                   <!-- end center header area -->        
               </div>
               <div class="col-md-3 col-sm-12 col-xs-12">
                   <!-- social media area -->
                   <div class="social-search" data-aos="fade-up">
                        <div class="social text-right">                            
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
                        <!-- end social media area -->
                        <div class="search text-right" data-aos="fade-up">
                          <a href=""><i  class="fas fa-search" id="<?php if(get_bloginfo('language')=='ar' ): ?>search-iconAr<?php else: ?>search-icon<?php endif; ?>"></i></a>                                                     
                        </div>
                   </div>                  
                    <div id="<?php if(get_bloginfo('language')=='ar' ): ?>searchboxAr<?php else: ?>searchbox<?php endif; ?>">
                    <!-- <input type="text" placeholder="Search Here">-->
                    <?php get_search_form(); ?>  
                  </div>
               </div>
           </div> 
        </div>
        <section class="nav">
            <div class="container bg-primary">
              <div class="row p-0 m-0">
               <div class="col-md-8 p-0 m-0">
                   <!-- navbar area -->
                  <nav class="navbar navbar-expand-sm navbar-dark">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a id="home" class="nav-link fas fa-home" href="<?php bloginfo('home'); ?>  "></a>
                            </li>                     
                        </ul>
                        <?php wp_nav_menu(array(
                                    'theme_location'    =>'primary-menu',
                                    'menu_class'        =>'nav navbar-nav navbar-right',
                                    'container'         =>false,
                                    'depth'             => 1,
                                    'walker'             => new wp_bootstrap_navwalker() //use walker class for coverting menu to bootstrap menu
                                ));?>
                  </nav>
                  <!-- end navbar area -->
               </div>           
               <div class="col-md-4">
                <div id="langues">
                     <?php               
                        if ( is_active_sidebar( 'widget_languages' ) ) : ?>
                         <?php dynamic_sidebar( 'widget_languages' ); ?>                        
                      <?php endif; ?> 

                  <!--
                  <ul>
                    <li class="lang-item lang-item-11 lang-item-ar lang-item-first"><a lang="ar" hreflang="ar" href="http://www.dcwtlemcen.dz/ar/category/%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d8%a9/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHYSURBVHjaYlSs9P3w4wsDGPz68+fHr19/f3xhZuO6W7eGjZkVKPj///9/YPDnzx8gCRBALG++fegIyP3PwPDv/7+///7++fsXJMHCLCopyc7ABFT+7z8CPHr0CCCAWFiYWP4z/H/56R1I6d8/v/79+f37l/LHX3+kbv6TlPzHygo0FaKai4sLSAIEEAsDWACo+vffP0Ak+/lb4J3XnL9+fvu9ncfdl0FUlIGZGW4DUC1AADH9+PMLZDBQ9Z/fv/7/cX3wluvXzwZNMWZP3y9b1zIyMUG8B9EAdC1AADEBfQky/s+vn39///z1S+Tr90t/fr3gYPneWv3zzMmXyWFMTEzMzMyMjIwQrwMEENP/Xz+ALvn55/fP3yA9L//9Vnvxge39B/bCKjZldan5ayCqmcEOA2oACCAmhh/fgO759Rus4eeP5eIc31kZOo/c+r10AX9A+P9fv4CKgE4C6gGSf//+BQggkAag638CnfT7149fPy9wMmRoC0yV5uFy9fkvK/uPgwPZx0A9AAHEwvDj068/v0V4BH79/Q2yB+h19p+PxNn+WVv9/w82Fmw8RDWQBAggRgZvQYZX7xl+MDB8Y4CSwHhnY9i357AQJy9EEdAlEAaQBAgwADDnTcmcsDekAAAAAElFTkSuQmCC" title="العربية" alt="العربية"><span style="margin-left:0.3em;"></span></a></li>
                    <li class="lang-item lang-item-14 lang-item-fr current-lang"><a lang="fr-FR" hreflang="fr-FR" href="http://www.dcwtlemcen.dz/fr/category/accueil/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGzSURBVHjaYiyeepkBBv79+Zfnx/f379+fP38CyT9//jAyMiq5GP77wvDnJ8MfoAIGBoAAYgGqC7STApL///3/9++/pCTv////Qdz/QO4/IMna0vf/z+9/v379//37bUUTQACBNDD8Z/j87fffvyAVX79+/Q8GQDbQeKA9fM+e/Pv18/+vnwzCIkBLAAKQOAY5AIAwCEv4/4PddNUm3ji0QJyxW3rgzE0iLfqDGr2oYuu0l54AYvnz5x9Q6d+/QPQfyAQqAin9B3EOyG1A1UDj//36zfjr1y8GBoAAFI9BDgAwCMIw+P8Ho3GDO6XQ0l4MN8b2kUwYaLszqgKM/KHcDXwBxAJUD3TJ779A8h9Q5D8SAHoARP36+Rfo41+/mcA2AAQQy49ff0Cu//MPpAeI/0FdA1QNYYNVA/3wmwEYVgwMAAHE8uPHH5BqoD1//gJJLADoJKDS378Z//wFhhJAALF8A3rizz8uTmYg788fJkj4QOKREQyYxSWBhjEC/fcXZANAALF8+/anbcHlHz9+ffvx58uPX9KckkCn/gby/wLd8uvHjx96k+cD1UGiGQgAAgwA7q17ZpsMdUQAAAAASUVORK5CYII=" title="Français" alt="Français"><span style="margin-left:0.3em;"></span></a></li>
                    <li class="lang-item lang-item-18 lang-item-en"><a lang="en-GB" hreflang="en-GB" href="http://www.dcwtlemcen.dz/en/category/home/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAflJREFUeNpinDRzn5qN3uFDt16+YWBg+Pv339+KGN0rbVP+//2rW5tf0Hfy/2+mr99+yKpyOl3Ydt8njEWIn8f9zj639NC7j78eP//8739GVUUhNUNuhl8//ysKeZrJ/v7z10Zb2PTQTIY1XZO2Xmfad+f7XgkXxuUrVB6cjPVXef78JyMjA8PFuwyX7gAZj97+T2e9o3d4BWNp84K1NzubTjAB3fH0+fv6N3qP/ir9bW6ozNQCijB8/8zw/TuQ7r4/ndvN5mZgkpPXiis3Pv34+ZPh5t23//79Rwehof/9/NDEgMrOXHvJcrllgpoRN8PFOwy/fzP8+gUlgZI/f/5xcPj/69e/37//AUX+/mXRkN555gsOG2xt/5hZQMwF4r9///75++f3nz8nr75gSms82jfvQnT6zqvXPjC8e/srJQHo9P9fvwNtAHmG4f8zZ6dDc3bIyM2LTNlsbtfM9OPHH3FhtqUz3eXX9H+cOy9ZMB2o6t/Pn0DHMPz/b+2wXGTvPlPGFxdcD+mZyjP8+8MUE6sa7a/xo6Pykn1s4zdzIZ6///8zMGpKM2pKAB0jqy4UE7/msKat6Jw5mafrsxNtWZ6/fjvNLW29qv25pQd///n+5+/fxDDVbcc//P/zx/36m5Ub9zL8+7t66yEROcHK7q5bldMBAgwADcRBCuVLfoEAAAAASUVORK5CYII=" title="English" alt="English"><span style="margin-left:0.3em;"></span></a></li>
                  </ul>
                  -->


                </div>
              </div>
            </div>            
        </section>
    </header>

    <!-- main area -->
    <main>
        <!-- marquee area -->
        <div class="container">
           <div class="row">
               <div class="col-md-12 p-0 m-0">
                   <div class="marquee">
                        <marquee behavior="" direction="rtl">
                            <?php if(get_theme_mod('actualite_text_field')): ?>                              
                                <?php echo get_theme_mod('actualite_text_field'); ?>
                            <?php else: ?>                            
                                Direction du commerce de la wilaya de Tlemcen
                            <?php endif; ?>
                        </marquee>
                   </div>                   
               </div>
           </div>
        </div>        
        <!-- end marquee area -->


        
        <!-- slider area -->
        <div class="container pt-2">
            <div class="row">
                <!-- slider left area -->
                <div class="col-md-8 col-sm-12 col-xs-12 p-0 m-0">
                    <!-- begin slider lef -->
                    <div class="slider-left">
                        <?php               
                        if ( is_active_sidebar( 'widget_slider' ) ) : ?>
                          <div id="header-widget-area" class="card" role="slider">
                          <?php dynamic_sidebar( 'widget_slider' ); ?>
                          </div>                            
                        <?php endif; ?>   



                        <!--
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="asset/images/slider/1.webp" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="asset/images/slider/2.webp" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Second slide label</h5>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="asset/images/slider/3.webp" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Third slide label</h5>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                          -->



                    </div>
                    <!-- end slider lef -->
                </div> <!-- end colonne  md8-->
                <!-- right onglet area -->
                <div class="col-md-4 col-sm-12 col-xs-12 p-0">
                   <!-- end content area -->        
                  <?php  
                    //  get template part //widget footer
                    get_template_part('templates/temp/table','content');
                  ?>
                </div>            
                <!-- end right onglet area -->
            </div>            
        </div> 

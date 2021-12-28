<section class="evenement mt-0 mb-1">
            <div class="container">
                <div class="row pb-2">
                      <div class="col-md-3">

                      <!-- widget area  numero vert-->        
                        <?php 
                          if ( is_active_sidebar( 'custom-footer-widget_num_vert' ) ) : ?>
                            <div id="header-widget-area" data-aos="fade-up" class="panneau" role="num_vert">
                                <?php dynamic_sidebar( 'custom-footer-widget_num_vert' ); ?>
                            </div>                            
                        <?php endif; ?>
                        <!-- end widget area -->        

                          <!--<div class="panneau">
                            <div class="panneau-image">
                              <img src="asset/images/posts/num_vert.gif" alt="">
                            </div>  
                            <div class="title">
                                <h5>Numero vert</h5>
                            </div>
                          </div>-->


                      </div>
                      <div class="col-md-3">
                          <!-- widget area  facturation -->        
                        <?php 
                            if ( is_active_sidebar( 'custom-footer-widget_facturation' ) ) : ?>
                            <div id="header-widget-area" data-aos="fade-up" class="panneau" role="facturation">
                                <?php dynamic_sidebar( 'custom-footer-widget_facturation' ); ?>
                            </div>                            
                        <?php endif; ?>

                          
                      </div>
                      <div class="col-md-3">
                          <!-- widget area  commerce exterieur -->        
                        <?php 
                            if ( is_active_sidebar( 'custom-footer-widget_commerce_ext' ) ) : ?>
                              <div id="header-widget-area" data-aos="fade-up" class="panneau" role="commerce_ext">
                                  <?php dynamic_sidebar( 'custom-footer-widget_commerce_ext' ); ?>
                              </div>                            
                          <?php endif; ?>
                      </div>
                      <div class="col-md-3">
                          <!-- widget area  indice des prix -->        
                            <?php 
                              if ( is_active_sidebar( 'custom-footer-widget_indice' ) ) : ?>
                                <div id="header-widget-area" data-aos="fade-up" class="panneau" role="indice des prix">
                                    <?php dynamic_sidebar( 'custom-footer-widget_indice' ); ?>
                                </div>                            
                            <?php endif; ?>
                      </div>
                </div>
            </div>        
        </section>
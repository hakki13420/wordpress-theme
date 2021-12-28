<div class="slide-2col">
                      <div class="slider-right">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#homme" role="tab" aria-controls="home" aria-selected="true"><?php pll_e('Sensibilisations','sensibilisations');?></a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php pll_e('Contact','contact');?></a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php pll_e('Annonces','annonces');?></a>
                              </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">
                            <!-- 1 st tab content area -->
                              <div class="tab-pane fade show active pt-2" id="homme" role="tabpanel" aria-labelledby="home-tab">
                                <div class = "sensibilisation-marquee">
                                  <h5><?php pll_e('Messages de sensibilisation','messages_sensibilisation');?></h5>
                                  <div id="sensibilisation-ticker">

                                    <?php if(get_theme_mod('sens_text1_field')): ?>
                                      <ul id="sensibilisation">
                                        <li>
                                          <div class="t-el">
                                            <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                            anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                            <?php if(get_theme_mod('sens_text1_field')): ?>
                                              <p><strong><?php echo get_theme_mod('sens_text1_field'); ?></strong></p>
                                            <?php  endif; ?>                                          
                                          </div>
                                        </li>
                                        <li>
                                          <div class="t-el">
                                              <?php if(get_theme_mod('sens_text2_field')): ?>
                                                <p><strong><?php echo get_theme_mod('sens_text2_field'); ?></strong></p>
                                              <?php  endif; ?>                                          
                                          </div>
                                            <!--<p><strong>Alimentation : </strong>Faites attention à la rupture de la chaîne
                                            de froid en achetant des denrées alimentaires réfrigérées ou congelées.</p>-->                                       
                                        </li>
                                        <li>
                                          <div class="t-el">
                                              <?php if(get_theme_mod('sens_text3_field')): ?>
                                                <p><strong><?php echo get_theme_mod('sens_text3_field'); ?></strong></p>
                                              <?php  endif; ?> 
                                            <!--<p><strong>Alimentation : </strong>Désinfectez les comptoirs, les planches à 
                                            découper et les ustensiles avec une solution diluée d’eau de javel et d’eau.</p>>-->
                                          </div>
                                        </li>
                                        <li>
                                          <div class="t-el">
                                              <?php if(get_theme_mod('sens_text4_field')): ?>
                                                <p><strong><?php echo get_theme_mod('sens_text4_field'); ?></strong></p>
                                              <?php  endif; ?> 
                                            <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                            alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                                          </div>
                                        </li>
                                        <li>
                                          <div class="t-el">
                                              <?php if(get_theme_mod('sens_text5_field')): ?>
                                                <p><strong><?php echo get_theme_mod('sens_text5_field'); ?></strong></p>
                                              <?php  endif; ?> 
                                            <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                            alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                                          </div>
                                        </li>
                                      </ul>

                                    <?php else: ?>
                                      <ul id="sensibilisation">
                                        <li>
                                          <div class="t-el">
                                            <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                            anonymes ou qui ne contiennent pas un étiquetage.</p>-->                                          
                                              <p><strong><?php echo "Aucun message de sensibilisation"; ?></strong></p>                                          
                                          </div>
                                        </li>
                                      </ul>                                  
                                    <?php endif; ?>            
                                  </div>      
                                </div> 
                              </div>
                              <!-- 2 sd tab content area -->
                              <div class="tab-pane fade px-2 pt-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class = "sensibilisation-marquee">
                                  <h5><?php pll_e('Pour nous contactez','contactez');?></h5>
                                  <div id="sensibilisation-ticker">
                                  <?php if(get_theme_mod('contact_text1_field')): ?>
                                    <ul id="sensibilisation">
                                      <li>
                                        <div class="t-el">
                                          <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                          <?php if(get_theme_mod('contact_text1_field')): ?>
                                            <p><strong><?php echo get_theme_mod('contact_text1_field'); ?></strong></p>
                                          <?php  endif; ?>                                          
                                        </div>
                                      </li>
                                      <li>
                                      <?php if(get_theme_mod('contact_text2_field')): ?>
                                        <div class="t-el">                                            
                                              <p><strong><?php echo get_theme_mod('contact_text2_field'); ?></strong></p>
                                            
                                        </div>
                                        <?php  endif; ?>                                          
                                          <!--<p><strong>Alimentation : </strong>Faites attention à la rupture de la chaîne
                                          de froid en achetant des denrées alimentaires réfrigérées ou congelées.</p>-->                                       
                                      </li>
                                      <li>
                                        <div class="t-el">
                                            <?php if(get_theme_mod('contact_text3_field')): ?>
                                              <p><strong><?php echo get_theme_mod('contact_text3_field'); ?></strong></p>
                                            <?php  endif; ?> 
                                          <!--<p><strong>Alimentation : </strong>Désinfectez les comptoirs, les planches à 
                                          découper et les ustensiles avec une solution diluée d’eau de javel et d’eau.</p>>-->
                                        </div>
                                      </li>
                                      <li>                                        
                                    </ul>
                                  <?php else: ?>
                                    <ul id="sensibilisation">
                                      <li>
                                        <div class="t-el">
                                          <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->                                      
                                            <p><strong><?php echo "En construction"; ?></strong></p>                                      
                                        </div>
                                      </li>
                                    </ul>
                                  <?php endif; ?>
                              </div>  
                            </div> 
                        </div>                          
                              <!-- 3 th tab content area -->
                              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class = "sensibilisation-marquee">
                                  <h5><?php pll_e('Annonces','annonces');?></h5>
                                  <div id="sensibilisation-ticker">
                                  <?php if(get_theme_mod('annonce_text1_field')): ?>
                                    <ul id="sensibilisation">
                                      <li>
                                        <div class="t-el">
                                          <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->
                                          <?php if(get_theme_mod('annonce_text1_field')): ?>
                                            <p><strong><?php echo get_theme_mod('annonce_text1_field'); ?></strong></p>
                                          <?php  endif; ?>                                          
                                        </div>
                                      </li>
                                      <li>
                                        <div class="t-el">
                                            <?php if(get_theme_mod('annonce_text2_field')): ?>
                                              <p><strong><?php echo get_theme_mod('annonce_text2_field'); ?></strong></p>
                                            <?php  endif; ?>                                          
                                        </div>
                                          <!--<p><strong>Alimentation : </strong>Faites attention à la rupture de la chaîne
                                          de froid en achetant des denrées alimentaires réfrigérées ou congelées.</p>-->                                       
                                      </li>
                                      <li>
                                        <div class="t-el">
                                            <?php if(get_theme_mod('annonce_text3_field')): ?>
                                              <p><strong><?php echo get_theme_mod('annonce_text3_field'); ?></strong></p>
                                            <?php  endif; ?> 
                                          <!--<p><strong>Alimentation : </strong>Désinfectez les comptoirs, les planches à 
                                          découper et les ustensiles avec une solution diluée d’eau de javel et d’eau.</p>>-->
                                        </div>
                                      </li>
                                      <li>
                                        <div class="t-el">
                                            <?php if(get_theme_mod('annonce_text4_field')): ?>
                                              <p><strong><?php echo get_theme_mod('annonce_text4_field'); ?></strong></p>
                                            <?php  endif; ?> 
                                          <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                          alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                                        </div>
                                      </li>
                                      <li>
                                        <div class="t-el">
                                            <?php if(get_theme_mod('annonce_text5_field')): ?>
                                              <p><strong><?php echo get_theme_mod('annonce_text5_field'); ?></strong></p>
                                            <?php  endif; ?> 
                                          <!--<p><strong>Alimentation : </strong>Evitez impérativement d’acquérir des denrées
                                          alimentaires périssables vendues sur la voie publique et exposées en plein air.</p>-->
                                        </div>
                                      </li>
                                    </ul>
                                  <?php else: ?>
                                    <ul id="sensibilisation">
                                      <li>
                                        <div class="t-el">
                                          <!--<p><strong>Alimentation : </strong>N’achetez pas les denrées alimentaires
                                          anonymes ou qui ne contiennent pas un étiquetage.</p>-->                                      
                                            <p><strong><?php echo "Aucun Annonce"; ?></strong></p>                                      
                                        </div>
                                      </li>
                                    </ul>
                                  <?php endif; ?>
            
                                  </div>      
                                </div> 
                              </div>

                          </div>                        
                      </div>
                    </div>
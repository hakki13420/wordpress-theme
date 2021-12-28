<!--  ====================== single post file    ========================== -->
<!--  ====================== created by HAKKI    ========================== -->
<!--  ======================  16 july 2020        ========================== -->

<?php get_header(); ?>
         <!--  content area -->        
         <div class="container p-0">
          <section class="content mt-2 pb-2">
            <div class="row p-0 m-0" style="width: 100%;">
             <div class="col-md-8 first-col p-0 m-0">
              <section class="first-category">
                <div class="container p-0">
                    <div class="row p-0 m-0">
                      <div class="col-md-12 p-0 m-0">
                        <div class="title-content col-md-12 py-1">
                          <h5 class="pt-2 pb-2 pl-3"><?php the_title();?></h5>
                          <i class="fas fa-angle-down plus pr-1"></i>
                      </div>
                      </div>                      
                    </div>
                    <!-- content-cat area   ----     --> 
                    <div class="content-cat">
                        <div class="row p-0 m-0">
                          <!-- column of article -->
                          <div class="col-md-12 mt-1 p-0 m-0">
                            <!-- grand poster    boucle -->                                                         
                            <?php if(have_posts()): ?>
                              <?php while(have_posts()):the_post(); ?>                                                              
                                  <div class="article">
                                    <?php if(has_post_thumbnail()): ?>
                                      <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="post-image" class="img-responsive img-thumbnail">
                                    <?php endif; ?>                                      
                                     <!--<img src="asset/images/posts/p1.jpeg" class="card-img" alt="...">-->                                    
                                    <div >
                                      <h5 class="card-title"><?php the_title(); ?></h5>                                   
                                    </div>  
                                    <div class="article-meta flex">
                                      <ul>
                                        <li><i class="fas fa-user"></i><span><?php the_author_posts_link(); ?></span></li>
                                        <li><i class="fas fa-calendar"></i><span><?php the_date('F j, Y'); ?></span></li>
                                        <li><span><i class="fas fa-eye"></i><?php if(function_exists('the_views')) { the_views(); } ?></span></li>                                        
                                      </ul>
                                      <div class="modify">
                                        <?php edit_post_link( 'Edit <i class="fas fa-pen fa-fw"></i>')?>                                                                              
                                      </div>
                                    </div>                                                
                                    <div >
                                      <?php the_content(); ?> 
                                    </div>                 

                                    <hr>
                            <div class="post-categories">
                                <p> <i class="fas fa-tags fa-fw"></i><?php the_category( ", ");?></p>
                               <?php 
                                //  get template part //display posts
                                //get_template_part('templates/temp/post','categories'); 
                                
                               ?>
                            </div>                            

                                  </div>                                        
                                <!--  end article     -->  
                              <?php endwhile; ?>
                            <?php endif; ?>
                            
                          </div>
                          <!-- end column of article-->
                          
                        </div>
                    
                    </div>
                </div>               
              </section>              
             </div>
             <!--  aside area -->        
             <?php get_sidebar();?>
           </section>
           <!-- pagination  -->                          
           <div class="row mt-2">
                <div class="col-md-12">
                  <div data-aos="fade-up" class="post-pagination pagination flex">
                    <?php if(get_bloginfo('language')=='ar' ): ?>
                      
                      <?php if(get_next_post_link( )):?>
                        <?php next_post_link('%link'," <i class='fas fa-chevron-right fa-fw'></i> %title");?>
                      <?php else:?>
                        <?php echo "<span class='next-span'>no next</span>";?>
                      <?php endif;?>
                      <?php if(get_previous_post_link( )):?>
                        <?php previous_post_link('%link',"%title <i class='fas fa-chevron-left fa-fw'></i>");?>
                      <?php else:?>
                        <?php echo "<span class='previous-span'>no prev</span>";?>
                      <?php endif;?>

                    <?php else: ?>
                      <?php if(get_previous_post_link( )):?>
                        <?php previous_post_link('%link'," <i class='fas fa-chevron-left fa-fw'></i> %title");?>
                      <?php else:?>
                        <?php echo "<span class='previous-span'>no prev</span>";?>
                      <?php endif;?>
                      <?php if(get_next_post_link( )):?>
                        <?php next_post_link('%link',"%title <i class='fas fa-chevron-right fa-fw'></i>");?>
                      <?php else:?>
                        <?php echo "<span class='next-span'>no next</span>";?>
                      <?php endif;?>
                    <?php endif; ?>                                                          
                                                 
                                 
                    
                                       <!--<a href="" class="fas fa-angle-left"></a>  
                                <a href="">1</a>  
                                <a href="">2</a>  
                                <a href="" class="fas fa-angle-right"></a>  -->
                  </div>
                </div>                       
            </div>  
                          <!-- end pagination  -->                       
         </div>
        <!-- end content area -->        
         <?php  
          //  get template part //widget footer
          get_template_part('templates/temp/widget-footer','content');
         ?>
<?php get_footer(); ?>
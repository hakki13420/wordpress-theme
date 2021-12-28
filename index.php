        <?php get_header(); ?>
        <!-- evenement area -->        
        <section class="evenement mt-2">
            <div class="container">
              <!-- caroussel -->
              <div class="owl-carousel owl-theme responsiveClass">
                  <?php                            
                    $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'evenement',                            
                    'order'=>'DESC',
                    'orderby'=>'ID',
                    );
                  $category_query = new WP_Query( $args );                  
                  ?>    
                  <?php if($category_query->have_posts()): ?>
                    <?php while($category_query->have_posts()):$category_query->the_post(); ?>
                      <div class="card">
                        <?php if(has_post_thumbnail()): ?>
                          <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="card-img">
                        <?php endif; ?>                                      
                        <!--<img src="asset/images/events/i1.webp" class="card-img-top" alt="...">-->
                        <div class="card-body">
                          <h5 class="card-title"><?php the_title(); ?></h5>
                          <p class="card-text"><?php the_excerpt(); ?></p>
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    
                    <?php endwhile; ?>
                  <?php endif; ?>
                  <?php
                    wp_reset_query();
                    wp_reset_postdata();
                  ?>
                <!--
                <div class="card">
                  <img src="asset/images/events/i2.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

                <div class="card">
                  <img src="asset/images/events/i3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

                <div class="card">
                  <img src="asset/images/events/i4.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

                <div class="card">
                  <img src="asset/images/events/i5.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

                <div class="card">
                  <img src="asset/images/events/i6.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                             
                <div class="card">
                  <img src="asset/images/events/i7.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>-->
                                
                
              </div>
              <!-- end caroussel -->
            </div>
        </section>
        <!-- end evenement area -->


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
                          <h5 class="pt-2 pb-2 pl-3"><?php pll_e('Acueil','wp-dcwcommerce');?></h5>
                          <i class="fas fa-angle-down plus pr-1"></i>
                      </div>
                      </div>                      
                    </div>
                    <!-- content-cat area   ----     --> 
                    <div class="content-cat">
                        <div class="row p-0 m-0">
                          <!-- 1 st column of 1st category content -->
                          <div class="col-md-8 mt-1 p-0 m-0">
                            <!-- grand poster    boucle --> 
                            <?php 
                            $post_displayed=array();
                            $post_displayed2=array();
                            $i=1;
                            $first_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page'=> 1,
                            'category_name' => 'Accueil',                            
                            'numberposts'=> 1,
                            'order'=>'DESC',
                            'orderby'=>'ID',                            
                            );
                            $first_query = new WP_Query( $first_args );
                            ?>           
                                                        
                            <?php if($first_query->have_posts()): ?>
                              <?php while($first_query->have_posts()):$first_query->the_post(); ?>                                
                                <?php if($i==1): ?>
                                  <div class="card mb-3">
                                    <div class="row no-gutters">
                                      <div class="col-md-12 large-poster">
                                        <?php if(has_post_thumbnail()): ?>
                                          <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="card-img">
                                        <?php endif; ?>                                      
                                        <!--<img src="asset/images/posts/p1.jpeg" class="card-img" alt="...">-->                                    
                                      </div>                                
                                      <div class="card-body-large-poster">
                                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h5>                                   
                                      </div>                                
                                    </div>
                                  </div>                                        
                                <!--  end grand poster     -->  
                                  <?php $post_displayed[]=get_the_ID(); ?>                                                               
                                  <?php $post_displayed2[]=get_the_ID(); ?>                                                               
                                  <?php $i++; ?>
                                <?php endif; ?>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            <?php 
                              wp_reset_query();
                              wp_reset_postdata();                              
                            ?>  

                          </div>
                          <!-- end 1 st column of 1st category content -->
                          <!-- 2 sd column of 1st category content -->
                          <div class="col-md-4 mt-1 col-p-poster">
                           <!-- petit poster  - boucle     --> 
                           <?php 
                           $i=1;
                            $second_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',                            
                            'posts_per_page'=>4,
                            'numberposts'=>4,
                            'category_name' => 'Accueil',                            
                            'order'=>'DESC',
                            'orderby'=>'ID',
                            'post__not_in'=>$post_displayed,
                            );
                            $category_query = new WP_Query( $second_args );
                            ?>    

                            <?php if($category_query->have_posts()): ?>
                              <?php while($category_query->have_posts()):$category_query->the_post(); ?>                                
                                <?php if($i<=4): ?>
                                    <div class="card mb-1">
                                      <div class="row no-gutters row-content">
                                        <div class="col-md-12 poster">
                                            <?php if(has_post_thumbnail()): ?>
                                              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="card-img">
                                            <?php endif; ?>        
                                            <!-- petit poster  - boucle     -->            
                                          <!--<img src="asset/images/posts/p2.jpeg" class="card-img" alt="...">-->
                                        </div>
                                        <div class="card-body-poster">
                                            <!--<h5 class="card-title">Card title</h5> -->                                    
                                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h5>                                   
                                        </div>                               
                                      </div>
                                    </div>
                                    <?php $post_displayed2[]=get_the_ID(); ?>
                                    <?php $i++; ?>
                                <?php endif; ?>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            <?php 
                              wp_reset_query();
                              wp_reset_postdata();                              
                            ?>  
                            <!-- end petit poster  - boucle     --> 
                          </div>
                            <!-- end 2 sd column of 1st category content -->
                        </div>
                    <!-- content area 2 rows-->
                        <div class="container p-0 content2">
                          <div class="row">
                          <?php 
                            $i=1;
                            $paged=get_query_var("paged")?get_query_var("paged"):1;
                            $third_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',                                             
                            'order'=>'DESC',
                            'orderby'=>'ID',
                            'posts_per_page' => 6,
                            'category_name' => 'Accueil',                            
                            'post__not_in'=>$post_displayed2,
                            'paged'             =>$paged
                            );
                            $the_third_query = new WP_Query( $third_args );
                            ?>    

                            <?php if($the_third_query->have_posts()): ?>
                              <?php while($the_third_query->have_posts()):$the_third_query->the_post(); ?>                                                            
                                <?php if($i%4==0): ?>
                                  </div>
                                  <div class="row mt-2">
                                <?php endif ?>
                                  <div class="col-md-4">
                                    <div class="card-content card-content_content2">
                                      <div class="post-image">
                                        <?php if(has_post_thumbnail()): ?>
                                          <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="card-img">
                                        <?php endif; ?>                                              
                                        <!--<img src="asset/images/posts/p1.jpeg" class="card-img-top" alt="...">-->
                                      </div>
                                      <div class="card-body">
                                        <!--<h5 class="card-title">Card title</h5>-->
                                        <a href="<?php the_permalink(); ?>"><h6 class="card-title"><?php echo substr(get_the_title(),0,35)."..."; ?></h6></a>                                   
                                        <p class="card-text-content"><?php the_excerpt(); ?></p>                                       
                                      </div>
                                       <div class="bouton_content"> 
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary read_btn">Read More</a>
                                        </div>
                                    </div>
                                  </div>                                                            
                                <?php $i++; ?>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            <?php                             
                              wp_reset_query();
                              wp_reset_postdata();
                            ?>  
                        </div>                                  
                       
                        

                    <!-- end content area 2 rows -->
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
                  <div data-aos="fade-up" class="pagination flex">
                    <?php if(get_bloginfo('language')=='ar' ): ?>
                      <?php echo paginate_links( array(
                        'mid_size'  => 1,
                        'next_text' =>__('<span class="fas fa-arrow-left"></span>'),
                        'prev_text' =>__('<span class="fas fa-arrow-right"></span>'),
                        'total'   => $the_third_query->max_num_pages
                      )); ?>
                    <?php else: ?>
                      <?php echo paginate_links( array(
                        'mid_size'  => 1,
                        'prev_text' =>__('<span class="fas fa-arrow-left"></span>'),
                        'next_text' =>__('<span class="fas fa-arrow-right"></span>'),
                        'total'   => $the_third_query->max_num_pages
                      )); ?>
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
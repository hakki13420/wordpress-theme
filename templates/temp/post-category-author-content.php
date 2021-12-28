<?php if(have_posts()): ?>
                              <?php while(have_posts()):the_post(); ?>                                                              
                              <!-- column of article -->
                                <div class="col-md-6 mt-1 p-0 m-0">
                                  <div class="article">
                                    <?php if(has_post_thumbnail()): ?>
                                      <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="post-image" class="img-responsive img-thumbnail"></a>
                                    <?php endif; ?>                                      
                                     <!--<img src="asset/images/posts/p1.jpeg" class="card-img" alt="...">-->                                    
                                    <div >
                                    <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>                                   
                                    </div>  
                                    <div class="article-meta flex">
                                      <ul>
                                        <li><i class="fas fa-user"></i><span><?php the_author_posts_link(); ?></span></li>
                                        <li><i class="fas fa-calendar"></i><span><?php the_date('F j, Y'); ?></span></li>
                                        <li><span><i class="fas fa-eye"></i><?php the_author(); ?></span></li>                                        
                                      </ul>                         
                                    </div>                                                
                                    <div >
                                      <?php the_excerpt(); ?> 
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
                                </div>
                                <!-- end column of article-->
                              <?php endwhile; ?>
                            <?php endif; ?>
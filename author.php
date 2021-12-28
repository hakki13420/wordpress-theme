<!--  ====================== post of category    ========================== -->
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
                        <?php
                            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                        ?>
                        <div class="title-content col-md-12 py-1">
                          <h5 class="pt-2 pb-2 pl-3"><?php echo $curauth->nickname;?><span class="author-name"><?php echo $curauth->first_name;?> <?php echo $curauth->last_name; ?></span></h5>                           
                          <i class="fas fa-angle-down plus pr-1"></i>
                      </div>
                      </div>                      
                    </div>
                    <!-- content-cat area   ----     --> 
                    <div class="content-cat category">
                        <div class="row row-cat p-0 m-0">
                            <?php  
                                //  get template part //post categry author
                                get_template_part('templates/temp/post-category-author','content');
                            ?>                          
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
                                <?php echo paginate_links( array(
                                  'mid_size'  => 1,
                                  'next_text' =>'<i class="fas fa-arrow-left"></i>',
                                  'prev_text' =>'<i class="fas fa-arrow-right"></i>',
                                 
                                )); ?>
                        <?php else: ?>
                                  <?php echo paginate_links( array(
                                  'mid_size'  => 1,
                                  'prev_text' =>'<i class="fas fa-arrow-left"></i>',
                                  'next_text' =>'<i class="fas fa-arrow-right"></i>',
                                 
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
<?php      

    $paged=get_query_var("paged")?get_query_var("paged"):1;
    $args=array(
        'post_type'         =>'post',
        'order'             =>'DESC',
        'posts_per_page'    =>6,
        'date_query'        =>array(
            'after'         =>'-300 days',
            'column'        =>'post_date'
        ),
        'paged'             =>$paged

    );
    $loop=new WP_Query($args);
?>

<?php $count=1; ?>  
<?php if($loop->have_posts()): ?>  
    <?php while($loop->have_posts()): $loop->the_post() ?>  
    <?php if($count%2): ?> 
        <div class="column">            
            <div class="post-image">
                <?php if (has_post_thumbnail()): ?>  
                    <a href="<?php the_permalink(); ?>  ">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="fluid">
                    </a>                              
                <?php endif; ?>  
            </div>
    <?php else: ?>  
            <div class="post-image">
                <?php if (has_post_thumbnail()): ?>  
                    <a href="<?php the_permalink(); ?>  ">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="fluid">
                    </a>                              
                <?php endif; ?>  
            </div>           
        </div>
    <?php endif; ?>  
        <?php $count++; ?>  
    <?php endwhile; ?>  
<?php endif; ?>  

<?php 
    wp_reset_query();
    wp_reset_postdata();
?>  

                 <!--    <div class="column">
                          <div class="post-image">
                              <img src="./asset/images/posts/p1.jpeg" alt="" class="fluid">                              
                          </div>
                          <div class="post-image">
                              <img src="./asset/images/posts/p2.jpeg" alt="" class="fluid">                              
                          </div>                          
                          <div class="post-image">
                              <img src="./asset/images/posts/p2.jpeg" alt="" class="fluid">                              
                          </div>                  
                      </div>
                      <div class="column">
                          <div class="post-image">
                            <img src="./asset/images/posts/p3.jpeg" alt="" class="fluid">                              
                          </div>
                          <div class="post-image">
                            <img src="./asset/images/posts/p4.jpeg" alt="" class="fluid">                              
                          </div>
                          <div class="post-image">
                            <img src="./asset/images/posts/ministere1.jpg" alt="" class="fluid">                              
                          </div>
                       </div>
                       <div class="column">
                          <div class="post-image">
                              <img src="./asset/images/posts/p3.jpeg" alt="" class="fluid">                              
                          </div>
                          <div class="post-image">
                              <img src="./asset/images/posts/p4.jpeg" alt="" class="fluid">                              
                          </div>
                          <div class="post-image">
                              <img src="./asset/images/posts/ministere1.jpg" alt="" class="fluid">                              
                          </div>
                        </div> -->
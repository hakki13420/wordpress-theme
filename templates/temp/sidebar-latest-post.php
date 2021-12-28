<?php
 $paged = get_query_var("paged")?get_query_var("paged"):1;

 $args=array(
    'post_type'=> 'post',
    'posts_per_page'=> 3,
    'paged'=> $paged
 );
 $loop=new WP_Query($args);
 ?>
 <?php if ($loop->have_posts()):?>
    <?php while($loop->have_posts()):$loop->the_post();?>
        <article class="new-post">
            <div class="row">
                <div class="col4-lg post-image">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="fluid">
                     <?php endif; ?>
                </div>
                    <div class="col8-lg post-title">
                        <div class="cat">
                            <?php 
                                //  get template part //display posts
                               // get_template_part('templates/temp/post','categories');                     

                            //<?php
                                $categories=get_the_category();
                                if(empty($categories)){
                                    echo "no categories";
                                }else{
                                foreach($categories as $category){
                                    printf('<a href="%1$s" class="upercase text-sm text-gray">%2$s</a>',
                                    esc_url(get_category_link($category->term_id)),
                                    esc_html($category->name));
                                }
                                }
                            

                            ?>                                    
                        </div>
                        <a href=" <?php the_permalink() ?>"><span class="text-lg text-dark"><?php the_title()?></span></a>
                    </div>
                
            </div>
        </article>
    <?php endwhile; ?>
<?php else: ?>
<?php echo wpautop("sorry they havent posts");?>
<?php endif;?>
<?php  wp_reset_query();
       wp_reset_postdata();
?>
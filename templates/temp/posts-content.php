<?php if (have_posts(  )):?>
    <?php while(have_posts(  )):the_post(  );?>
        <div class="article">
            <article class="blog-post">
                <div class="post-thumbnail">
                    <?php //the_post_thumbnail('thumbnail',
                     //['class' => 'fluid', 'title' => 'Feature image']); ?>
                     <?php if(has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="fluid">
                     <?php endif; ?>
                </div>
                <div class="post-info">
                    <div class="post-author">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('id')); ?>"><span class="text-sm text-gray">By <?php the_author()?> in <?php the_date()?></span></a>
                    </div>
                    <div class="post-title">
                        <a href=" <?php the_permalink() ?>"><span class="text-lg text-dark"><?php the_title()?></span></a>
                    </div>
                    <div class="post-content">
                        <p class="para">
                            <?php the_excerpt(5)?></p>
                        </div>
                        <hr>
                        <div class="post-categories">
                            <?php 
                                //  get template part //display posts
                                get_template_part('templates/temp/post','categories');                     
                            ?>
                        </div>
                    </div>
                </div>
            </article>                           

    <?php endwhile;?>
<?php else: ?>
        <?php echo wpautop("they havent any posts in this site");?>
<?php endif;?>




   
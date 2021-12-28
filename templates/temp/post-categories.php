<?php
    $categories=get_categories(array(
        'orderby'=>'name',
        'parent'=>0
    ));
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


<!--<a href="#" class="upercase text-sm text-gray"><?php // the_category( "-")?></a>-->                                            
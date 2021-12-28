<?php 
    //retreive categories list for display
    $categories=get_categories( array(
        'orderby'=>'name',
        'parent'=> 0
    ));
    foreach($categories as $category) {
        echo "<a href='".get_category_link($category->term_id)."'"." class='link'><span>".$category->name."</span></a>";
        //printf("<a href="%1$s" class="link"><span>%2$s</span></a>",esc_url(get_category_link($category->term_id)),esc_html($category->name));
    }
?>
<!--<a href="#" class="link">
                        <span>All</span>
                    </a>
                    <a href="#" class="link">
                        <span>Diretion</span>
                    </a>
                    <a href="#" class="link">
                        <span>Consumer</span>
                    </a>
                    <a href="#" class="link">
                        <span>Operator</span>
                    </a>
                    <a href="#" class="link">
                        <span>Solde</span>
                    </a>
                    <a href="#" class="link">
                        <span>Solde</span>
                    </a>
                    <a href="#" class="link">
                        <span>Solde</span>
                    </a>
                    <a href="#" class="link">
                        <span>Solde</span>
                    </a>-->
<?php  
                                //  get tags
                                  $tags=get_tags();
                                  if(!empty($tags)){
                                      foreach ($tags as $tag) {
                                        printf('<a href="%1$s"><span>%2$s</span></a>', esc_url(get_tag_link($tag->term_id)),
                                        esc_html($tag->name));
                                      }
                                  }
?>
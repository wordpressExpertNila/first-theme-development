<?php get_header();?>
        <div class="content_wrapper">
            <div class="left_content">
                <?php 
                if (have_posts()):
                    while (have_posts()): the_post(); ?>
                        <article>
                            <h2>
                            <a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h2>

                            <div class="feature_img">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a> 
                            </div>
                           <div class="post_meta">
                           posted by <?php the_author_link();?> | time : <?php the_time();?> | date : <?php the_date();?> <?php the_category(',');?>
                           posted by <?php the_author(); ?>
                        
                           </div>
                            <p><?php the_content();?></p>
                        
                        </article>

                    <?php  
                    endwhile;
                else:
                    echo 'no content found';
                endif;
                
                ?>
            </div>
            <?php get_sidebar();?>
            
            <br class="clear" />
        </div>
        <?php get_footer();?>
        
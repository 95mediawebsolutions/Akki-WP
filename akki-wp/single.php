<?php

// Single blog post template file

// Akki WP

get_header();
?>




<main id="side-main" class="container">

    <div class="row">
        <!-- <div class="col-md-9 offset-md-3 px-0">hello</div> -->
        <?php
        while (have_posts()) :
            the_post(); ?>
        <!-- Post Content Column -->
        <div class="col-lg-9 offset-md-3 px-0">
            <?php if (is_singular('post')) :?>
            <div class="card border-0 mt-4">

                <?php the_post_thumbnail('akka-blog-post', array('class' => 'img-fluid rounded'))?>


                <p class="single-post-cat"><?php esc_html_e('Published by', 'akka-wp'); ?>
                    <?php the_author_posts_link(); ?> <?php esc_html_e('on', 'akka-wp'); ?>
                    <?php echo esc_html(get_the_date()); ?>
                    <br />
                    <?php if (has_category()): ?>
                    <?php esc_html_e('Categories', 'akka-wp'); ?>:
                    <span><?php the_category(' '); ?></span>
                    <?php endif; ?>
                    <br />
                    <?php if (has_tag()): ?>
                    <?php esc_html_e('Tags', 'akka-wp'); ?>:
                    <span><?php the_tags('', ', '); ?></span>
                    <?php endif; ?>
                    <div class="card-body">
                        <!-- <p class="font-ram">in <b
                                            class="text-uppercase text-dark font-size16"><?php the_category();?></b>
                </p>
                <p class="font-ram">in <b class="text-uppercase text-dark font-size16"><?php the_category();?></b></p> -->
                <h2 class="card-title  font-size40"><?php the_title();?>
                </h2>
                <p class="cart-text text-black-50">
                    <?php the_content();?>

                </p>
                <hr />
                <?php

// If comments are open or we have at least one comment, load up the comment template.
       if (comments_open() || get_comments_number()):
           comments_template();
       endif;
?>

            </div>

        </div>
        <?php endif;?>



    </div>




    <?php endwhile; // End of the loop.?>
    </div>

    <!-- /.row -->


</main <?php get_footer();

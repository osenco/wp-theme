<?php

/**
 * @package WordPress Theme
 * @subpackage  template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0..0.1
 *
 */
global $post; ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                            <h1><?php the_title(); ?></h1>
                            <span class="subheading text-muted">
                                <a class="text-muted" href="<?php echo esc_url(home_url()); ?>">Home</a>

                                <?php if (is_page() && $post->post_parent) : ?>
                                    <a class="text-muted" href="<?php echo esc_url(get_the_permalink($post->post_parent)); ?>">
                                        &rarr; <?php echo get_the_title($post->post_parent); ?>
                                    </a>
                                <?php endif; ?>

                                &rarr; <?php the_title(); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="post-<?php the_ID(); ?>" <?php post_class("container"); ?>>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
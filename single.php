<?php

/**
 * @package WordPress Theme
 * @subpackage  template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0..0.1
 *
 */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Page Header -->
        <header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1><?php the_title(); ?></h1>
                            <h2 class="subheading">Posted in <?php the_category(' ', ''); ?></h2>
                            <span class="meta">
                                By <?php the_author_posts_link(); ?> on <?php echo get_the_date('l, F d, Y', get_the_ID()); ?>
                            </span>
                            <p>
                <?php the_tags('', ' ', ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php comments_template(); ?>
            </div>
        </article>
        <!-- Pager -->
        <div class="clearfix mt-4">
            <?php previous_next(); ?>
        </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
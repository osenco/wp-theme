<?php

/**
 * @package WordPress Theme
 * @subpackage  template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0..0.1
 *
 */ ?>
<?php get_header(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php bloginfo('name'); ?></h1>
                    <span class="subheading"><?php bloginfo('description'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post-preview">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?php //the_post_thumbnail('thumbnail', ["class" => "card-img"]); 
                                ?>
                        <?php the_excerpt(); ?>

                    </h3>
                </a>
                <p class="post-meta">
                    Posted by <?php the_author_posts_link(); ?> in <?php the_category(' '); ?> on
                    <?php echo get_the_date('D, F d, Y', get_the_ID()); ?>
                </p>
            </div>
            <hr>
            <?php endwhile;
            endif; ?>
            <!-- Pager -->
            <div class="clearfix">
                <?php pagination_nav(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
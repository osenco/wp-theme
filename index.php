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
        <div style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
            <?php the_title(); ?>
            <?php the_category(' ', ''); ?><?php echo get_the_date('D, F d, Y', get_the_ID()); ?>
            <?php the_excerpt(); ?>
        </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
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
<header class="masthead" style="background-image: url('<?php echo esc_url(get_header_image()); ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Error 404</h1>
                    <span class="subheading">Page not found</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-10 mx-auto">
            <a class="btn btn-primary btn-block text-white" href="<?php echo esc_url(home_url()); ?>">&larr; Go back home</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php

/**
 * @package Thrill Seeker WordPress Theme
 * @subpackage Header template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0.1
 * 
 */

if (post_password_required()) {
    return;
}
$with_icons = TRUE;


$comments_number = get_comments_number();
?>
<div class="row">
    <div id="comments" class="comments-area col-lg-8 col-md-10 mx-auto">
        <?php if (have_comments()) { ?>

            <h4 class="subtitle">
                <?php printf(
                    _nx(
                        '1 Comment',
                        '%1$s Comments',
                        get_comments_number(),
                        'comments title',
                        'osen'
                    ),
                    number_format_i18n(
                        get_comments_number()
                    )
                ); ?>
            </h4>

            <div class="comments-inner">
                <ul class="comment-list">
                    <?php wp_list_comments(); ?>
                </ul>
            </div>

            <div class="comments-pagination">
                <?php previous_comments_link() ?>
                <?php next_comments_link() ?>
            </div>
        <?php } ?>
        <?php if (comments_open()) : ?>
            <?php if (get_option('comment_registration') and !is_user_logged_in()) { ?>
                <div class="comments-form-text">
                    <?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(get_permalink())); ?>
                </div>
            <?php } else {
                comment_form();
            } ?>
            <br>
        <?php endif; ?>
    </div>
</div>
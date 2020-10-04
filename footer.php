<?php

/**
 * @package Wpt WordPress Theme
 * @subpackage Footer template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0.0.1
 * 
 */
?>

<hr>
<!-- Footer -->
<footer class="footer">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <ul class="list-inline text-center">
        <li class="list-inline-item">
          <a href="<?php os_theme_mod('os_twitter'); ?>">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="<?php os_theme_mod('os_facebook'); ?>">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook-f fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="<?php os_theme_mod('os_instagram'); ?>">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
      </ul>
      <p class="copyright text-muted">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.</p>
    </div>
  </div>
</div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div> -->
<script>
jQuery(document).ready(function($) {
    $("input[type!='checkbox']").addClass('form-control')
    $("textarea").addClass('form-control')
    $("input[type='submit']").removeClass('form-control').addClass('btn btn-primary mt-3')
    $("input[type='hidden']").removeClass('form-control')

    $("#commentform p input[type!='checkbox']").unwrap().wrap('<div class="control-group"><div clas="form-group  floating-label-form-group controls"></div></div>');
    $("#commentform p textarea").unwrap().wrap('<div class="control-group"><div clas="form-group  floating-label-form-group controls"></div></div>');
    $(".wpcf7-form p label").unwrap().wrap('<div class="control-group"><div clas="form-group  floating-label-form-group controls"></div></div>').css('width', '100%');
    $(".wpcf7-form-control").unwrap()
});
</script>
</body>

</html>
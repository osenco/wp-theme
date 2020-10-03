<?php

/**
 * @package  WordPress Theme
 * @subpackage  template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0.0.1
 * 
 */

namespace Osen\Theme\Wpt;

/**
 * Addd web manifest and link for Progressive Web App functionality
 */
function os_pwa_set()
{ 
    $url = esc_url(home_url('sw.js')); ?>
<meta name="theme-color" value="<?php os_theme_mod('os_manifest_color', 'white'); ?>">
<meta name="mobile-web-app-capable" content="yes">

<!-- iOS -->
<meta name="apple-mobile-web-app-title" content="<?php os_theme_mod('os_manifest_name', get_bloginfo('name'))?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">

<!-- Windows  -->
<meta name="msapplication-navbutton-color" content="<?php os_theme_mod('os_manifest_color', 'white'); ?>">
<meta name="msapplication-TileColor" content="<?php os_theme_mod('os_manifest_background_color', 'white'); ?>">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="msapplication-config" content="browserconfig.xml">

<!-- Pinned Sites  -->
<meta name="application-name" content="<?php os_theme_mod('os_manifest_name', get_bloginfo('name'))?>">
<meta name="msapplication-tooltip"
    content="<?php os_theme_mod('os_manifest_description', get_bloginfo('description'))?>">
<meta name="msapplication-starturl" content="/">

<!-- Tap highlighting  -->
<meta name="msapplication-tap-highlight" content="no">

<!-- Layout mode -->
<meta name="layoutmode" content="fitscreen/standard">

<!-- Orientation  -->
<meta name="screen-orientation" content="portrait">

<!-- Main Link Tags  -->
<!-- <link href="favicon-16.png" rel="icon" type="image/png" sizes="16x16">
<link href="favicon-32.png" rel="icon" type="image/png" sizes="32x32">
<link href="favicon-48.png" rel="icon" type="image/png" sizes="48x48"> -->

<!-- iOS  -->
<!-- <link href="touch-icon-iphone.png" rel="apple-touch-icon">
<link href="touch-icon-ipad.png" rel="apple-touch-icon" sizes="76x76">
<link href="touch-icon-iphone-retina.png" rel="apple-touch-icon" sizes="120x120"> -->
<!-- <link href="touch-icon-ipad-retina.png" rel="apple-touch-icon" sizes="152x152"> -->

<!-- Startup Image  -->
<!-- <link href="touch-icon-start-up-320x480.png" rel="apple-touch-startup-image"> -->

<!-- Pinned Tab  -->
<!-- <link href="path/to/icon.svg" rel="mask-icon" size="any" color="red"> -->

<!-- Android  -->
<!-- <link href="icon-192x192.png" rel="icon" sizes="192x192"> -->
<!-- <link href="icon-128x128.png" rel="icon" sizes="128x128"> -->

<!-- <link href="images/icon-72x72.png" rel="apple-touch-icon" sizes="72x72"> -->

<link rel="manifest" id="manifest" href="<?php echo esc_url(home_url('?os_manifest_json')); ?>">
<!-- <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
var OneSignal = window.OneSignal || [];
OneSignal.push(function() {
    OneSignal.init({
        appId: "13edafa3-7d86-4fdb-817f-91c833125b0f",
        requiresUserPrivacyConsent: true,
        autoResubscribe: true,
        notifyButton: {
            enable: true,
        },
        welcomeNotification: {
            "title": "Tepid Coffee",
            "message": "Thanks for subscribing!",
        }
    });
});
</script> -->
<script type="text/javascript">
// if ('serviceWorker' in navigator) {
//     window.addEventListener('load', function() {
//         navigator
//             .serviceWorker
//             .register('<?php echo $url; ?>')
//             .then(function(registration) {
//                 registration.update();
//             }).catch(function(error) {
//             });
//     });
// } else {
// }

jQuery(document).ready(function($) {
    if (("standalone" in window.navigator) && window.navigator.standalone) {
        $('a').on('click', function(e) {
            e.preventDefault();
            var new_location = $(this).attr('href');
            if (new_location != undefined && new_location.substr(0, 1) !== '#' && $(this).attr(
                    'data-method') == undefined) {
                window.location = new_location;
            }
        });
    }
});
</script>
<?php
}
add_action('wp_head', 'os_pwa_set');

function os_manifest_json()
{
    $manifest = array(
        'name'                => get_theme_mod('os_manifest_name', get_bloginfo('name')),
        'short_name'        => get_theme_mod('os_manifest_short_name', get_bloginfo('name')),
        'description'        => get_theme_mod('os_manifest_description', get_bloginfo('description')),
        'lang'                => get_theme_mod('os_manifest_language', get_bloginfo('language')),
        'start_url'            => '/',
        'orientation'        => get_theme_mod('os_manifest_orientation', 'portrait'),
        'display'            => get_theme_mod('os_manifest_display', 'standalone'),
        'theme_color'                => get_theme_mod('os_manifest_color', 'white'),
        'background_color'    => get_theme_mod('os_manifest_background_color', 'white'),
        'icons'            => array(
            array(
                'src'            => get_template_directory_uri() . '/assets/img/favicon/android-chrome-192x192.png',
                'sizes'            => '192x192',
                'type'            => 'image/png'
            ),
            array(
                'src'            => get_template_directory_uri() . '/assets/img/favicon/android-chrome-384x384.png',
                'sizes'            => '384x384',
                'type'            => 'image/png'
            ),
        )
    );

    if (isset($_GET['os_manifest_json'])) {
        wp_send_json($manifest);
    }
}
add_action('init', 'os_manifest_json');
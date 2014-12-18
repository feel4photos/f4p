<?php
/**
 * Template name: Home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- queryloader start -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.queryloader2.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!-- queryloader end -->

    <!-- image section start -->
    <article>
        <!--Thumbnail Navigation-->
        <div id="prevthumb"></div>
        <div id="nextthumb"></div>
        <!--Arrow Navigation-->
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>
        <div id="thumb-tray" class="load-item">
            <div id="thumb-back"></div>
            <div id="thumb-forward"></div>
        </div>
        <!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>
        <!--Control Bar-->
        <div id="controls-wrapper" class="load-item">
            <div id="controls">
                <a id="play-button"><img id="pauseplay" src="<?php echo get_template_directory_uri(); ?>/images/pause.png"/></a>
                <!--Slide counter-->
                <div id="slidecounter">
                  <span class="slidenumber"></span> / <span class="totalslides"></span>
                </div>
                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>
                <!--Thumb Tray button-->
                <a id="tray-button"><img id="tray-arrow" src="<?php echo get_template_directory_uri(); ?>/images/button-tray-up.png"/></a>
                <!--Navigation-->
                <ul id="slide-list"></ul>
            </div>
        </div>
    </article>
    <!-- image section end -->

<!-- menu effect start -->
<link href="<?php echo get_template_directory_uri(); ?>/css/icons.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/borderMenu.js"></script>
<!-- menu effect end -->

<?php
//get_sidebar();
//get_footer();

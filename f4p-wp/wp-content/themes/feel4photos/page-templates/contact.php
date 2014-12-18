<?php
/**
 * Template name: Contact page
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

<!-- contact section start -->
<section class="white f4p_contact_sec">
    <div class="bl-box">
        <article>
            <h1><?php the_title(); ?></h1>
            <!-- contact form start -->
            <div class="f4p_contact">
            	<?php while ( have_posts() ) : the_post(); ?>
            		<?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <!-- contact form end --> 
        </article>
    </div>
</section>
<!-- contact section end --> 

<!-- social section start -->
<section id="bl-work-section" class="white_rht">
    <div class="bl-box">
        <article>
            <h1><?php the_field("social_heading"); ?></h1>
            <?php the_field("social_info"); ?>
            
            <!-- social link section start -->
            <ul role="social_link">
                <li><a href="<?php echo get_option( 'f4pfb_link' );?>" target="_blank">facebook</a></li>
                <li><a href="<?php echo get_option( 'f4ptw_link' );?>" target="_blank">twitter</a></li>
                <li><a href="<?php echo get_option( 'f4pln_link' );?>" target="_blank">linkedin</a></li>
                <li><a href="<?php echo get_option( 'f4ppin_link' );?>" target="_blank">pinterest</a></li>
                <li><a href="#">vimeo</a></li>
                <li><a href="<?php echo get_option( 'f4pflckr_link' );?>" target="_blank">flickr</a></li>
            </ul>
            <!-- social link section end --> 
            <!-- copyright txt start -->
            <p class="copyrht">Copyright <?php the_time("Y"); ?> <span>&copy;</span> <?php bloginfo('name'); ?><br />
            Website by <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
            <!-- copyright txt end --> 
            <!-- phone no. start -->
            <div class="phone_no">
                <a href="tel:<?php echo get_option('f4p_phone_1'); ?>"><?php echo get_option('f4p_phone_1'); ?></a>
                <a href="tel:<?php echo get_option('f4p_phone_2');?>"><?php echo get_option('f4p_phone_2');?></a>
            </div>
            <!-- phone no. end -->
        </article>
    </div>
</section>
<!-- social section end --> 

<?php
//get_sidebar();
get_footer();

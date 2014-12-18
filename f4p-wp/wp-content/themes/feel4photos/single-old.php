<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="f4p_blog">
	<div class="f4p_single_cont scrollarea">
		<?php while ( have_posts() ) : the_post(); ?>
        	<!-- single content start -->
            	<!-- post single title start -->
                <h1><?php the_title(); ?></h1>
                <!-- post single title end -->
                <!-- post featured image start -->
                <figure><?php the_post_thumbnail(); ?></figure>
                <!-- post featured image end -->
                <!-- post content start -->
                <?php the_content(); ?>
                <!-- post content end -->
            <!-- single content end -->
        	
        	<!-- post page nav start -->
            <nav class="nav-single">
                <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
                <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
                <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
            </nav>
            <!-- post page nav end -->
        	<!-- comment section start -->
        	<?php comments_template( '', true ); ?>
            <!-- comment section end -->
        <?php endwhile; // end of the loop. ?>
    </div>
	<!-- sidebar start -->
	<div class="f4p_blog_sidebar"><?php get_sidebar(); ?></div>
    <!-- sidebar end -->
</div>
<?php
//get_sidebar( 'content' );
get_footer();

<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="f4p_blog">

	<?php if ( have_posts() ) : ?>

    <header class="archive-header">
        <h1 class="archive-title"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

        <?php
            // Show an optional term description.
            $term_description = term_description();
            if ( ! empty( $term_description ) ) :
                printf( '<div class="taxonomy-description">%s</div>', $term_description );
            endif;
        ?>
    </header><!-- .archive-header -->
            
	<!-- blog posts start -->
	<ul class="f4p_blog_list scrollarea">
		<?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                get_template_part( 'content', get_post_format() );

                endwhile;
                // Previous/next page navigation.
                twentyfourteen_paging_nav();

            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

            endif;
        ?>
    </ul>
    <!-- blog posts end -->
    <!-- sidebar start -->
	<div class="f4p_blog_sidebar"><?php get_sidebar(); ?></div>
    <!-- sidebar end -->
</div>

<?php
//get_sidebar( 'content' );
get_footer();

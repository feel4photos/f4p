<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<li>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
        	<?php if(!is_single()) { ?>
        	<!-- feature image start -->
			<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>
            <figure>
                <a href="<?php the_permalink(); ?>" style="background-image:url('<?php echo $background[0]; ?>');"></a>
            </figure>
            <?php endif; ?>
            <!-- feature image end -->
            <?php } ?>
            <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
            <div class="entry-meta">
            	<?php if(!is_home() && !is_category() && !is_tag() && !is_archive()) { ?>
                <span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
                <?php } ?>
            </div>
            <?php
                endif;
    
                if ( is_single() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
                endif;
            ?>
    
            <div class="entry-meta">
                <?php
                    if ( 'post' == get_post_type() )
                        twentyfourteen_posted_on();
    
                    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
                ?>
                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
                <?php
                    endif;
    
                    edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
                ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->
    
        <?php if ( is_search() || is_home() || is_category() || is_tag() || is_archive() ) : ?>
        <div class="entry-summary">
            <?php //the_excerpt(); ?>
            <p><?php echo substr(strip_tags($post->post_content), 0, 129);?>...</p>
            <?php /*?><p>
				<?php
                    if(has_excerpt()){
                        the_excerpt();
                    }
                    else{
                        $content                 = get_the_excerpt();
                        $explode_content_line    = explode(".",$content);
                        print $explode_content_line[0];
                    }
                ?>
            </p><?php */?>
            <a href="<?php the_permalink(); ?>" class="read_more">read more</a>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content f4p_single_cont_holder">
        	<figure><?php the_post_thumbnail(); ?></figure>
            <?php
                the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
    	<?php if(!is_home() && !is_category() && !is_tag() && !is_archive()) { ?>
        <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
        <?php } ?>
    </article>
</li>


<!-- custom scroller start -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	(function(jQuery){
		jQuery(window).load(function(){
			
			jQuery(".scrollarea").mCustomScrollbar({
				theme:"minimal-dark"
			});
			
		});
	})(jQuery);
</script>
<!-- custom scroller end -->
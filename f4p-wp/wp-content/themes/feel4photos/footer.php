<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php if(is_front_page()) { ?>
    </section>
    <!-- inner end -->
</section>
<!-- outer section end -->
<?php } else { ?>

		</div>
        <!-- inner body end -->
    </div>
    <!-- body end -->
	<!-- footer start -->
    <footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar( 'footer' ); ?>
    </footer>
    <!-- footer end -->
</div>
<!-- outer end -->
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
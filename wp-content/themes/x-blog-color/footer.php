<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package x-blog
 */

?>

	</div><!-- #content -->
    <?php if(is_dynamic_sidebar('footer-widget')): ?>
    <div class="footer-widget-area"> 
        <div class="baby-container widget-footer"> 
            <?php dynamic_sidebar('footer-widget'); ?>
        </div>
    </div>
    <?php endif; ?>
	<footer id="colophon" class="site-footer footer-display">
		<div class="baby-container site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'x-blog-color' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'x-blog-color' ), 'WordPress' );
				?></a>
				<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s', 'x-blog-color' ), 'XBlog Color', '<a href="'.esc_url('https://wpthemespace.com/product/x-blog').'">wpthemespace.com</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

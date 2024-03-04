<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gespenster
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			Gespenster
			<span class="sep"> | </span>
			&copy; <?php echo date("Y");?> Steinlia <span class="sep"> | </span> <a href="<?php echo get_privacy_policy_url();?>"><?php echo __('Privacy Policy');?></a>
</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

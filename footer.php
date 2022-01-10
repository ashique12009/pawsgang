<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pawsgang
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-2">About</div>
					<div class="col-2">Company</div>
					<div class="col-md-4 ms-auto">Keep in touch</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row d-flex align-item-center text-center mt-2">
				<div class="col">
					<p>&copy; <?php bloginfo( 'name' );?> <?php echo date('Y');?> / Created by <a href="mailto:ashique12009@gmail.com">ashique12009@gmail.com</a></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

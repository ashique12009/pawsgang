<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawsgang
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="container home-page-main-slider pt-3">
			<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<img src="<?php echo get_template_directory_uri() . '/img/slider-1.jpg';?>" class="d-block w-100" alt="slider">
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="<?php echo get_template_directory_uri() . '/img/slider-2.jpeg';?>" class="d-block w-100" alt="slider">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri() . '/img/slider-3.jpg';?>" class="d-block w-100" alt="slider">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

		<section class="container popular-products">
			<div class="row d-flex justify-content-center">
				<h1 class="text-center pt-5">Popular Products</h1>
				<p class="w-25 text-center">We offer a number of high quality toys. We offer a number of high quality toys.We offer a number of high quality toys. We offer a number of high quality toys.</p>
			</div>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products column=4 limit=4]' );?>
			</div>
		</section>

		<section class="container-fluid product-categories">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<h1 class="text-center pt-5">Categories</h1>
					<p class="w-25 text-center">We offer a number of high quality toys. We offer a number of high quality toys.We offer a number of high quality toys. We offer a number of high quality toys.</p>
				</div>
				<div class="pt-5 pb-5">
					<?php echo do_shortcode( '[products column=4 limit=4]' );?>
				</div>
			</div>			
		</section>

		<section class="container product-special-offers">
			<div class="row d-flex justify-content-center">
				<h1 class="text-center pt-5">Special offers</h1>
				<p class="w-25 text-center">We offer a number of high quality toys. We offer a number of high quality toys.We offer a number of high quality toys. We offer a number of high quality toys.</p>
			</div>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[sale_products column=4 limit=4]' );?>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
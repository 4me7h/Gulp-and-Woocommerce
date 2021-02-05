<?php
/*
Template Name: Inicio
*/ 

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<section class="hero">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 class="text-center">Petsupply</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="about">
			<div class="container">
				<div class="row">
					<div class="col-5">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/pets-03.jpg" alt="pets">
					</div>
					<div class="col-7">
						<h2>Consiente a tu mascota desde la comodidad de tu hogar</h2>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

	<!-- 		
	<ul class="products">
		<?php
			$args = array(
				'post_type' => 'product',
				'posts_per_page' => 6
				);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();
					wc_get_template_part( 'content', 'product' );
				endwhile;
			} else {
				echo __( 'No products found' );
			}
			wp_reset_postdata();
		?>
	</ul> -->

<?php
get_footer();

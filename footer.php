<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
	<!-- container except home and contact -->
	<?php if(!is_page('inicio')) { ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	<?php } ?>
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col">

					<p class="copy">&copy; Pet Supply <?php echo date('Y'); ?></p>

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

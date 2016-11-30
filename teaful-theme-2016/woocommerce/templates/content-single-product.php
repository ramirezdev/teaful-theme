<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>



<div id="inner-content" class="wrap cf">

	<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<article id="product-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


			<section class="entry-content cf" itemprop="articleBody">
				<?php
					the_content();
				?>

			</section> 


		</article>


	</main>

	<?php if( get_field('sell_a_la_carte') ): ?>
	

		<div class="buy-bar a-la-carte">
			<span class="prod-title"><?php the_title(); ?></span> <span class="quanity-price">$20 for 60 grams</span>
			<span class="qty-label">QTY</span>
			<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_add_to_cart - 5
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>

	<?php else : ?>

		<div class="buy-bar">
			<span class="cta">SUBSCRIBE FOR A VARIETY OF TEAS DELIVERED TO YOU</span> <div class="buy-this"><span class="price">$30/month</span> <a href="https://teaful.co/?add-to-cart=140">BUY NOW</a></div>
		</div>

	
	<?php endif; ?>


</div>


<?php get_footer(); ?>

<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @author WooThemes
 * @package WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

?>

<div class="ljs2017-template-checkout__container">
	<div class="ljs2017-template-checkout__checkout-container">
		<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

			<?php if ( $checkout->get_checkout_fields() ) : ?>

				<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>


				<?php do_action( 'woocommerce_checkout_billing' ); ?>


				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

			<?php endif; ?>



			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

			<h3 class="ljs2017-template-checkout__heading-payment">Payment Details</h3>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>

			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

		</form>

		<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
	</div>

	<div class="ljs2017-template-checkout__details-container">
		<i
			class="fa fa-ticket"
			aria-hidden="true"></i>
		<div class="ljs2017-template-checkout__headline">
			<h1>TWO DAYS<br> GREAT WORKSHOPS<br> AWESOME SPEAKERS</h1>
		</div>
		<div class="ljs2017-template-checkout__speakers">
			<p>Keynote Speaker</p>
			<p>Pam Selle</p>
		</div>
		<div class="ljs2017-footer__divider"></div>
		<div class="ljs2017-template-checkout__info-location">
			OCTOBER 2018 &middot; PHILADELPHIA, USA
		</div>
	</div>
</div>

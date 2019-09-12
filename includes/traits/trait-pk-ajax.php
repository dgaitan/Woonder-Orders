<?php

/**
 * The Woonder Orders Ajax functions
 *
 * @link       https://github.com/dgaitan
 * @since      1.0.0
 *
 * @package    Pk_Woonder_Orders
 * @subpackage Pk_Woonder_Orders/includes/traits
 */

/**
 * The Woonder Orders Ajax functions.
 *
 * Use this trait to handle the logic of the
 * Main Ajax Class
 *
 * @package    Pk_Woonder_Orders
 * @subpackage Pk_Woonder_Orders/includes/traits
 * @author     David Gaitán <jdavid.gaitan@gmail.com>
 */
trait Pk_Ajax_Logic {

	/**
	 * Setup the initial data in the woonder orders index page
	 *
	 * @since  1.0.0
	 * @return array $data all the necessary data to show in index
	 */
	private function init_data() {

	}

	/**
	 * Get all WooCommerce Orders
	 *
	 * @since  1.0.0
	 * @return array $orders The Order List
	 */
	private function get_orders() {
		return array( 'orders' => [] );
	}

	/**
	 * Get a single WooCoomerce Order
	 *
	 * @since 1.0.0
	 * @return array $order The Order Single Object
	 */
	private function get_order() {

	}
}
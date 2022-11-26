<?php
class Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Bank_Transfer_5 extends Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Bank_Transfer {
	/**
	 * Constructor for the gateway.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- Only called on debug mode.
		WP_DEBUG && trigger_error( sprintf( '%1$s is <strong>deprecated</strong> since version %2$s with no alternative available.', __CLASS__, '1.1.0' ), E_USER_DEPRECATED );

		$this->id           = 'bank_transfer_5';
		$this->method_title = __( 'Bank Transfer 5', '_JPinto' );

		parent::__construct();
	}
}

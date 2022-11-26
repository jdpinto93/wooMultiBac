<?php
defined( 'ABSPATH' ) || die;

class Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader_Factory implements Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container_Entry_Factory_Interface {
	/**
	 * Create and configure a loader.
	 *
	 * @since 1.1.0
	 * @param Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container $container Container.
	 * @return Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader Loader.
	 */
	public function create( Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container $container ) {
		$config = $container->get( 'config' );
		$hooks  = isset( $config['hooks'] ) ? $config['hooks'] : array();
		$loader = new Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader();

		foreach ( $hooks as $hook ) {
			$type    = array_shift( $hook );
			$hook[1] = $container->get( $hook[1] );

			call_user_func_array( array( $loader, "add_$type" ), $hook );
		}

		return $loader;
	}
}

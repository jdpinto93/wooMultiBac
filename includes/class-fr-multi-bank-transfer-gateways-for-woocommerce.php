<?php
defined( 'ABSPATH' ) || die;

class Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce {
	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @var Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	private $loader;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * @since 1.0.0
	 * @param Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader $loader Loader.
	 */
	public function __construct( Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader $loader ) {
		$this->loader = $loader;
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since 1.0.0
	 */
	public function run() {
		$this->loader->run();
	}
}

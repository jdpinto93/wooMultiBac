<?php
defined( 'ABSPATH' ) || die;

$services  = require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'config/services.php';
$hooks     = require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'config/hooks.php';
$container = new Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container();

$container->set( 'config', compact( 'hooks' ) );

foreach ( $services['factories'] as $name => $factory ) {
	$container->set_factory( $name, $factory );
}

$plugin = $container->get( 'Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce' );

return $plugin;

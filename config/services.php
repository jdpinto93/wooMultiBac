<?php

defined( 'ABSPATH' ) || die;

$services = array(
	'factories' => array(
		'Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce' => 'Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Factory',
		'Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader' => 'Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Loader_Factory',
	),
);

return apply_filters( 'fr_multi_bank_transfer_gateways_for_woocommerce_services', $services );

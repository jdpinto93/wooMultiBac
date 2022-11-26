<?php
/**
 * Plugin Name:       Multi BAC
 * Plugin URI:        http://www.webmasteryagency.com
 * Description:       Edita los campos del formulario de woocommerce, importa y exporta los ajustes para que sea facil la mugracion o reemplazar ajustes
 * Version:           1.1.3
 * Requires at least: 5.2
 * Requires PHP:      7.2.2
 * Author:            Jose Pinto
 * Author URI:        http://www.webmasteryagency.com
 * License:           GPL v3 or later
 * Domain Path: /lang
 * Text Domain _JPinto
 */
defined( 'ABSPATH' ) || die;

define( 'FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_VERSION', '1.1.3' );
define( 'FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_FILE', __FILE__ );
define( 'FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR', plugin_dir_path( __FILE__ ) );

require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'includes/class-fr-multi-bank-transfer-gateways-for-woocommerce-container-entry-factory-interface.php';
require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'includes/class-fr-multi-bank-transfer-gateways-for-woocommerce-container.php';
require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'includes/class-fr-multi-bank-transfer-gateways-for-woocommerce-factory.php';
require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'includes/class-fr-multi-bank-transfer-gateways-for-woocommerce.php';
require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'includes/class-fr-multi-bank-transfer-gateways-for-woocommerce-loader-factory.php';
require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'includes/class-fr-multi-bank-transfer-gateways-for-woocommerce-loader.php';
require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'admin/class-fr-multi-bank-transfer-gateways-for-woocommerce-admin.php';


function bank_transfer() {
	$plugin = require FR_MULTI_BANK_TRANSFER_GATEWAYS_FOR_WOOCOMMERCE_DIR . 'bootstrap/plugin.php';
	$plugin->run();
}
// Priority 5, in case we also have services that need to hook on plugins_loaded action.
add_action( 'plugins_loaded', 'bank_transfer', 5 );

<?php
defined( 'ABSPATH' ) || die;
class Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container {
	/**
	 * Factory definitions.
	 *
	 * @var array
	 */
	private $factories = array();

	/**
	 * Container entries.
	 *
	 * @var array
	 */
	private $entries = array();

	/**
	 * Set a container entry.
	 *
	 * @since 1.1.0
	 * @param string $name Entry ID.
	 * @param mixed  $value The entry.
	 */
	public function set( $name, $value ) {
		$this->entries[ $name ] = $value;
	}

	/**
	 * Set a factory definition.
	 *
	 * @since 1.1.0
	 * @param string $name Entry ID.
	 * @param string $factory Factory class name.
	 */
	public function set_factory( $name, $factory ) {
		$this->factories[ $name ] = $factory;
	}

	/**
	 * Get an entry.
	 *
	 * @since 1.1.0
	 * @param string $name Entry ID.
	 * @throws LogicException If the factory class does not implement
	 *  Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container_Entry_Factory_Interface.
	 * @throws Exception If no entry with the specified ID in the container.
	 */
	public function get( $name ) {
		if ( array_key_exists( $name, $this->entries ) ) {
			return $this->entries[ $name ];
		}

		if ( isset( $this->factories[ $name ] ) ) {
			$factory = new $this->factories[ $name ]();
			if ( ! $factory instanceof Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container_Entry_Factory_Interface ) {
				throw new LogicException( "{$this->factories[$name]} must implements Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Container_Entry_Factory_Interface" );
			}

			$entry = $factory->create( $this );
			$this->set( $name, $entry );

			return $entry;
		}

		if ( class_exists( $name ) ) {
			$entry = new $name();
			$this->set( $name, $entry );

			return $entry;
		}

		throw new Exception( "$name entry cannot be found in the container" );
	}
}

<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Helpers
if ( ! function_exists( 'vc_atm_build_categories_array' ) ) {
	/**
	 * @depreacted 7.7
	 * @param $string
	 *
	 * @return array
	 */
	function vc_atm_build_categories_array( $string ) {
		_deprecated_function( __FUNCTION__, '7.7', "vc_modules_manager()->get_module( 'vc-automapper' )->build_categories_array()" );
		if ( ! vc_modules_manager()->is_module_on( 'vc-automapper' ) ) {
			vc_modules_manager()->turn_on( 'vc-automapper' );
		}
		return vc_modules_manager()->get_module( 'vc-automapper' )->build_categories_array( $string );
	}
}
if ( ! function_exists( 'vc_atm_build_params_array' ) ) {
	/**
	 * @depreacted 7.7
	 * @param $array
	 *
	 * @return array
	 */
	function vc_atm_build_params_array( $array ) {
		_deprecated_function( __FUNCTION__, '7.7', "vc_modules_manager()->get_module( 'vc-automapper' )->build_params_array()" );
		if ( ! vc_modules_manager()->is_module_on( 'vc-automapper' ) ) {
			vc_modules_manager()->turn_on( 'vc-automapper' );
		}
		return vc_modules_manager()->get_module( 'vc-automapper' )->build_params_array( $array );
	}
}

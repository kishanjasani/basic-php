<?php
/**
 * traits.php
 */

namespace cbBlocks\Traits;

trait Properties {

	function get_sum( $param_one, $param_two ) {
		return $param_one + $param_two;
	}

	function get_product( $param_one, $param_two ) {
		return $param_one * $param_two;
	}

}

/**
 * Person.php
 */
use cbBlocks\Traits\Properties as Properties;

class Person_A {

	function __construct() {
		$result = Properties->get_sum( 2, 4 );
		echo $result;
	}
}

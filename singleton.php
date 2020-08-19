<?php
/**
 * It's used to restrict the instantiation of a class to a single object
 * Example
 *
 * $user       = new User();   |    $user       = new User();
 * $user_one   = new User();   |    $user_one   = User::get_instance();
 * $user_two   = new User();   |    $user_two   = User::get_instance();
 * $user_three = new User();   |    $user_three = User::get_instance();
 *
 * Useful when only one object is required across the system.
 *
 * Ensure a single class instance and that is global its point of access.
 */

class User {
	/**
	 * Holds an instance of the class.
	 */
	private static $instance;

	public static function get_instance() {
		/**
		 * If an instance of a class is not set/created.
		 * create an instace of a class( instantiate is ) and
		 * store that class in $instance.
		 */
		if ( ! isset( self::$instance ) ) {
			self::$instance = new __CLASS__;
		}

		return self::$instance;
	}
}

$user1 = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();

/**
 * Real World app demo.
 */
trait Singleton {
	public static function get_instance() {
		static $instance = array();

		$called_class = get_called_class();

		if ( ! isset( $instance[ $called_class ] ) ) {
			$instance[ $called_class ] = new $called_class();
		}

		return $instance[ $called_class ];
	}
}

class User {
	use Singleton;

	public function __construct() {
		echo 'User';
	}
}

$user_one = User::get_instance();
$user_two = User::get_instance();

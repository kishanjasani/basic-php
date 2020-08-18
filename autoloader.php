<?php
/**
 * Autoloaders
 * Loading class or interface automatically
 *
 * spl_Autoload_register()
 * register any numbers of autoloaders
 */

spl_autoload_register(
	function ( $class ) {
			require 'includes/' . $class . '.php';
	}
);

new Student();
new Person();

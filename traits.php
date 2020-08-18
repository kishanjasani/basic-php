<?php
/**
 * Traits
 * Earlier we could only inherit properties and functions from one class to another, by extending them.
 * If we want to ptoperties and method of inerited class into another, we need to extend it again - it creates chain of inheritance.
 * Solution is traits.
 */

/**
 * Example:
 * Teacher -> teach()     extends  Person
 * Student -> learn()    Now if i wants the metthod of learn in Person class then we need to use traits.
 */

/**
 * Traits allows us to reuse sets of methods freely in several independence classes living in different class heirarchies.
 *
 * Share functionalities from multiple classes.
 *
 * Traits is similar to classes but only intended to group functionality in fine-grained and consistence way.
 *
 * We can't instantiate a traits to its own
 */

trait Say_World {
	public function say_hello() {
		echo 'Hello from traits';
	}
}

class Teacher {
	public function say_name() {
		echo 'Teacher';
	}
}

class Base extends Teacher {
	use Say_World;

	public function __construct() {

	}
}

$base = new Base();
$base->say_hello();
$base->say_name();



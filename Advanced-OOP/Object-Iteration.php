<?php
/*
 * Object Iteration
 * Definitions of iteration
 * noun: the repetition of a process or utterance.
 */
class People{
	// public properties
	public $person1 = 'Mike';
	public $person2 = 'Shelly';
	public $person3 = 'Jeff';

	// protected properties
	protected $person4 = 'john';

	// private properties
	private $person5 = 'Jen';

	// method
	function iterateObject(){
		// foreach loop
		foreach ($this as $key => $value) {
			print "$key => $value\n";
		}
	}
}

// instantiate class people
$people = new People;

// call iterateObject
$people->iterateObject();
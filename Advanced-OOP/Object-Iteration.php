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
$people->iterateObject(); // this way we can access all of its own properties

// but if we use this loop outside the class we will get only public values - we can't access private & protected values outside the class.
foreach ($people as $key => $value) {
	print "$key => $value\n";
}
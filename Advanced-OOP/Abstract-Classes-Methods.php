<?php
/*
 * Abstract Classes & Methods
 */
// abstract class
abstract class Animal{
	// properties
	public $name;
	public $color;

	// methods
	public function describe(){
		return $this->name. ' is ' .$this->color;
	}

	abstract public function makeSound();
}

// child class using extends
class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return 'Quack';
	}
}

// another child class using extends
class Dog extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return 'Bark';
	}
}

// So what do we want to do now we want to create a new animal let's create a new duck. using instantiation
$animal = new Duck();
$animal->name = 'Ben';
$animal->color = 'Yellow';
echo $animal->describe();
echo '<br />';
echo $animal->makeSound();


/*
$animal = new Dog();
$animal->name = 'Larry';
$animal->color = 'Brown';
echo $animal->describe();
echo '<br />';
echo $animal->makeSound();
*/


/*
All right if one function is defined as a distraction that means that the class has to be abstract.
We can't have abstract and then have the class not be.
And we also can't instantiate the abstract class.
That's why Down here we're instantiating the dog class. (that means child classes)
*/
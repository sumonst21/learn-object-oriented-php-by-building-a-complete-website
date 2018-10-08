<?php
// class
// we can also use the "Final" word in class like: Final class Foo{
Final class Foo{
	// method
	// using "Final" word in front of public function then this function can no longer get overridden by any child classes. like this: Final public function sayHello(){
	public function sayHello(){
		echo 'Hello World';
	}
}
// now go to bar.php


/*
 * Tips about Final word
 * this can be helpful especially if you're working with multiple developers.
 * You can kind of claim your your classes that you don't want to be to have other methods inherit from.
 */
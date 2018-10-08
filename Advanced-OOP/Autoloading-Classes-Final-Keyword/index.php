<?php
// autolaoding classes using php function called: SPL auto load register.
spl_autoload_register(function($class_name){
	include $class_name . '.php';
});

// instantiate these 
$foo = new Foo;
$bar = new Bar;

$foo->sayHello();

//$bar->sayHi();
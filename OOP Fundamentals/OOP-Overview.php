<?php
Class User{
    public $someProperty;
    public function someFunction(){
        // Do Something
    }
}

/**
 * Visibility
 * public - Accessible outside of class
 * protected - Accessible in class and any extended classes
 * private - Accessible ONLY in owner class
 * 
 * -- Can be attached to both properties and methods
 * 
 * Inheritance
 * Classes can be extended to a child class
 * Child classes have access to all of it's parents properties and methods UNLESSS the visibility of them is set to "private"
 */

 class ChildClass extends ParentClass
 {
     
 }

/** Instantiate and Use a CLass */
 // To create an instance
 $user = new User;

 // Print a property
 echo $user->firstName;

 // Call a method/function
 $user->register();
 
?>

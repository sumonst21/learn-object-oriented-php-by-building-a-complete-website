<?php
/**
 * Coding exercise
 * Let's write a user class with the tools we have just acquired.
 * This class will contain the first and last name of each user and will be able to say hello to anyone who uses our application.
 * Source: https://phpenthusiast.com/object-oriented-php-tutorials/create-classes-and-objects/practice
 */

//For this practice my solution was:
 
Class User{
    public $firstName;
    public $lastName;
    
    public function Hello($firstName, $lastName){
        echo 'Hello '.$firstName. ' ' .$lastName. '<br />';
    }
}
$User = new User;
$User->Hello('Sumon', 'Islam');


/**
* but there actual solution was long practice im going to write bellow:
*/

// Write the class User and add the properties:

class User_Practice {
	// Properties
  public $firstName;
  public $lastName;

  // Add the method that says hello:
  public function hello()
  {
    return "hello";
  }
 
}

// Create the first instance, and call it $user1. Use the new keyword to create an object from the class.
$user1 = new User_Practice();

// Set the values for the first and last name to $user1.
$user1->firstName = 'John';
$user1->lastName  = 'Doe';

/*
 * Get the user first and last name, and print it to the screen with echo.
 * Expected result: John Doe
 */

echo $user1->firstName . " " . $user1->lastName;

/*
 * Use the hello() method with the first and last name variables in order to say hello to the user:
 *Expected result: hello, John Doe
 */

$hello = $user1->hello();
 
echo $hello . ",  " . $user1->firstName . " " . $user1->lastName;


/*
 * What the??? As I'm still learning OOP as a noobie so not sure if my won code was good or should i follow phpenthusiast.com's code! :)
 */


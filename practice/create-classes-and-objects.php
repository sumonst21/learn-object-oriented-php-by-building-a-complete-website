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
 * above this line i was learning from udemy and practiced on phpenthusiast.com but after reading there tutorial im now clear about coding standard. :)
 * My first solution was not good because i can't use the class properties with different values by creating multiple objects/instantiation. So i'll continue with phpenthusiast :)
 * reference: https://phpenthusiast.com/object-oriented-php-tutorials/create-classes-and-objects
 */


/*
 * Add another object, call it $user2, give it a first name of 'Jane' and last name of 'Doe', then say hello to the user.
 */

class User {
  public $firstName;
  public $lastName;
 
  public function hello()
  {
    return "hello";
  }
}
 
 
$user1 = new User();
$user1->firstName = 'John';
$user1->lastName  = 'Doe';
 
$hello = $user1->hello();
 
 
$user2 = new User();
$user2 ->firstName = 'Jane';
$user2 ->lastName  = 'Doe';
 
 
echo $hello . ",  " . $user1->firstName . " " . $user1->lastName;
 
echo $hello . ",  " . $user2->firstName . " " . $user2->lastName;


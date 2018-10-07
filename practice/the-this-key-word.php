<?php
/*
 * Practice: The $this keyword
 */
class User {
 
  // The class properties.
  public $firstName;
 
  public $lastName;
 
  // A method that says hello to the user $firstName.
  // The user $firstName property can be approached with the $this keyword.
  public function hello()
  {
    return "hello, " .  $this -> firstName;

  }
}
 
// Create a new object.
$user1 = new User();
 
// Set the user $firstName and $lastName properties.
$user1 -> firstName = "Jonnie";
$user1 -> lastName = "Roe";
 
// Echo the hello() method.
echo $user1 -> hello();



/*
 * This is the code that we have written in this tutorial:
 */
class Car {

    // The properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
 
    // The method that says hello
    public function hello()
    {
      return "Beep I am a <i>" . $this -> comp . 
         "</i>, and I am <i>" . $this -> color;
    }
}
 
// We can now create an object from the class.
$bmw = new Car();
$mercedes = new Car();
 
// Set the values of the class properties.
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
$mercedes -> color = "green";
 
// Call the hello method for the $bmw object.
echo $bmw -> hello();

echo $mercedes -> hello();

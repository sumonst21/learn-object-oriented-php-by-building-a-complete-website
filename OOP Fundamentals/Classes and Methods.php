<?php
class User{
    // classes & methods is the constructor
    public function __construct()
    {
        echo 'Constructor Called';
    }

    // access identifier and methods
    public function register(){
        echo 'User Registered';
    }

    public function login($username, $password){
        echo $username. ' is now logged in';
    }

    // destructor 
    public function __destruct()    // use can use this destructor to close database connection or anything at the end of your code
    {
        echo 'Destructor Called';
    }
}
// Instantiate the class
$User = new User;

$User->register();
//$User->login('Sumon', '1234');
?>

<?php
class User{
    // access identifier and methods
    public function register(){
        echo 'User Registered';
    }

    public function login($username, $password){
        echo $username. ' is now logged in';
    }
}
// Instantiate the class
$User = new User;

//$User->register();
$User->login('Sumon', '1234');
?>

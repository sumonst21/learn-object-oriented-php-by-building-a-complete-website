<?php
class User
{
    // before to get to access modifier lets just add a couples properties here
    public $id ;
    public $username;
    public $email;
    public $password;

    // classes & methods is the constructor
    public function __construct()
    {
        echo 'Constructor Called <br />';
    }

    // access identifier and methods
    public function register()
    {
        echo 'User Registered';
    }

    public function login($username, $password)
    {
        //echo $username. ' is now logged in';

        // we want to call authuser from within login so
        $this->auth_user($username, $password);

    }

    public function auth_user($username, $password)
    {
        echo $username . ' is authenticated<br/>';
    }

    // destructor 
    public function __destruct()    // use can use this destructor for clossing  database connection or anything at the end of script
    {
        echo 'Destructor Called<br />';
    }
}
// Instantiate the class
$User = new User;

//$User->register();
$User->login('Sumon', '1234');
?>

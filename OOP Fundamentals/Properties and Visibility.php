<?php
class User
{
    /**
     * before to get to access modifier lets just add a couples properties here
     * we can access properties in all of our methods
     */
    private $id = 33; // we can set default value for properties like: public $id = 1;
    private $username;
    private $email;
    private $password;

    // classes & methods is the constructor
    public function __construct($username, $password)
    {
        //echo 'Constructor Called <br />';
        $this->username = $username;
        $this->password = $password;
    }

    // access identifier and methods
    public function register()
    {
        echo 'User Registered';
    }

    public function login()
    {
        //echo $username. ' is now logged in';
        //$this->username = $username; // we are gonnna use the above property: $username here
        //$this->password = $password;
        // we want to call authuser from within login so
        $this->auth_user(); // we don't need to pass any arguments here because we know the class properties above this  line

    }

    public function auth_user()
    {
        //echo $username . ' is authenticated<br/>';
        //echo $this->id;
        //echo $this->username. ' is authenticated';
    }

    // destructor 
    public function __destruct()    // use can use this destructor for clossing  database connection or anything at the end of script
    {
        //echo 'Destructor Called<br />';
    }
}
// Instantiate the class
$User = new User('Sumon', '1234');

//echo $User->username;

//$User->register();
//$User->login('Sumon', '1234');
//$User->login();
?>

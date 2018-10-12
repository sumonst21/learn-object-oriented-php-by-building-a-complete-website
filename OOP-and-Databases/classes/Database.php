<?php
class Database{
    private $host   = 'localhost';
    private $user   = 'myblog';
    private $pass   = '123456';
    private $dbname = 'myblog';

    private $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        // Set DSN
        $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
        // Set Options
        $options = array(
            PDO::ATTR_PERSISTENT        => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // Create new PDO
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch(PDOEception $e){
            $this->error = $e->getMessage();
        }
    }
}
/*
class Database
{
    // properties for db connection
    private $host   = 'localhost';
    private $user   = 'myblog';
    private $pass   = '1234564';
    private $dbname = 'myblog';
    // properties for db handler
    private $dbh;
    private $error;
    private $stmt;

    // constract method
    public function __construct()
    {
        // Set DSN
        $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
        // Set Options
        $options = array(
            PDO::ATTR_PERSISTENT   =>  true,
            PDO::ATTR_ERRMODE      =>  PDO::ERRMODE_EXCEPTION
        );
        // Create new PDO
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }
}
*/
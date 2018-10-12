<?php
// database class
class Database{

    // properties for db connection
    private $host   = 'localhost';
    private $user   = 'myblog';
    private $pass   = '123456';
    private $dbname = 'myblog';

    // properties for db handler
    private $dbh;
    private $error;
    private $stmt;

    // constract method
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

    // query function
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    // bind function
    public function bind($param, $value, $type = null){
        // check to see if the type is null
        if(is_null($type)){
            switch (true) {
                case is_int($value):
                $type = PDO::PARAM_INT;
                break;
                case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
                case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
                default:
                $type = PDO::PARAM_STR;
            }
        }
    }
}
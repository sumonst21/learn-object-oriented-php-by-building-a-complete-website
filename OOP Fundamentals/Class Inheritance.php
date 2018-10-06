<?php
class First{
    public $id = 23;
    protected $name = 'John Doe';

    public function saySomething($word){
        //echo 'Something...';
        echo $word;
    }
}


class Second extends First{
    // now anything available in the First class gonna be available in this Second class
    public function getName(){
        echo $this->name;
    }
}

$second = new Second;

//echo $second->name;
//echo $second->saySomething();

echo $second->getName();


//echo $second->saySomething('Hello World');
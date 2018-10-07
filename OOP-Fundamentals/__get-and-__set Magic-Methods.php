<?php
class Post
{
    private $name;
    /*__set - the megic method*/
    public function __set($name, $value){
        echo 'Setting '. $name.' to <strong>'.$value.'</strong><br />';
        $this->name = $value;
    }
    
    /*__get - magic method*/
    public function __get($name){
        echo 'Getting ' . $name . '  <strong>' . $this->name . '</strong><br />';
    }

    /**
     * __isset - megic method
     */

    public function __isset($name){
        echo 'Is '.$name.' set?<br />';
        return isset($this->name);
    }
}

$post = new Post;
$post->name = 'Testing';
echo $post->name;
var_dump(isset($post->name));

<?php
/*
 * Static Properties & Methods
 */

class User{
	// property
	public $username;
	// static property
	public static $minPassLength = 5;
	// static method
	public static function validatePassword($password){
		// when using static properties or static methods we dont use "this" instead we need to use "self" with Two semicolon "::" this called "The SCOPE" what is its scope resulation operator. that's all we use if something static.
		if(strlen($password) >= self::$minPassLength){
			return true;
		} else {
			return false;
		}
	}
}

// set variable this would get not valid
$password = 'pass';
// and this will get valid
$password = 'password'; // because of the length of the string :)

// this time we didn't instantiate this like: "$user = new User;" bcoz we don't have to do that when we're dealing with static methods or static properties.

// to check that create if statement with Class name "User" and then scope resulation operator and then call the function.
if(User::validatePassword($password)){
	echo 'Password is valid';
} else {
	echo 'Password is NOT valid';
}
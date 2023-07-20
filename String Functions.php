<?php
$username = "Bro code";

$phone = "123-456-7890";

//Lowercase Username
$username = strtolower($username);
echo $username . PHP_EOL;

//Uppercase username
$username = strtoupper($username);
echo $username;

//Trim the white spaces
$username = trim($username);
echo $username . PHP_EOL;

//Pad the name with value upto given number(20)
$username = str_pad($username, 20, "0");
echo $username . PHP_EOL;

//Replace the - with empty spaces
$phone = str_replace("-", "", $phone);
echo $phone . PHP_EOL;

//reverse the username
$username = "Bro code";
$username = strrev($username);
echo $username . PHP_EOL;

//shuffle the username
$username = str_shuffle($username);
echo $username . PHP_EOL;

//COmpare the value
$equals = strcmp($username, "Bro Code");
echo $equals . PHP_EOL;

//Length of the value
$username = "Bro code";
$count = strlen($phone);
echo $count . PHP_EOL;

// return the index position of the value
$index = strpos($phone, "-");
echo $index . PHP_EOL;

//create a substring from the original given string
$firstname = substr($username, 0, 3);
echo $firstname . PHP_EOL;

//create a substring from the original given string
$lastname = substr($username, 4);
echo $lastname . PHP_EOL;


$fullname = explode(" ", $username);
foreach ($fullname as $name) {
    echo $name . PHP_EOL;
}

//Implode
$username = array("Bro", "The", "code");
$username = implode(" ", $username);
echo $username;

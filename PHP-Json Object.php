<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);

//associative array
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

echo json_encode($age) . PHP_EOL;


//Decoding assoicative array

$jsonobj = '{"Peter":3.5,"Ben":37,"Joe":"man"}';

print_r(json_decode($jsonobj, true));

var_dump(json_decode($jsonobj, true));

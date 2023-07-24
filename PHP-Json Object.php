<?php
$cars = array("Audi", "BMW", "Toyota");

echo json_encode($cars);

//associative array
$age = array("Shafi" => 35, "Rita" => 37, "Nida" => 43);

echo json_encode($age) . PHP_EOL;


//Decoding assoicative array

$jsonobj = '{"Shafi":3.5,"Rita":37,"Nida":"woman"}';

print_r(json_decode($jsonobj, true));

var_dump(json_decode($jsonobj, true));


//Loop through the json
$jsonobj = '{"Shafi":35,"Rita":37,"siam":43}';

$obj = json_decode($jsonobj);

foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

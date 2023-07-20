<?php
$captials = array(
    "USA" => "Washington D.C",
    "Japan" => "Koyto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

//replacing elements of array
echo $captials["USA"] = "Las Vegas" . PHP_EOL;

echo array_pop($captials) . PHP_EOL;

foreach ($captials as $key => $value) {
    echo "{$key} = {$value}" . PHP_EOL;
}

//only key values
$keys = array_keys($captials);

foreach ($keys as $key) {
    echo "{$key}" . PHP_EOL;
}

//Flipping the assoicative array

$captials = array_flip($captials);

foreach ($captials as $key => $value) {
    echo "{$key} = {$value}" . PHP_EOL;
}

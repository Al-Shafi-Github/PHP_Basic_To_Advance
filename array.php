<?php

$foods =  array("apple", "Orange", "Pineapple", "Mango", "Cherry");

// $foods[0]= 'coconut';

// echo $foods[0].PHP_EOL;
array_push($foods, 'sugarcane', 'kiwi');

foreach ($foods as $food) {
    echo $food . PHP_EOL;
}

$popped_array = array_pop($foods);
echo $popped_array . PHP_EOL;

echo '----------------' . PHP_EOL;

foreach ($foods as $food) {
    echo $food . PHP_EOL;
}
echo '----------------' . PHP_EOL;

$shifted_array = array_shift($foods);
echo $shifted_array . PHP_EOL; //Shifted works like basically pop. 

echo '----------------' . PHP_EOL;
$reversed_foods = array_reverse($foods);

foreach ($reversed_foods as $food) {
    echo $food . PHP_EOL;
}

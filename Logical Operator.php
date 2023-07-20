<?php
    $temp =15;
    $cloudy = true;

    if($temp < 0 || $temp > 30){
        echo "The weather is bad". PHP_EOL;
    }
    else{
        echo "The weather is good". PHP_EOL;
    }

    if($cloudy){
        echo 'It is cloudy';
    }
    else{
        echo 'it is sunny';
    }
?>


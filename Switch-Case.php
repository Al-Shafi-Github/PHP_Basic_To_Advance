<?php
    $food= 'icecream';

    switch($food){
        case "pizza":
            echo "You orderd {$food}";
            break;
        case "Salad":
            echo "You ordered {$food}";
            break;
        case "Pasta":
            echo "You ordered {$food}";
            break;
        case "Ricebowl":
            echo "You ordered {$food}";
            break;
        case "Burger":
            echo "You ordered {$food}";
        default:
            echo "{$food} is not available";
            
    }
?>
<?php
function happy_birthday($first_name, $age)
{
    echo "Happy Birthday dear {$first_name}!" . PHP_EOL;
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday dear {$first_name}!" . PHP_EOL;
    echo "You are {$age} years old! <br><br>" . PHP_EOL;
}
happy_birthday("Spongebob", 30);
happy_birthday("Patrick", 35);
happy_birthday("Squidward", 45);

<?php

function exclamatory($str)
{
    return $str . "!";
}

function question($str)
{
    return $str . "?";
}


function printing($str, $format)
{
    echo  $format($str) . PHP_EOL;
}

printing("Hello world", "exclamatory");
printing("You there", "question");

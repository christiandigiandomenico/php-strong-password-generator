<?php

$numberGet = $_GET['passgenerator'];

function passwordGenerator($number)
{

    $passString = '';

    for ($i = 0; $i < $number; $i++) {

        $passString .= chr(rand(33, 126));
    };

    return $passString;
}

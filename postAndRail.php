<?php

$post = 11;
$rail = 10;

$postLength = 10;
$railLength = 20;

$x = 0;

function fenceLengthCalculator($postLength, $railLength, $post, $rail, $x)
{

    (($rail * $railLength) + ($post * $postLength));
    return $x;
};



var_dump(fenceLengthCalculator($rail, $railLength, $post, $postLength, $x));



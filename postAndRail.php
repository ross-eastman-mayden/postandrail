<?php

$post = 11;
$rail = 10;

$postLength = 10;
$railLength = 20;
$x = 0;

function fenceLengthCalculator($postLength, $railLength, $post, $rail)
{
    return (($rail * $railLength) + ($post * $postLength));
};


var_dump(fenceLengthCalculator($rail, $railLength, $post, $postLength, $x));



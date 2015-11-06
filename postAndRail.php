<?php

$post = 10;
$rail = 10;

$postWidth = 0.1;
$railLength = 1.5;
$x = 0;

function fenceLengthCalculator($postWidth, $railLength, $post, $rail)
{
    return (($rail * $railLength) + (($post + 1) * $postWidth));
};


var_dump(fenceLengthCalculator($rail, $railLength, $post, $postWidth, $x));


function postAndRailCalculator($fenceLength)
{
    return ;
};


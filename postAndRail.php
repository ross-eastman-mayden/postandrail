<?php
$rail = 1;
$post = $rail + 1;

$postWidth = 0.10;
$railLength = 1.5;

$fenceLength = 100;

$x = 0;

if ($rail >= 1) {
    function fenceLengthCalculator($postWidth, $railLength, $post, $rail)
    {

        return (($rail * $railLength) + ($post * $postWidth));
    }

    ;


    echo $fenceLength = fenceLengthCalculator($rail, $railLength, $post, $postWidth, $x);
} elseif ($rail == 0) {
    function railNumberCalculator($fenceLength, $postWidth, $railLength, $railNumber = 0)
    {
        return ($fenceLength - $postWidth) / ($postWidth + $railLength);
    }

    echo $railNumber = ceil(railNumberCalculator($fenceLength, $postWidth, $railLength));
    echo $postNumber = $railNumber + 1;
}
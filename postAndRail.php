<?php
$rail = 63;
$post = $rail + 1;

$postWidth = 0.10;
$railLength = 1.5;

$fenceLength = 0;

if ($rail >= 1) {
    function fenceLengthCalculator($postWidth, $railLength, $post, $rail)
    {

        return (($rail * $railLength) + ($post * $postWidth));
    }

    $maxFenceLength = fenceLengthCalculator($postWidth, $railLength, $post, $rail);
    echo $maxFenceLength;

} else {

    function railNumberCalculator($fenceLength, $postWidth, $railLength, $rail = 0)
    {
        return ($fenceLength - $postWidth) / ($postWidth + $railLength);
    }

    echo $maxRailNumber = ceil(railNumberCalculator($fenceLength, $postWidth, $railLength, $rail));
    echo $maxPostNumber = $maxRailNumber + 1;
}
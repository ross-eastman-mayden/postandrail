<?php
$rail = 4
;
$post = $rail + 1;

$postWidth = 0.10;
$railLength = 1.5;

$fenceLength = 0;

if ($rail >= 1) {
    /**
     * @param $postWidth
     * @param $railLength
     * @param $post
     * @param $rail
     *
     * @return mixed
     */
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

    echo $maxRailNumber = ceil(railNumberCalculator($fenceLength, $postWidth, $railLength, $rail)) . "</br>";
    echo $maxPostNumber = $maxRailNumber + 1  . "</br>";
}
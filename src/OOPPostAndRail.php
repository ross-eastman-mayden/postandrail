<?php
$railNumber = 0;
$post = $railNumber + 1;

$postWidth = 0.10;
$railLength = 1.5;

$fenceLength = 50;

class Fence {
    public $fenceLength;
    public $railNumber;
    public $postNumber;

    function fenceLengthCalculator($postWidth, $railLength, $post, $rail)
    {
        if($rail >= 1) {
            return (($rail * $railLength) + ($post * $postWidth));
        }
    }

$maxFenceLength = fenceLengthCalculator($postWidth, $railLength, $post, $rail);
echo $maxFenceLength;

} else {

    function railNumberCalculator($fenceLength, $postWidth, $railLength, $rail = 0)
    {
        return ($fenceLength - $postWidth) / ($postWidth + $railLength);
    }

    echo $maxRailNumber = ceil(railNumberCalculator($fenceLength, $postWidth, $railLength, $railNumber)) . "</br>";
    echo $maxPostNumber = $maxRailNumber + 1  . "</br>";
}


class Post {
    public $width = 0.1;
}

class Rail {
    public $length = 1.5;
}



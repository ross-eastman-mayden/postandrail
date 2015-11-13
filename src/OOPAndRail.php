<?php
class AFence {
    public $length;
    public $numberOfRails;
    public $numberOfPosts;
    public $lengthOfRails;
    public $widthOfPosts;

    public function __construct($length)
    {
        $this->length = $length;
    }

}

$fenceLength = new AFence($length);
<?php

include_once '../OOPPostAndRail.php';

class AFenceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param $length        ;
     * @param $numberOfRails ;
     * @param $numberOfPosts ;
     * @param $lengthOfRails ;
     * @param $widthOfPosts  ;
     *
     * @dataProvider fenceTestArray
     */

    public function test_fenceLength($length)
    {
        $this->assertEquals($length, $fenceLength($length));
    }

    public static function fenceTestArray()
    {
        $tests = [
            [1],
            [2],
            [3],
            [5],
            [20],
            [110],
        ];

        return $tests;
    }
}


<?php

/**
 * Created by PhpStorm.
 * User: rosseastman
 * Date: 09/11/2015
 * Time: 17:03
 */

require_once 'OOPPostAndRail.php';

class FenceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param $postWidth
     * @param $railLength
     * @param $post
     * @param $rail
     * @param $fenceLength
     *
     * @dataProvider dataProvider
     */
    public function testCalcLength($postWidth, $railLength, $post, $rail, $fenceLength)
    {
        $fence = new Fence();
        $this->assertEquals($fenceLength, $fence->fenceLengthCalculator($railLength, $postWidth, $rail, $post));
    }

    public static function dataProvider()
    {
        $lengthTests = [
            [0.1, 1.5, 2, 1, 1.7],
            [0.1, 1.5, 3, 2, 3.3],
            [0.1, 1.5, 5, 1, 1.7],
            [0.1, 1.5, 5, 2, 1.7],
            [0.1, 1.5, 3, 0, 0],
            [0.1, 1.5, 0, 3, 0],
            [0.1, 1.5, 3, -1, 0],
            [0.1, 1.5, 1, 1, 0],
            [0.1, 1.5, 'epf', 0, 0],
            [0.1, 1.5, 0, 'fer', 0],
            [0.1, 1.5, 3.5, 2.34, 0],
            [0.1, 1.5, 63, 64, 100],
        ];
            return $lengthTests;
    }

}

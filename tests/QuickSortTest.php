<?php

use Lvyun\Sort\QuickSort;

require 'bootstrap.php';

class QuickSortTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider toBeSortArray
     */
    public function testSort(array $srcArr, array $expected)
    {
        $quick = new QuickSort();
        $new = $quick->sort($srcArr);
        $this->assertEquals($expected, $new);
    }

    public function toBeSortArray()
    {
        return [
            'arr1' => [
                [7, 1, 6, 3, 2, 4, 9, 5, 8],
                [1, 2, 3, 4, 5, 6, 7, 8, 9],
            ],
            'arr2' => [
                [7, 1, 6, 3, 2, 4, 5, 8],
                [1, 2, 3, 4, 5, 6, 7, 8],
            ],
        ];
    }
}

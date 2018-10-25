<?php

include __DIR__ . '/bootstrap.php';

class SorterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider assertArray
     */
    public function testQuickSort($src, $expect)
    {
        static::assertEquals($expect, quick_sort($src));
    }

    /**
     * @dataProvider assertArray
     */
    public function testBucketSort($src, $expect)
    {
        static::assertEquals($expect, bucket_sort($src));
    }

    /**
     * @dataProvider assertArray
     */
    public function testCountingSort($src, $expect)
    {
        self::assertEquals($expect, counting_sort($src));
    }

    /**
     * @dataProvider assertArray
     */
    public function testBubbleSort($src, $expect)
    {
        self::assertEquals($expect, bubble_sort($src));
    }

    /**
     * @dataProvider assertArray
     */
    public function testInsertSort($src, $expect)
    {
        self::assertEquals($expect, insert_sort($src));
    }

    /**
     * @dataProvider assertArray
     */
    public function testSelectionSort($src, $expect)
    {
        self::assertEquals($expect, selection_sort($src));
    }

    public function assertArray()
    {
        $arr = $this->random(10);
        return [
            [
                [7, 1, 4, 2, 2, 6],
                [1, 2, 2, 4, 6, 7],
            ],
            [
                $arr,
                merge_sort($arr),
            ],
        ];
    }

    public function random($c = 10000)
    {
        $arr = [];
        for ($i = 0; $i < $c; $i++) {
            $arr[] = rand(0, $c);
        }
        return $arr;
    }
}

<?php

namespace Lvyun\Sort;

class QuickSort
{
    public function sort(array $arr)
    {
        if (!isset($arr[1])) {
            return $arr;
        }
        $first = $arr[0];
        $leftArr = [];
        $rightArr = [];

        foreach ($arr as $value) {
            if ($value > $first) {
                $rightArr[] = $value;
            } elseif ($value < $first) {
                $leftArr[] = $value;
            }
        }

        $leftArr = $this->sort($leftArr);
        $rightArr = $this->sort($rightArr);
        $leftArr = array_merge($leftArr, [$first]);

        return array_merge($leftArr, $rightArr);
    }
}
<?php

namespace Lvyun\Sort;

function mergeSort(array $arr)
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    if ($len = 2) {
        return [$arr[0], $arr[1]];
    }
    $mid = floor($len / 2);
    $arr = array_merge(mergeSort(array_slice($arr, 0, $mid)), mergeSort(array_slice($arr, $mid + 1)));

    $tmp = [];
    $left = 0;
    $right = $mid + 1;
    for ($i = 0; $i < $mid + 1; $i++) {
        if ($left == $mid) {
            $tmp = array_merge($tmp, array_slice($arr, $right));
        }
        if ($right == $mid + 1) {
            $tmp = array_merge($tmp, array_slice($arr, $left, $mid - $left));
        }

        if ($arr[$i] < $arr[$mid + 1 + $i]) {
            $tmp[] = $arr[$i];
            $left++;
        } else {
            $tmp[] = $arr[$mid + 1 + $i];
            $right++;
        }
    }
    $arr = $tmp;

    return $arr;
}

<?php

namespace Lvyun\Sort;

/**
 * -----------------------------------
 * 快速排序
 * 排序思想：选择一个中间元素，将数组中小于中间元素的值放到元素的左边，将大于元素值的放在右边，然后递归对左右数组进行快速排序
 * -----------------------------------
 */
function quickSort(array $arr)
{
    $first = $arr[0];
    $left = [];
    $right = [];
    $len = count($arr);

    if ($len <= 1) {
        return $arr;
    }
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $first) {
            $left[] = $arr[$i];
        } elseif ($arr[$i] > $first) {
            $right[] = $arr[$i];
        }
    }
    $left = quickSort(array_merge($left, [$first]));
    $right = quickSort($right);


    return array_merge($left, $right);
}

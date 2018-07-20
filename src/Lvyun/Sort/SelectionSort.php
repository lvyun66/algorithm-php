<?php

namespace Lvyun\Sort;

/**
 * --------------------------------------
 * 选择排序
 * 排序思想：重复遍历数组，每次选择最小（大）的值放在已排序数组的末尾
 * --------------------------------------
 */
function selectionSort(array $arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }

    return $arr;
}
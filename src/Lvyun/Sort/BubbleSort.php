<?php

namespace Lvyun\Sort;

/**
 * -------------------------
 *
 * 冒泡排序
 * 排序思想：重复遍历要排序的数组，比较两个元素的大小，如果顺序错误，交换两个元素的位置
 *
 * -------------------------
 */
function bubbleSort(array $arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = $i; $i < $len; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }

    return $arr;
}
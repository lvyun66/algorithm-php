<?php

namespace Lvyun\Sort;

/**
 * -----------------------------
 *
 * 插入排序
 * 排序思想：将一个元素插入到已排序数组的合适位置
 *
 * -----------------------------
 */
function insertSort(array $arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $preIndex = $i - 1;
        $current = $arr[$i];
        while ($preIndex >= 0 && $arr[$preIndex] > $current) {
            $arr[$preIndex + 1] = $arr[$preIndex];
            $preIndex--;
        }
        $arr[$preIndex + 1] = $current;
    }
    return $arr;
}

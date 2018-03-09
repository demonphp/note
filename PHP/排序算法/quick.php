<?php
/**
 * 快速排序
 * @param $data
 * @return array
 */
function quick_sort($data)
{
    $size = count($data);
    if ($size <= 1) {
        return $data;
    }
    $key      = $data[0];
    $left_arr = $right_arr = [];
    for ($i = 1; $i < $size; $i++) {
        if ($key > $data[$i]) {
            $left_arr[] = $data[$i];
        } else {
            $right_arr[] = $data[$i];
        }
    }
    $left_arr  = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr, [$key], $right_arr);
}


$data = [3, 2, 5, 8, 7, 18, 13, 1, 6];

var_dump(quick_sort($data));
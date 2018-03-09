<?php
/**
 * 冒泡排序
 * @param $data
 * @return mixed
 */
function bubble_sort($data)
{
    $size = count($data);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - $i - 1; $j++) {
            if ($data[$j] > $data[$j + 1]) {
                list($data[$j], $data[$j + 1]) = [$data[$j + 1], $data[$j]];
            }
        }
    }
    return $data;
}

$data = [3, 2, 5, 8, 7, 18, 13, 1, 6];

var_dump(bubble_sort($data));
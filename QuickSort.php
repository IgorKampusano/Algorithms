<?php

$array = [5, -3, 234, 2, 34, 5465, -32];
echo "Исходный массив ";
print_r($array);
function quickSort($arr) {
    // в качестве опорного элемента выбираем 2
    $mainElement = $arr[3];
    // массив элементов, меньших опорного
    $leftArr = [];
    // массив элементов, больших опорного
    $rightArr = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $mainElement) {
            array_push($leftArr, $arr[$i]);
        }
        elseif ($arr[$i] > $mainElement) {
            array_push($rightArr, $arr[$i]);
        }
    }

    sort($leftArr);
    sort($rightArr);

    array_push($leftArr, $mainElement);
    $sortArray = array_merge($leftArr, $rightArr);
    echo "Отсортированный массив ";
    print_r($sortArray);
}

quickSort($array);

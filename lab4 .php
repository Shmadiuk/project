<?php

$x = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
$y = [1, 10, 9, 7, 8, 5, 6, 4, 3, 2];

$array1 = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
$array2 = [1, 10, 9, 7, 8, 5, 6, 4, 3, 2];

$array3 = [];
for ($i = 0; $i < sizeof($array1); $i++)
{
    $test = $array1[$i] - $array2[$i];
    $array3[] = $test*$test;
}
var_dump($array3);

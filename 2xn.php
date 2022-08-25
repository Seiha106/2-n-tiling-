<?php
$input = "9";

$array = array();

array_push($array, 0, 1, 2);

$i = "3";
while($i <= $input){
    $array[$i] = $array[$i - 1] + $array[$i - 2];
    $i++;
}
echo "총 ".$i."번 반복함 \n";
echo "출력값 : ".$array[$input]."";
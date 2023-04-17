<?php

$number = 1;
$check = $number > 0;

// Cấu trúc if
if ($check) { // if($check==true)
    echo $number . ' là số nguyên dương';
}
echo '<br/>';
echo '<br/>';

// Cấu trúc if-else
$number = 1;
if($number>0){
    echo $number . ' là số nguyên dương';
} else {
    echo $number . ' không phải số nguyên dương';
}
echo '<br/>';
echo '<br/>';

// Cấu trúc if-else kết hợp
/**
 * Nếu < 0 => Số âm
 * Nếu = 0 => Số không
 * Nếu > 0 và <=5 => Số nhỏ
 * Nếu >5 và <=10 => Số trung bình
 * Nếu >10 và <=15 => Số lớn
 * Nếu >15 => Số cực lớn 
 */
$number = 16;
if($number<0){
    echo $number.' là số âm';
} elseif ($number==0) { //Lưu ý dấu ==
    echo $number.' là số không';
} elseif ($number>0 && $number<=5) {
    echo $number.' là số nhỏ';
} elseif ($number>5 && $number<=10) {
    echo $number.' là số trung bình';
} elseif ($number>10 && $number<=15) {
    echo $number.' là số lớn';
} else {
    echo $number.' là số cực lớn';
}
echo '<br/>';
echo '<br/>';

// Cấu trúc if-else lồng nhau
$number = 4;
if($number>0){
    if($number>=5){
        echo 'Thoả mãn điều kiện';
    } else {
        echo 'Không thoả mãn điều kiện';
    }
} else {
    echo 'Không thoả mãn điều kiện';
}


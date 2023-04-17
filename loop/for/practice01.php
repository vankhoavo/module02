<?php

/**
 * 1. Hiển thị số chẵn, số lẻ trong dãy số từ: 1 2 4 5 ... 100
 */

use function Termwind\style;

$startIndex = 1;
$endIndex = 1;

$resultEven = null; //Số chẵn
$resultOdd = null; //Số lẻ

$evenCount= 0; //Đếm số chẵn
$oddCount = 0; //Đếm số lẻ

for ($i=$startIndex; $i <= $endIndex; $i++) { 
    if($i % 2 == 0)
    {
        // echo $i . ' là số chẵn'.'<br/>';
        $resultEven.= $i.' ';
        $evenCount++;
    } else {
        // echo $i . ' là số lẻ'.'<br/>';
        $resultOdd.=$i.' ';
        $oddCount++;
    }
}

if($evenCount>0)
{
    echo 'Đã tìm thấy '. $evenCount .' số chẵn: '.$resultEven.'<br/>';
}   else {
    echo 'Không tìm thấy số chẵn <br/>';
}

if($oddCount>0)
{
    echo 'Đã tìm thấy '. $oddCount .' số lẻ: '.$resultOdd.'<br/>';
} else {
    echo 'Không tìm thấy số lẻ <br/>';
}


/**
 * 2. Tính giai thừa của 1 số và hiển thị kết quả
 * Input: Nhập vào số N
 * Output: Hiện thị kết quả giai thừa
 * 
 * Công thức: N! = 1*2*3*...*N (N>0)
 */

$n = 0;
if ($n > 0) {
    //Xử lí tính giai thừa
    $gt = 1; //Chúng ta phải giả định và cho chỉ số ban đầu (để phòng ngừa trường hợp bằng 0)
    for ($i=1; $i <= $n; $i++) { 
        $gt*=$i;
    }
    echo $n.'! = '.$gt.'<br/>';
} else {
    echo $n.' không hợp lệ <br/>';
}
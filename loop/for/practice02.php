<?php

/**
 * 3. Kiểm tra một số có phải là số nguyên tố hay không và hiển thị kết quả
 * Input: Số nguyên N
 * Output: Thông báo số N có phải số nguyên tố hay không?
 * 
 * Số nguyên tố:
 * - Lớn hơn 1
 * - Chỉ chia hết cho 1 và chính nó
 * 
 * Giải thuật:
 * - Kiểm tra số N xem có hơn 1 hay không?
 * - Nếu số N lớn hơn 1 thì sẽ làm:
 * + Dùng vòng lặp chạy từ 2 đến N-1
 * + Kiểm tra trong phạm vi từ 2 đến N-1 có chia hết cho số nào không?
 * + Nếu có chia hết => Kết luận không phải là số nguyên tố
 * + Nếu không chia hết => Kết luận là số nguyên tố
 * 
 * - Nếu số N nhỏ hơn hoặc bằng 1 => Thông báo không phải số nguyên tố
 */

$n = 1; //Số cần kiểm tra
if ($n > 1) {
    $check = true; //Gắn cờ kiểm tra số nguyên tố (giả định N là số nguyên tố)
    for ($i=2; $i<$n ; $i++) {
        if ($n % $i == 0) {
            $check = false;
        }
    }
    if($check) { //if($check==true) ghi như thế này mặc định nó là true
        echo $n.' là số nguyên tố';
    } else {
        echo $n.' không phải là số nguyên tố';
    }
} else {
    echo $n.' không phải là số nguyên tố <br/>';
}

echo '<br/>';

/**
 * 4. In bảng cửu chương
 */
?>
<table border="1" width="100%">
    <tr>
        <?php
        for ($i = 1; $i < 6; $i++) {
            echo '<td>';
            for ($j = 1; $j < 11; $j++) {
                echo $i.' x '.$j.' = '.$i*$j.'<br/>';
            }
            echo '</td>';
        }
        ?>
    </tr>
    <tr>
        <?php
        for ($i = 6; $i < 11; $i++) {
            echo '<td>';
            for ($j = 1; $j < 11; $j++) {
                echo $i.' x '.$j.' = '.$i*$j.'<br/>';
            }
            echo '</td>';
        }
        ?>
    </tr>
</table>

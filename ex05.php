<?php
/* Biểu thức - Toán tử */
$a = 1;
$b = 2;
$total = $a+$b+10;  // $total = $a+$b+10: Biểu thức
// $a, $b, 10, $total: Toán hạng
// +, =: Toán tử
echo $total;
echo '<br/>';
echo '<br/>';

/* Toán tử gán 
- Toán tử =
*/
$age = 30; // Cú pháp: $ten_bien = gia_tri;
const _WEB_HOST_ROOT = 'https://google.com'; // ten_hang = gia_tri; đối với hằng số thì chúng ta phải từ khoá ở phía trước _const
echo $age;
echo '<br/>';
echo _WEB_HOST_ROOT;
echo '<br/>';


// - Toán tử .=
$outputStr = 'Học lập trình';
// $outputStr = $outputStr.' PHP tại Unicode';
$outputStr.=' PHP tại Unicode';
$outputStr.=' miễn phí';
echo '<br/>';
echo $outputStr;
echo '<br/>';
echo '<br/>';

// Toán tử số học
// - Toán tử cộng (+)
$a = 10;
$b = 20;
$total = $a+$b;
echo $total;
echo '<br/>';

// - Toán tử trù (-)
$a = 20;
$b = 10;
$result = $a - $b;
echo $result;
echo '<br/>';

// - Toán tử nhân (*)
$a = 10;
$b = 20;
$result = $a*$b;
echo $result;
echo '<br/>';

// - Toán tử chia (/)
$a = 20;
$b = 10;
$result = $a/$b;
echo $result;
echo '<br/>';

// Toán tử chia lấy phần dư (%)
$a = 10;
$b = 7;
$result = $a%$b;
echo $result;
echo '<br/>';

// Toán tử luỹ thừa (**)
$a = 2; //Cơ số
$b = 10; //Số mũ
$result = $a**$b;
echo $result;
echo '<br/>';

// Toán tử tăng 1 đơn vị (++)
$count = 0;
// $count = $count+1;
$count++;
++$count;
echo $count;
echo '<br/>';

$count = 0;
// $result = $count++; // $result = $count; $count = $count + 1;
$result = ++$count; // $count = $count + 1; $result = $count;
echo 'Count: '. $count .'<br/>';
echo 'Result: '. $result .'<br/>';
echo '<br/>';
echo '<br/>';

// Toán tử giảm 1 đơn vị (--)
$count = 1;
// $count = $count - 1;
// $count--;
--$count;
echo $count;
echo '<br/>';


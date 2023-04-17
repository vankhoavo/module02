<?php
//1. Kiểu số nguyên (Int)
//Khai báo
$age = 30;
var_dump($age);
echo '<br/>';

//Ép kiểu
$age = (int)$age;
var_dump($age);
echo '<br/>';

//Kiểm tra kiểu số nguyên có 2 cách: is_int và is_integer
// $check = is_int($age);
$check = is_integer($age);
var_dump($check);
echo '<br/>';
echo '<br/>';

//2. Kiểu boolean (Logic)
//0, trống, null: tất cả sẽ trả về hết là false, ngược lại
$check = 0;
$check = (bool)$check;
// $checkBool = is_bool($check);
var_dump($check);
echo '<br/>';
echo '<br/>';

//3. Kiểu số thực (float)
$fee = 10.5;
$fee = (float)$fee;
var_dump($fee);
echo '<br/>';
var_dump(is_float($fee));
echo '<br/>';
echo '<br/>';

//4.Kiểu dữ liệu chuỗi (string)
$message = 10;
$message = (string)$message;
$checkString = is_string($message);
var_dump($message);
echo '<br/>';
var_dump($checkString);
echo '<br/>';
echo '<br/>';

//5.Kiểu dữ liệu mảng (array)
$carArr = [];
$carArr = (array)$carArr;
$checkArray = is_array($carArr);
var_dump($carArr);
echo '<br/>';
var_dump($checkArray);
echo '<br/>';
echo '<br/>';

//6. Kiểu dữ liệu NULL (rỗng)
$total = null;
$total = (int)$total;
// $total = (array)$total;
$checkNull = is_null($total);
var_dump($total);
echo '<br/>';
var_dump($checkNull);
echo '<br/>';
echo '<br/>';

//7. Kiểu dữ liệu Resource
// $curl = curl_init();
// $checkType = get_resource_type($curl);
// var_dump($curl);
// echo '<br/>';
// var_dump($checkType);


//8. Kiểu đối tượng (Object)
$dataCustomer = [
    'Võ Văn Khoa'
];
$dataCustomer = (object)$dataCustomer; //Ép kiểu
$checkObject = is_object($dataCustomer);
var_dump($dataCustomer);
echo '<br/>';
var_dump($checkObject);
echo '<br/>';
echo '<br/>';

$customerObject = new stdClass();
$customerObject->age=30;
var_dump($customerObject);
echo '<br/>';
echo '<br/>';


/*
Phân biệt empty và null
*/

$message1 = null; //Rỗng
$message2 = ''; //Trống, thực tế là nó thuộc kiểu string
var_dump($message1);
echo '<br/>';
var_dump($message2);


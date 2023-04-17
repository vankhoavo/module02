<?php

define('_WEB_HOST_ROOT', 'http://ap.greenwich.com');
echo _WEB_HOST_ROOT;
echo '<br/>';

const _WEB_PATH_ROOT = 'C:/xampp/htdocs';
echo _WEB_PATH_ROOT;
echo '<br/>';

$checkDefine = defined('_WEB_HOST_ROOT'); //hàm define kiểm tra hằng số, nếu có tồn tại hằng số này nó sẽ trả về true.
var_dump($checkDefine);



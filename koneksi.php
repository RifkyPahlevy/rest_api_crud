<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'levy_crud');

$connect = mysqli_connect(HOST, USER, PASS, DB) or die('Unable Connect');

header('Content-type: application/json'); //agaar selalu berbentuk json saat baca file

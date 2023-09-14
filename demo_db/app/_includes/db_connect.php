<?php


$host = "localhost:3306";
$db = "yuexia63_demo_db1";
$user = "yuexia63";
$pass = "";

$link = mysqli_connect($host, $user, $pass, $db);
$db_response = [];
$db_response['success'] = 'not set';

if (!$link) {
    $db_response['success'] = false;
} else {
    $db_response['success'] = true;
}

?>
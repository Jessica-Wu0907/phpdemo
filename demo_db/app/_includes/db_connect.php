<?php


  $host = 'localhost'; // Change to your database host
    $user = 'root'; // Change to your database username
    $password = ''; // Change to your database password
    $database = 'wei583'; // Change to your database name

$link = mysqli_connect($host, $user, $password, $database);

$db_response = [];
$db_response['success'] = 'not set';

if (!$link) {
    $db_response['success'] = false;
} else {
    $db_response['success'] = true;
}

?>
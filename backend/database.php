<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test';

$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn){
    echo '<script>alert("database error")</script>';
}
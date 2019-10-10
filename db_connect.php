<?php
// skapa sql
$user = 'root';
$password = 'root';
$db = 'users_table';
$host = 'localhost';

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db
);
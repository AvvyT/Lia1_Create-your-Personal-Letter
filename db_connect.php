<?php
session_start();
// skapa sql/**-- Authenticating Users--**/
$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'users_table';

// Create connection
$success = new mysqli(
    $host,
    $user,
    $password,
    $db
);

// Check connection
if ($success->connect_error)
{
    die("Connection failed: " . $success->connect_error);
}
//if ($success) echo 'Connected to the database';







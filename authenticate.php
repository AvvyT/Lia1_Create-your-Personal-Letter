<?php
include "user_name.php";
include "db_connect.php";
$success;
session_start();

// auto login
if ($_SESSION['login'] == TRUE){
    header('Location: inlogad_form.php');
    exit();
}

// preparing the SQL statement will prevent SQL injection.
// use the BINARY type to force case sensitivity
if ($stmt =$success->prepare("SELECT userId FROM users_table WHERE BINARY username=?")){
    // Bind parameters:(s = string, i = int, b = blob, etc),
    // in our case the username is a string so we use "s"
$stmt->bind_param('s', $fullName);
$stmt->execute();
    // Store the result so we can check if the account exists in the database.
$stmt->store_result();
}
var_dump('här'. $fullName);

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id);
    // Account exists, now we verify the username.
    $stmt->fetch();

    if ($_POST['fname'] . ' ' . $_POST['lname'] == $fullName) {
        // Verification success! User has login!
        session_regenerate_id();
        $_SESSION['login'] = TRUE;
        $_SESSION['name'] = $fullName;
        $_SESSION['id'] = $id;
        var_dump($_SESSION['name']);
        header('Location: inlogad_form.php');
    }else{
        echo 'fel username';
        $_SESSION['error'] = 'Incorrect username!';
    }
}else{
    header('Location: login_form.php');
    $_SESSION['login'] = FALSE;
}

$stmt->close();




<?php
include "db_connect.php";
$success;

// To use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['login']) || $_SESSION['login'] == false){
    // If the user is not logged in redirect to the login page...
    header('Location: login_form.php');
}

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $success->prepare("SELECT  useremail FROM users_table WHERE userId = ?");
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="css/inlogad_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<div>
    <nav class="navtop">
        <div class="style">
            <h1 style='color: aqua'>Ditt Personliga brev</h1>
            <a href="inlogad_form.php"><i class="fas fa-backward"></i> Back</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
</div>
<main>
    <h2>Profile Page</h2>
    <p>Your account details</p>
    <div>Username <h2 style='color: aqua'><?=$_SESSION['name']?></h2></div>
    <div>Email <h3 style='color: aqua'><?=$email?></h3></div>
</main>
</body>
</html>


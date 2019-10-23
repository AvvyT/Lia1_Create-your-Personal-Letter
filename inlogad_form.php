<!-- user-page-2 -->

<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] == false){
    // If the user is not logged in redirect to the login page...
    header('Location: login_form.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logged Page</title>
    <link rel="stylesheet" type="text/css" href="css/inlogad_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<nav class="navtop">
    <div class="style">
        <h1 style='color: aqua'>Ditt Personliga brev</h1>
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</nav>
<div class="login">
<h2>Welcome back, <?php echo $_SESSION['name'] ?>!</h2>
<button class="btn"><a href="inlogad_view_form.php?user=<?php echo $_SESSION['name']?>">My document</a></button>
</div>
</body>
</html>



<!-- user-page-2 -->

<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] == false){
    // If the user is not logged in redirect to the login page...
    header('Location: login_form.php');
}
?>
<div>
<nav class="navtop">
    <div class="style">
        <h1 style='color: aqua'>Ditt Personliga brev</h1>
        <a href="logout.php">Logout</a>
    </div>
</nav>
<div class="login">
<h2>Welcome back, <?php echo $_SESSION['name'] ?>!</h2>
<button class="btn"><a href="inlogad_view_form.php?user=<?php echo $_SESSION['name']?>">My document</a></button>
</div>
</div>

<?php
include "css/inlogad_style.php";


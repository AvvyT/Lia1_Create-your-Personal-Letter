<!-- user-page-1 -->
<h1 style='color: aqua'>Ditt Personliga brev</h1>

<h2 style="margin-bottom: 30%">Login or <a href="register_form.php">Register</a></h2><br/>
<form class="pb-form" method="post" action="authenticate.php">
    <label for="fname">
        <i class="fas fa-user"></i>
    </label>
    <input type="text" class="write" placeholder=" your first name.." name="fname" required>
    <br><br/>
    <label for="lname">
        <i class="fas fa-user"></i>
    </label>
    <input type="text" class="write"  placeholder=" your last name.." name="lname" required>
    <br><br/>
    <input type="reset" name="reset" value="Reset" class="btn">
    <input type="submit" class="btn" value="Login">
</form>
<h2 style="color: red"><?php
    if ($_SESSION['login'] === FALSE) echo $_SESSION['error']?></h2>
<footer>
    <p>
        Created with PhpStorm by R.Todorova 9/10/19
    </p>
</footer>

<?php
include "css/login_style.php";



<!-- register-page-1 -->

<h2 style="margin-bottom: 30%">Register</h2>
<form class="pb-form" method="post" action="complete_form.php">
    First Name <input type="text" class="write" placeholder=" Full name.." name="fname" required>
    <br><br/>
    Last Name <input type="text" class="write" name="lname" required>
    <br><br/>
    <input type="reset" name="reset" value="Reset" class="btn">
    <input type="submit" name="create" class="btn" value="Register">
</form>

<footer>
    <p>
         Created with PhpStorm by R.Todorova 9/10/19
    </p>
</footer>

<?php
include "css/register_style.php";


<!-- register-page-1 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Users-view Page</title>
    <link rel="stylesheet" type="text/css" href="css/register_style.css">
</head>
<body>
<h2 style="margin-bottom: 30%">Register or <a href="login_form.php">Login</a></h2><br/>
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
</body>
</html>




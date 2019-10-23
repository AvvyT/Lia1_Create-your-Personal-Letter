<!--you can destroy the sessions that we created-->
<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: login_form.php');
?>
<?php

    if (isset($_POST['fname']) && isset($_POST['lname']) ) {
        // echo 'User submitted';
        $username = $_POST['fname'];
        $lastname = $_POST['lname'];

        //echo $username;
        //header("Location: index.php?uploadedsucess"); =>då man bytter inte sidan
        $fullName = $username . " ". $lastname;
    }



<?php

    if (isset($_POST['create'])) {
        // echo 'User submitted';
        $username = $_REQUEST['fname'];
        $lastname = $_REQUEST['lname'];

        //echo $username;
        //header("Location: index.php?uploadedsucess"); =>då man bytter inte sidan
        $fullName = $username . " ". $lastname;
    }



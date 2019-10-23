<!--register-page-3 -->
<?php
 include "db_connect.php";
  $success;

  //register users
if (isset($_POST['complete'])){
    // echo 'User completed';
    $id = $_POST['id'];
    $username = $_POST['username'];
    $color = $_POST['favcolor'];
    $txtcolor = $_POST['txtcolor'];
    $pnum = $_POST['pnumber'];
    $adress = $_POST['adress'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $body = $_POST['text'];
}

$sql = "INSERT INTO users_table ( username, userdigits, useradress, userphone, useremail, userbody, userpagescolor) 
VALUES ( '$username', '$pnum', '$adress', '$tel', '$email', '$body', '$color')";
//var_dump($sql);

if (mysqli_query($success, $sql) === TRUE)
{
   //echo "data saved";
    $saved='Document saved!';
} else {
   echo "\n"."Error: " . $sql . "<br>" . mysqli_error($success);
}

mysqli_close($success);
//$image = isset($_GET['image']) ? $_GET['image'] : FALSE;

if (isset($_POST['upload'])){
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_store = "upload/" .$file_name;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Created Page</title>
    <link rel="stylesheet" type="text/css" href="css/created_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<div class="pb_klart" style="background-color: <?php echo $color?>; color: <?php echo $txtcolor?>">
    <form method="post" action="db_connect.php" enctype="multipart/form-data">
        <nav class="navtop">
            <div class="style">
                <h2>Personligt brev</h2>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
        <p><?php echo $saved?></p>
        <div class="info-left">
            <h3><?php echo $username?></h3>
            <p>Personnummer: <?php echo $pnum?></p>
            <p>Adress: <?php echo $adress?></p>
            <p>Tel: <?php echo $tel?></p>
            <p>E-mail: <?php echo $email?></p>
            <div class="img_upload">
                <div><input type="file" name="file"/><input type="submit" name="upload"/></div>
            </div>
        </div><br />
            <div class="txt_body">
                <p><?php echo $body?></p>
            </div><br /><br />
            <footer class="style_footer">
                <p>Med vänliga hälsningar,</p><br />
                <h3><?php echo $username?></h3>
                <br />
            </footer>
    </form>
</div>
</body>
</html>

<?php

   $folder = "upload/";
   if (is_dir($folder)){
       while (($file = readdir($open)) != false){
           if ($file == '.' || $file =='..') continue;
           echo '<img src="upload/'.$file.'" width = "180" height = 150 >';
       }
       closedir($open);
   }



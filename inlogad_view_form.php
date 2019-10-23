<!-- user-page-3 -->
<?php
include "user_name.php";
include "db_connect.php";
$success;

//var_dump($_GET);
//print_r($_GET['user']);
$userName = $_GET['user'];
$query="SELECT * FROM users_table WHERE username = '". $userName . "'";

//**-- Get data --**//
$result = $success->query($query);
//var_dump($result);
if ($result > 0){
    while ($rows=mysqli_fetch_assoc($result))
    {
?>
        <!DOCTYPE html>
        <html>
    <head>
        <meta charset="utf-8">
        <title>Users-view Page</title>
        <link rel="stylesheet" type="text/css" href="css/created_style.css">
    </head>
    <body>
    <div class="pb_klart" value="<?php echo $rows['userId'];?>" style="background-color: <?php echo $rows['userpagescolor'];?>">
        <nav class="navtop">
            <div class="style">
                <h2>Personligt brev</h2>
                <a href="inlogad_edit_form.php?user=<?php echo $rows['username'];?>">Edit</a>
                <a href="inlogad_form.php"><i class="fas fa-backward"></i> Back</a>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>

    <div class="info-left">
            <h3><?php echo $rows['username'];?></h3>
            <p>Personnummer: <?php echo $rows['userdigits'];?></p>
            <p>Adress: <?php echo $rows['useradress'];?></p>
            <p>Tel: <?php echo $rows['userphone'];?></p>
            <p>E-mail: <?php echo $rows['useremail'];?></p>
            <div class="img_upload">
                <div><input type="file" name="file"/><input type="submit" name="upload"/></div>
            </div>
    </div><br />
        <div class="txt_body">
            <p><?php echo $rows['userbody'];?></p>
        </div><br /><br />
        <footer class="style_footer">
            <p>Med vänliga hälsningar,</p><br />
            <h3><?php echo $rows['username'];?></h3>
            <br />
        </footer>
    </div>
    </body>
    </html>

        <?php
     }
    }








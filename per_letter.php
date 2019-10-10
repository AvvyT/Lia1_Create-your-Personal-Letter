<!-- page-3 -->
<?php

if (isset($_POST['complete'])){
    // echo 'User completed';
   $color = $_POST['favcolor'];
    $pnum = $_POST['pnumber'];
    $adress = $_POST['adress'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $body = $_POST['text'];
}
//$image = isset($_GET['image']) ? $_GET['image'] : FALSE;
include "user_name.php";

if (isset($_POST['upload'])){
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_store = "upload/" .$file_name;

    $sql = "INSERT INTO users_table (usersId, usersimgname, usersimgtype) 
            VALUES (NULL, '$file_name', '$file_type' )";
    $result = $sucess->query($sql) or die(mysqli_error($sucess));
}
echo "style.php";
?>

<div class="pb_klart" style="background-color: <?php echo $color?>">
    <form method="post" action="complete_form.php" enctype="multipart/form-data">
    <h2>Personligt brev</h2><br />
    <div class="info-left">
        <h3><?php echo $fullName?></h3>
        <p>Personnummer: <?php echo $pnum?></p>
        <p>Adress: <?php echo $adress?></p>
        <p>Tel: <?php echo $tel?></p>
        <p>E-mail: <?php echo $email?></p>
    </div>
    <div class="img_right">
        <div style="width: 30px"><input type="file" name="file"/><input
            type="submit" name="upload"/>
        </div>
    </div>
    <div class="txt_body">
        <p><?php echo $body?></p>
    </div><br /><br />
    <footer class="style_footer">
        <p>Med vänliga hälsningar,</p><br />
        <h3><?php echo $getName?></h3>
    </footer>
    </form>
</div>

<?php
   $folder = "upload/";
   if (is_dir($folder)){
       while (($file = readdir($open)) != false){
           if ($file == '.' || $file =='..') continue;
           echo '<img src="upload/'.$file.'" width = "180" height = 150 >';
       }
       closedir($open);
   }
?>
<!-- page-3 -->
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
   echo "data saved";
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

<div class="pb_klart" style="background-color: <?php echo $color?>; color: <?php echo $txtcolor?>">
    <form method="post" action="db_connect.php" enctype="multipart/form-data">
        <h2>Personligt brev</h2>
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

<?php
   $folder = "upload/";
   if (is_dir($folder)){
       while (($file = readdir($open)) != false){
           if ($file == '.' || $file =='..') continue;
           echo '<img src="upload/'.$file.'" width = "180" height = 150 >';
       }
       closedir($open);
   }

   echo "<style>
     body, html{
        box-sizing: border-box;
        margin: 0 ;
        text-align: center;
        font-family: 'Indie Flower', cursive;
        font-size: calc(10px + 1.5vmin);
        }
      .info-left{
        font-weight: bold;
        text-align: start;
        padding: 35px;
        }
        .pb_klart{
         padding-top: 10px;
         padding-left: 10px;
         min-height: 100vh;
        }
        .style_footer{
        float: bottom;
        }
        .txt_body{
        width: 450px;
        text-align: center;
        margin-left: 30%;
        }
        <style/>"
?>
<!-- page-2 -->
<?php
    include "user_name.php";
    include "db_connect.php";
    $success;

    // use the * character to select ALL columns from a table:
  $sql = "SELECT * FROM users_table WHERE username = '" . $fullName . "'  ";
    //var_dump($sql);

$result = $success->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $username = $row['username'];
        $userphone = $row['userphone'];
        $userdigits = $row['userdigits'];
        $useradress = $row['useradress'];
        $useremail = $row['useremail'];
        $userbody = $row['userbody'];
        $userpagescolor = $row['userpagescolor'];
    }
}
$success->close();
    ?>

<form class="pb-createform" method="post" action="per_letter.php">
    <input type="hidden" name="id" value="NULL" />
    <h2><input type="hidden" name="username" value="<?php echo $fullName?>"><?php echo $fullName?> Personal letter</h2>
    Personnummer: <input type="tel" name="pnumber" class="write" placeholder=" ex:000000-0000" value="<?php echo $userdigits ?>" required><br />
    Adress: <input type="text" name="adress" class="write" value="<?php echo $useradress ?>" required><br />
    Tel: <input type="tel" name="phone" class="write" pattern="[0-9]{4} [0-9]{3} [0-9]{3}" placeholder=" ex:0000 000 000" value="<?php echo $userphone ?>"><br />
    E-mail: <input type="email" class="write" placeholder=" avvy@yahoo.com" value="<?php echo $useremail ?>" name="email"><br />
    <label for="text">About you</label><br/>
    <textarea rows="20" cols="100" name="text" required><?php echo $userbody ?></textarea><br />
    Select page color
    <input type="color" name="favcolor" value="<?php echo $userpagescolor ?>"> & text color <input type="color" name="txtcolor" value="#ff0000"><br />
    <input type="reset" class="btn" name="reset">
    <input type="submit" class="btn" name="complete" value="Complete">
</form>

<?php
echo "<style>
              html{
               text-align: center;
               display:flex;
               font-family: 'Indie Flower', cursive;
               background-color: #282c34;
               min-height: 100vh;
               flex-direction: column;
               align-items: center;
               justify-content: center;
               font-size: calc(10px + 2vmin);
               color: white;
             }
             .write, .btn{
               border-radius: 5px;
               font-size: 20px;
               border:2px solid aqua;
             }
             .btn{
             font-size: medium;
             }
         <style/>";
?>
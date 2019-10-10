<!-- page-2 -->
<h2><?php
    include "user_name.php";
    echo $fullName;
    ?> Personal letter</h2>

<form class="pb-createform" method="post" action="per_letter.php">
    Personnummer: <input type="tel" name="pnumber" placeholder=" ex:000000-0000" required><br />
    Adress: <input type="text" name="adress" required><br />
    Tel: <input type="tel" name="phone" pattern="[0-9]{4} [0-9]{3} [0-9]{3}" placeholder=" ex:0000 000 000"><br />
    E-mail: <input type="email"  placeholder=" avvy@yahoo.com" name="email"><br />
    <label for="text">About you</label><br/>
    <textarea rows="45" cols="100" name="text" required></textarea><br />
    Select page color
    <input type="color" name="favcolor" value="#ff0000"><br />
    <input type="reset" name="reset">
    <input type="submit" name="complete" value="Complete">
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
         <style/>";
?>
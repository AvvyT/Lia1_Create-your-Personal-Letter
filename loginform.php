<!-- page-1 -->

<h2 style="margin-bottom: 30%">Register</h2>
<form class="pb-form" method="post" action="complete_form.php">
    First Name <input type="text" class="write" placeholder="Full name.." name="fname" required>
    <br><br/>
    Last Name <input type="text" class="write" name="lname" required>
    <br><br/>
    <input type="reset" name="reset" class="btn">
    <input type="submit" name="create" class="btn" value="Sign Up">
</form>

<footer>
    <p>
         Created with PhpStorm by R.Todorova 9/10/19
    </p>
</footer>

<?php
echo "<style>
        body, html{
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
        p{
        margin-top: 35%; 
        color: aqua; 
        font-size: small; 
        }
      </style>";
?>


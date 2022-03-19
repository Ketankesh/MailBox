<?php

session_start();


error_reporting();


if (isset($_POST["login"])) {
   
  include ("connect.php");


    $_SESSION["username"] = $_POST["uname"];
    $_SESSION["pass"] = $_POST["pass"];




    $q = "select * from register where username='$_POST[uname]' and pass='$_POST[pass]'";
    $res = mysqli_query($con, $q);

    $c = mysqli_num_rows($res);

    if ($c!= 0) {
        header("location:account.php");
    } 
    else 
    {  
        $var = 'Invalid username & password......';
    }    
}



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----------------local style file-------------------------------------->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!----------------local style file-------------------------------------->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Mail-box</title>

   <style>
     body{
      background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.9363095580028886) 26%, rgba(231,232,236,0.9643207624846813) 46%, rgba(206,202,224,0.8802871490393032) 74%);
     }
   </style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailBox</title>

   
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
    

  

  <div class="nav" style="margin-top: 2%; margin-left: 3%;">
    <img src="./Images/logo.png.jpg"  height="120vh" width="100wh"  alt="mailBOX" srcset="">
  </div>
  <div class="container">
<div class="row">
  <div class="col" >
    <img src="./Images/mailbox.jpg"  height="80vh" alt="logo" ><h1 style="display: inline;">Email by MailBox</h1>
    <ul style="list-style-type: none;">
      <li>
        <img src="./Images/imagesy.jpg"" height="80vh" alt="" > <h1 style="display: inline; font-size: 20Px;">Fast And Easy</h1><p style="text-align:center;">An efficient and secured service by mailBOX<br> Faster and easily accessable emails.</p>
      <li><br><br>
        <img src="./Images/images (1).jfif" height="70vh" alt=""><h1 style="display: inline; font-size: 20px;">Secured Emails</h1><p style="text-align: center;">All your mails is secured with mailbox</p>
      </li>
      </li>
    </ul>
    <br><br>
    <p><a href="#">About mailBOX</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="#">Create Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">About Us</a></p>
  </div>
  <div class="col text-white"  >
    <h6 class="text-right" style="font-size: 25px; color:black" >New To mailBOX? <a href="register.php"><button type="submit" class="btn btn-danger btn-lg" >Create An Account</button></a></h6><br><br>
    
    <table width="90%" height="100vh" border="1" align="center" style="background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
" >
      <tr>
      <td><br>
       <h4 style=" font-size: xx-large;">&nbsp;&nbsp;Sign in</h4> <h3 style="text-align: right; font-size: large;color:grey;"  >mailBOX&nbsp;&nbsp;</h3>
      <tr>
      <td><br>
      <fieldset>
      <form action="" method="POST">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="uname" size="20" placeholder="username">
      <br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" name="pass" size="20" placeholder="Password">
      <br>
      <br>
      <div class="">
        <?php
         error_reporting(0);
         echo "<h4 class='text-center'><font face=sans-serif color=red>$var</font></h4><br>";
        ?>
       </div>     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" name="c1" value="Job" >Remember Me<br><br>
      
      <div class="text-center">
        <input type="submit" class="btn bg-danger text-white" id="login" name="login"  style="border: 1px;">
      <br><br>
      <a href="./register.php" style="text-decoration: underline;" >Don't Have An Account Yet?</a>
      </div>
<br><br><br>
      </fieldset>
      <br>
      
      </form></td>
      </tr>
      </td>
      </tr>
      </table>

  </div>
</div>

        <!------------Footer--------------------->
        <div class="footer pt-5 pb-5 text-white">
            <footer class="text-center font-weight-bolder">&copy mailBOX.com 2021</footer>
        </div>
        <!------------Footer--------------------->

</div>








</body>
</html>


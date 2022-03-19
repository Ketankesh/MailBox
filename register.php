<?php
session_start();


error_reporting(0);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$mobile=$_POST['mobile'];
$country=$_POST['country'];


 include("connect.php");


//creation table
$c="create table register(id int NOT NULL auto_increment primary key,fname varchar(30) NOT NULL,lname varchar(30) NOT NULL,username varchar(20) NOT NULL,pass varchar(20) NOT NULL,cpass varchar(20) NOT NULL,dob varchar(20) NOT NULL,sex varchar(10) NOT NULL,mobile bigint,country varchar(20) NOT NULL)";
$res=mysqli_query($con,$c);



//Insertion
if(isset($_POST["signup"]))
{
    if(empty($fname)||empty($lname)||empty($username)||empty($pass)||empty($cpass)||empty($dob)||empty($sex)||empty($mobile)||empty($country))
    {
        echo "<script>alert('Any Feild must not be empty');</script>";
    }
    else{
        $ins="insert into register (fname,lname,username,pass,cpass,dob,sex,mobile,country) values('$fname','$lname','$username','$pass','$cpass','$dob','$sex','$mobile','$country')";
        $res = mysqli_query($con,$ins);
        echo "<script>alert('One New Record Inserted');
        location.href='index.php';
        
        </script>";

    }
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailBox</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/style.css">

<style>
     body{
      background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.9363095580028886) 26%, rgba(231,232,236,0.9643207624846813) 46%, rgba(206,202,224,0.8802871490393032) 74%);
     }
   </style>


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
                 </ul> <br><br>
    <p><a href="#">About mailBOX</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="#">Create Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">About Us</a></p>
  </div>
  <div class="col text-white"  >
    <a href="index.php"> <button type="submit" class="btn btn-danger btn-lg float-right"  >Sign In</button></a><br><br><br><br>
    <table width="100%" height="100vh" border="1" align="center" style="background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
" >
      <tr>
      <td><br>
       <h4 style="display: block; position:absolute; font-size: xx-large;">&nbsp;&nbsp;Sign in</h4><br><br> <h3 style="text-align: right; font-size: large; color: grey;"  >mailBOX&nbsp;&nbsp;</h3>
      <tr>
      <td><br>
      <fieldset>
      <form action="" method="post">
        &nbsp;&nbsp;
       First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="fname" size="30" placeholder="Firstname">
      <br><br>
      &nbsp;&nbsp;
      Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="lname" size="30" placeholder="lastname">
      <br><br>
      &nbsp;&nbsp;
      username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="username" size="30" placeholder="username">
      <br><br>
      &nbsp;&nbsp;
      Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" name="pass" size="30" placeholder="Password">
      <br><br>
      &nbsp;&nbsp;
      Confirm Password:
     
      <input type="password" name="cpass" size="30" placeholder="Confirm Password">
      <br><br>
      &nbsp;&nbsp;
      D.O.B: 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" name="dob" id="date">

<br><br>

      &nbsp;&nbsp;
      Sex:
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="sex" value="Male" >Male
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="sex" value="Female" >Female<br><br>
      &nbsp;&nbsp;
      Mobile No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" name="mobile" size="20" placeholder="Mobile No.">
      <br><br>
      &nbsp;&nbsp;
      Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="country" id="count">
        <option value="Select">Select</option>
          <option value="India">India</option>
          <option value="Australia">Australia</option>
          <option value="iran">Iran</option>
          <option value="china">China</option>
          <option value="nepal">Nepal</option>
          <option value="Bangladesh">Bangladesh</option>
      </select>
      <br><br>
      <div class="text-center">
        <input type="submit" class="btn btn-lg text-white bg-danger" name="signup" id="signup" style="border: 1px;">
      <br><br>
      
      </div>

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
    

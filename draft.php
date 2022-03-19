<?php
session_start();
include("connect.php");

if(empty($_SESSION["username"]) and empty($_SESSION["pass"]))
{
    header("location:index.php");
}


$q="select * from register where username='$_SESSION[username]' and pass='$_SESSION[pass]'";

$res=mysqli_query($con,$q);

$c=mysqli_num_rows($res);


error_reporting(0);

$reciver=$_POST['reciver'];
$sender=$_POST['sender'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$datetime=$_POST['datetime'];



include("connect.php");

//creation table
//$c="create table draft(id int NOT NULL auto_increment primary key,reciver varchar(100) NOT NULL,sender varchar(100) NOT NULL,subject varchar(200) NOT NULL,message varchar(1000) NOT NULL,datetime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP  ON UPDATE CURRENT_TIMESTAMP)";
//$res=mysqli_query($con,$c);



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        /*--------------------2 columb left---------------------------*/
        * {
            box-sizing: border-box;
        }

        /* Create two unequal columns that floats next to each other */
        .row {
  display: flex;
  
}

.column {
  flex: 50%;
}

        /*--------------------2 columb left---------------------------*/

        /*--------------------------vertical-menu----------------------*/
        .vertical-menu {
            width: 100%;
        }

        .vertical-menu a {
            background-color:white;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #ccc;
        }

        .vertical-menu a.active {
            background-color: #04AA6D;
            color: white;
        }
        /*--------------------------vertical-menu----------------------*/
    </style>


    <title>account-inbox</title>
</head>

<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" style="text-decoration: none; font-size: 20px;" href="logout.php">
      <img src="./Images/logo.png.jpg" height="120vh" width="100wh" class="d-inline-block align-top" alt="">
    </a>
    <a  href="logout.php"><button type="submit" value="LOGOUT" class="btn btn-danger btn-lg" >LOGOUT</button></a>
    
  </nav>

        <!------------Logo--------------------->

        <!-----center-content----------------->
        <div class="center-body bg-danger">
            <div class="center-content">
                <div class="container-fluid pt-5 pb-5">
                    <div class="row">

                        <div class="column left col-4" >
                            <div class="vertical-menu"> 
                                <a href="./compose.php">Compose</a>
                                <a href="./account.php">Inbox</a>
                                <a href="./sent.php">Sent</a>
                                <a href="./draft.php" class="active">Draft</a>
                            </div>

                        </div>
                        <div class="column right col-9" style="background-color:#bbb;">
                            <?php
                            
                            if($c==0)
                                    {
                                    header("location:index.php");
                                    }
                                    else
                                    {
                                    echo "<h1 class='text-center'><font face=Brush Script MT size=5px color=white><br>Welcome $_SESSION[username]</font></h1>";
                                    }

                            ?>

                            <?php
                             include("connect.php");
                            
    
                            $tab="select * from draft where sender='$_SESSION[username]'";
                            $res=mysqli_query($con,$tab);  
                            
                            ?>
                            <table class="table table-hover table-responsive  w-100 d-block d-sm-table">
                            <thead>
                              <tr>
                              <th scope="col">Id</th>
                                <th scope="col">reciver</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <?php
                                 while ($row=mysqli_fetch_assoc($res))
                                  {
                              ?>  
                              
                              <tbody>
                              <tr>
                                <th scope="row">1</th>
                               
                                <td><?php echo $row['reciver'];?></td>
                                <td><?php echo $row['subject'];?></td>
                                <td><?php echo $row['message'];?></td>
                                <td><?php echo $row['datetime'];?></td>
                              </tr>
                            </tbody>
                            <?php
                                 }
                            ?>
                            
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-----center-content----------------->


        <!------------Footer--------------------->
        <div class="footer pt-5 pb-5 text-white">
            <footer class="text-center font-weight-bolder">&copy mailBOX.com 2021</footer>
        </div>
        <!------------Footer--------------------->


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>




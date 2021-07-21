<?php
session_start();
include "connectDB.php";
?>
<!doctype html>
<html lang="en">
    <head>
   
    
        <title>LOG-IN</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">   
        <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>  
  </head>
  <body class="text-center" body style="background-image:url(img/1.jpg)" >
  <div class="container">
  <div class="header" style="height:100px; width:100% bgcolor:black">
  
  </div>

   
	<div class="card"style="width: 408px; margin:0 auto; padding-top:30px; padding-bottom:30px; padding-right:30px; padding-left:30px ">
		
        <form class="form-signin"name="form" value="form" method="post" action="index.php">
                <img class="mb-4" src="img/2.jpg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal"><u><b> Log In</b></u></h1>

                <label for="Email" class="sr-only">Email address</label>
                <input type="email" id="Email" name="Email" class="form-control" placeholder="Email address" required autofocus><br>

                <label for="Password" class="sr-only">Password</label>
                <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required><br>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"><b>Log In<b></button>
    
        </form>
	  
	  </div>  
      </div> 
      <?php
        include "connectDB.php";
        if(isset($_POST['submit']))
        {
            $Email=$_POST['Email'];
            $Password=$_POST['Password'];            
            $select=mysqli_query($conn,"Select * from admin where Email='$Email' AND Password='$Password'");
            $row=mysqli_fetch_array($select);
                if(is_array($row))
                {
                    $_SESSION["Email"]=$row['Email'];
                    $_SESSION["Password"]=$row['Password'];
                    
                }
                else
                {
                    echo '<script type ="text/javascript">';
                    echo 'alert("Invalid Email or Password");';
                    echo 'window.location.href = "index.php"';
                    echo '</script>';
                }
            }
            if (isset($_SESSION["Email"])){
                header("Location:gymdeshboard.php");
            }
	
				
	?>
</body>
</html>
	 
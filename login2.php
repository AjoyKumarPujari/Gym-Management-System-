<?php
	session_start();
	include "connectDB.php";
	if(isset($_POST["submit"]))
	{
		$Email=$_POST["Email"];
		$Password=$_POST["Password"];
		$sql="Select * from admin where EMAIL='$Email' && PASSWORD='$Password'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
			if(is_array($result))
			{
				$_SESSION["Email"]=$row['Email'];
				$_SESSION["Password"]=$row['Password'];
			}
			else
			{
				echo '<script type ="text/javascript">';
				echo 'alert("Invalid Email or Password")';
				echo 'window.location.href = "index.php"';
				echo '</script>';
			}
		}
		if (isset($_SESSION["Email"])){
			header("Location:template.php");
		}
	
				
				
		
		
	
?>
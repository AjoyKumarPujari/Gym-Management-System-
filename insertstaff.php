<?php
	
	include 'conn.php';
	if(isset($_POST["submit"]))
		{
			
			$name = $_POST['name'];
            $stafftype = $_POST['stafftype'];
            $phonenumber = $_POST['phonenumber'];
            $altphonenumber = $_POST['altphonenumber'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $str= "insert into staff values ( null,'$name','$stafftype','$phonenumber','$altphonenumber','$email','$gender','$address')";
			$result=mysqli_query($conn,$str);
			if($result)
			{
				header("location: staffs.php?ok=1");
				
			}
			else
			{
				echo mysqli_error();
			}
	    }

?>

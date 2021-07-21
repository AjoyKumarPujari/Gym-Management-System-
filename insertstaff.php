
	
	// include 'connectDB.php';
	// if(isset($_POST["submit"]))
	// 	{
			
	// 		$name = $_POST['name'];
    //         $stafftype = $_POST['stafftype'];
    //         $phonenumber = $_POST['phonenumber'];
    //         $altphonenumber = $_POST['altphonenumber'];
    //         $email = $_POST['email'];
    //         $gender = $_POST['gender'];
    //         $address = $_POST['address'];
    //         $str= "insert into staff values ( null,'$name','$stafftype','$phonenumber','$altphonenumber','$email','$gender','$address')";
	// 		$result=mysqli_query($conn,$str);
	// 		if($result)
	// 		{
	// 			header("location: index.php?ok=1");
				
	// 		}
	// 		else
	// 		{
	// 			echo mysqli_error();
	// 		}
	//     }

 
<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$stafftype = $_POST['stafftype'];
		$phonenumber = $_POST['phonenumber'];
        $altphonenumber = $_POST['altphonenumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO staff (name,stafftype,phonenumber,altphonenumber,email,gender,address) values( ?, ?, ?, ?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$stafftype,$phonenumber,$altphonenumber,$email,$gender,$address));
		Database::disconnect();
		header("Location: staffs.php");
    }
?> 
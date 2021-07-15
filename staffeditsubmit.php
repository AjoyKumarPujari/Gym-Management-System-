<!-- <?php
	// include('database.php');
	// $id=$_GET['id'];
    //     $id=$_POST['id'];
	//     $name = $_POST['name'];
	// 	$stafftype = $_POST['stafftype'];
	// 	$phonenumber = $_POST['phonenumber'];
    //     $altphonenumber = $_POST['altphonenumber'];
    //     $email = $_POST['email'];
    //     $gender = $_POST['gender'];
    //     $address = $_POST['address'];
 
	// mysqli_query($conn,"update `staff` set `name`='$name',`stafftype`='$stafftype',`phonenumber`='$phonenumber',`altphonenumber`='$altphonenumber', `email`='$email',`gender`='$gender', `address`='$address' where `id`='$id'");
	// header('location:staffs.php');
?> -->

<?php
    require 'conn.php';
 
    $id = null;
    if ( !empty($_POST['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id=$_POST['id'];
        $name = $_POST['name'];
		$stafftype = $_POST['stafftype'];
		$phonenumber = $_POST['phonenumber'];
        $altphonenumber = $_POST['altphonenumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE staff  set name = ?, stafftype =?, phonenumber =?, altphonenumber =?, email=?,gender=?,address=? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$stafftype,$phonenumber,$altphonenumber,$email,$gender,$address,$id));
		Database::disconnect();
		header("Location: staffs.php");
    }
?> 
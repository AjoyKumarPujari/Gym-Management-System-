<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$plan = $_POST['plan'];
		$phonenumber = $_POST['phonenumber'];
        $type = $_POST['type'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $date=date("Y-m-d",strtotime($bdate));
        
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO members (name,plan,phonenumber,type,email,gender,address,date) values( ?, ?, ?, ?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$plan,$phonenumber,$type,$email,$gender,$address,$date));
		Database::disconnect();
		header("Location: viewmembers.php");
    }
?>
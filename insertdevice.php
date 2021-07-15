<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $devicename = $_POST['devicename'];
		$center = $_POST['center'];
		$department = $_POST['department'];
        $quantity = $_POST['quantity'];
       
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO devices (devicename,center,department,quantity) values(?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($devicename,$center,$department,$quantity));
		Database::disconnect();
		header("Location: devices.php");
    }
?>
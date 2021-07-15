<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $planname = $_POST['planname'];
		$duration = $_POST['duration'];
		$baseprice = $_POST['baseprice'];
        $registrationfee = $_POST['registrationfee'];
        $discount = $_POST['discount'];
        $price = $_POST['price'];
        $colour = $_POST['colour'];
        $description = $_POST['description'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO plans (planname,duration,baseprice,registrationfee,discount,price,colour,description) values(?, ?, ?, ?, ?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($planname,$duration,$baseprice,$registrationfee,$discount,$price,$colour,$description));
		Database::disconnect();
		header("Location: plans.php");
    }
?>
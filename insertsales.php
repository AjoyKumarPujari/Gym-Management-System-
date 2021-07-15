<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $item = $_POST['item'];
		$quantity = $_POST['quantity'];
		$unitprice = $_POST['unitprice'];
       
        $totalamount = $_POST['totalamount'];
        $customername = $_POST['customername'];
        $phone = $_POST['phone'];
       
        
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO sales (item,quantity,unitprice,totalamount,customername,phone) values( ?, ?, ?, ?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($item,$quantity,$unitprice,$totalamount,$customername,$phone));
		Database::disconnect();
		header("Location: sales.php");
    }
?>
<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $Itemname = $_POST['Itemname'];
		$itemtype = $_POST['itemtype'];
		$quantity = $_POST['quantity'];
       
        $buyingprice = $_POST['buyingprice'];
        $sellingprice = $_POST['sellingprice'];
        $description = $_POST['description'];
       
        
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO stock (Itemname,itemtype,quantity,buyingprice,sellingprice,description) values( ?, ?, ?, ?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($Itemname,$itemtype,$quantity,$buyingprice,$sellingprice,$description));
		Database::disconnect();
		header("Location: suppliments.php");
    }
?>
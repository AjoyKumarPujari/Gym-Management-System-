<?php
    require 'Database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    else if ( !empty($_POST)) {
        // keep track post values
        $id= $_POST['id'];
        $Itemname = $_POST['Itemname'];
		$itemtype = $_POST['itemtype'];
		$quantity = $_POST['quantity'];
       
        $buyingprice = $_POST['buyingprice'];
        $sellingprice = $_POST['sellingprice'];
        $description = $_POST['description'];
         try{
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE stock  set Itemname = '$Itemname', itemtype = '$itemtype', quantity='$quantity',buyingprice='$buyingprice', sellingprice='$sellingprice',description='$description' WHERE id = '$id' ";
		$q = $pdo->prepare($sql);
		$q->execute();
		
		header("Location: suppliments.php");
        echo $q->rowCount()."SuccessFully Update";
        Database::disconnect();
        }
         catch (pdoException $e)
         {
                echo $sql ."<br>" .$e->getMessage();
         }
    }
?> 
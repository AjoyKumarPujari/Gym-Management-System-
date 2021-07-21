<?php
    require 'Database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    else if ( !empty($_POST)) {
        // keep track post values
        $id= $_POST['id'];
        $devicename = $_POST['devicename'];
		$center = $_POST['center'];
		$department = $_POST['department'];
        $quantity = $_POST['quantity'];
         try{
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE devices  set devicename = '$devicename', center = '$center', department='$department',quantity='$quantity' WHERE id = '$id' ";
		$q = $pdo->prepare($sql);
		$q->execute();
		
		header("Location: devices.php");
        echo $q->rowCount()."SuccessFully Update";
        Database::disconnect();
        }
         catch (pdoException $e)
         {
                echo $sql ."<br>" .$e->getMessage();
         }
    }
?> 
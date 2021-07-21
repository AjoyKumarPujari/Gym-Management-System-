<?php
    require 'Database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    else if ( !empty($_POST)) {
        // keep track post values
        $id= $_POST['id'];
        $planname = $_POST['planname'];
		$duration = $_POST['duration'];
		$baseprice = $_POST['baseprice'];
        $registrationfee = $_POST['registrationfee'];
        $discount = $_POST['discount'];
        $price = $_POST['price'];
        // $colour = $_POST['colour'];
        $description = $_POST['description'];
         try{
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE plans  set planname = '$planname', duration = '$duration', baseprice='$baseprice',registrationfee='$registrationfee', discount='$discount',price='$price', description='$description' WHERE id = '$id' ";
		$q = $pdo->prepare($sql);
		$q->execute();
		
		header("Location: plans.php");
        echo $q->rowCount()."SuccessFully Update";
        Database::disconnect();
        }
         catch (pdoException $e)
         {
                echo $sql ."<br>" .$e->getMessage();
         }
    }
?> 
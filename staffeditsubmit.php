<?php
    require 'Database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    else if ( !empty($_POST)) {
        // keep track post values
       
         $id= $_POST['id'];
        $name = $_POST['name'];
		$stafftype = $_POST['stafftype'];
		$phonenumber = $_POST['phonenumber'];
        $altphonenumber = $_POST['altphonenumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
         try{
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE staff  set name = '$name' , stafftype = '$stafftype', phonenumber='$phonenumber',altphonenumber='$altphonenumber', email='$email',gender='$gender', address='$address' WHERE id = '$id' ";
		$q = $pdo->prepare($sql);
		$q->execute();
		
		header("Location: staffs.php");
        echo $q->rowCount()."SuccessFully Update";
        Database::disconnect();
        }
         catch (pdoException $e)
         {
                echo $sql ."<br>" .$e->getMessage();
         }
    }
?> 
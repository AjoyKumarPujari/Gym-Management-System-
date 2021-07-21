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
		$plan = $_POST['plan'];
		$phonenumber = $_POST['phonenumber'];
        $type = $_POST['type'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address']; 
        $dateofstart = date('Y-m-d', strtotime($_POST['dateofstart']));

        if($plan=='Monthly')
        {
            
            $dateofend=strtotime(date('Y-m-d', strtotime($dateofstart))." +1 month");
            $dateofend= date("Y-m-d",$dateofend);
        }
        elseif($plan == 'Yearly')
        {
            $dateofend=strtotime(date('Y-m-d', strtotime($dateofstart))." +1 year");
            $dateofend= date("Y-m-d",$dateofend);
        }
        elseif($plan == 'Quarterly')
        {
            $dateofend=strtotime(date('Y-m-d', strtotime($dateofstart))." +3 month");
            $dateofend= date("Y-m-d",$dateofend);
        }
        elseif($plan == 'Weekly')
        {
            $dateofend=strtotime(date('Y-m-d', strtotime($dateofstart))." +7 day");
            $dateofend= date("Y-m-d",$dateofend);
        }
        else
        {
            $dateofend=null;
        }
        
		try{
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE members  set name = '$name', plan = '$plan', phonenumber='$phonenumber',type='$type',email='$email',gender='$gender',address='$address',dateofstart='$dateofstart', dateofend='$dateofend' WHERE id = '$id' ";
		$q = $pdo->prepare($sql);
		$q->execute();
		header("Location: viewmembers.php");
        echo $q->rowCount()."SuccessFully Update";
        Database::disconnect();
        }
         catch (pdoException $e)
         {
                echo $sql ."<br>" .$e->getMessage();
         }
    }
    
?>
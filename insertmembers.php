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
        
        else{
            $dateofend=null;
        }
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO members (name,plan,phonenumber,type,email,gender,address,dateofstart,dateofend) values( ?, ?, ?, ?, ?, ?, ?, ?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$plan,$phonenumber,$type,$email,$gender,$address,$dateofstart,$dateofend));
		Database::disconnect();
		header("Location: viewmembers.php");
    }
?>
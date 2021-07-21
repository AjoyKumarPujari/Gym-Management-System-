
<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
      
        $item = $_POST['item'];
		$quantity = $_POST['quantity'];
		$unitprice = $_POST['unitprice'];
        $Aquantity = $_POST['Aquantity'];
        $totalamount = $_POST['totalamount'];
        $customername = $_POST['customername'];
        $phone = $_POST['phone'];
        $date = date('Y-m-d ');
        
        
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO sales (item,quantity,unitprice,totalamount,customername,phone,saledate) values( ?, ?, ?, ?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($item,$quantity,$unitprice,$totalamount,$customername,$phone,$date));
        Database::disconnect();
        $pdo1 = Database::connect();
		$pdo1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql1="UPDATE stock SET quantity=quantity-'$quantity' WHERE Itemname='$item'";
        $p= $pdo1->prepare($sql1);
        $p->execute();
		
		Database::disconnect();
		header("Location: viewsales.php");
    }
?>
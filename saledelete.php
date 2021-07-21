<?php
    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM sales  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: viewsales.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="assets/css/material-dashboard.css"/>
  <link href="..css/style.css"/>
	
</head>
 
<body>
	

    <div class="container-fluid">   
     
        <div class="row">
            
                <div class="card" style=" display: flex; align-items: center;">
			

                    <form class="form-horizontal" action="saledelete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <p class="alert alert-error">Are you sure to delete ?</p>
                    <div class="form-actions">
                    
                        <button type="submit" class="btn btn-danger">Yes</button>
                        <a class="btn" href="viewsales.php">No</a>
                    </div>
                    </form>
                </div>
		    
        </div>         
    </div> <!-- /container -->
  </body>
</html>
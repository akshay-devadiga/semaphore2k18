<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT username,userpass FROM admintb WHERE username=:uname and userpass=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin !</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body class="">
   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                    <form class="form" method="post">
					 <fieldset>
                    	<div class="form-group">
                    	
                    	
                    			<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                    		
                    	</div>
                    	<div class="form-group">
                    		
                    		
                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    		
                    	</div>
                    
                        <div class="form-group ">
                    		
                    			<button type="submit" name="login" class="btn btn-lg btn-success btn-block">Sign in</button>
                    		
                    	</div>
						 </fieldset>
                    </form>
 </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="css/css/sb-admin-2.js"></script>
    </body>
</html>

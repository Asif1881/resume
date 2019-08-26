<?php 

session_start();
if(!isset($_SESSION['name'])){
	header('location:index.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style> 
		body{
	background-color: black;
	background-size: cover;
	background-position: center;
}
	</style>

</head>
<body>

	<div class="container">
		
   
   <a class="float-right btn btn-danger" href="logout.php">Logout</a>

   <h1>  Welcome <?php echo $_SESSION['name'];?> </h1>

   <h2>
   	<a href="welcome.php" class="btn btn-danger" >View My CV</a>
   </h2>

</div>
</body>
</html>
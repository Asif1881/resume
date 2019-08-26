<?php 
session_start();
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration Page</title>
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
		<div class="login-box">
		<div class="row">
		<div class="col-md-6">
			<h2>Login Form</h2> <br>
			<form action="loginvalid.php" method="post">
				<div class="form-group">

					<label><b>Username</b></label>
					<input type="text" name="name" class="form-control" placeholder="Enter Username" required>
				</div>
				<div class="form-group">

					<label><b>Password</b></label>
					<input type="Password" name="pass" class="form-control" placeholder="Enter Password" required>
				</div>
				<button type="submit" class="btn btn-primary"> Login </button>

			</form>
		</div>
		</div>

		</div>
	</div>

</body>
</html>
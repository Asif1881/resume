<?php
session_start();
//header('location:index.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$name = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];


$s = " select * from user where name='$name'";

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result);

if($num == 1){
	echo "username already taken";
}
else{
	$reg = " insert into user (name, pass, email) values('$name', '$pass', '$email')";

	mysqli_query($con, $reg);
	echo "Registration Successful";
	$_SESSION['msg'] = '<div class="message">Registration Successful</div>';
	header('location: login.php');
}


?>
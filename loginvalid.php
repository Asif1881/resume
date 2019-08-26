<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$name = $_POST['name'];
$pass = $_POST['pass'];



$save = " select * from user where name='$name' && pass='$pass'";

$result = mysqli_query($con, $save); 

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['name']=$name;
	header('location:home.php');
}
else{
	$_SESSION['msg']= '<div class="message" style="text-align: center;">Loged in Unuccessful</div>';
	header('location:login.php');
	
}


?>
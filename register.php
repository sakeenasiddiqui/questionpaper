<?php
error_reporting(0);
session_start();

$con = mysqli_connect('localhost', 'root', '' );
mysqli_select_db($con, 'examdatabase');
$name = $_POST['user'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$role = $_POST['role'];

$s = " select * from user where username = '$name'";
$res = mysqli_query($con, $s);
$num = mysqli_num_rows($res);
if($num == 1){
  echo "<h3>User already exist! Try to Login Again.</h3>";
  echo "<a href='login.php'>Login Page!</a>";

}
else{
  $reg = " insert into user (username, email, password, role) values ('$name', '$mail', '$pass','$role' )";
  mysqli_query($con, $reg);
  echo "<h2>Welcome ".$name."! Your Registration process is Successful. Please login from <a href='index.php'>HOME PAGE</a></h2>";
}

?>

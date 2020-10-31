<?php
//error_reporting(0);
session_start();

$con = mysqli_connect('localhost', 'root', '' );
mysqli_select_db($con, 'examdatabase');
$name = $_POST['user'];
$pass = $_POST['pass'];

$s = " select role from user where username = '$name' && password = '$pass'";
$res = mysqli_query($con, $s);
$num = mysqli_num_rows($res);
if($num == 1){
  $_SESSION['loginuser'] = $name;
  $row = mysqli_fetch_array($res);
  if($row['role'] == 'Admin'){
    header('location:adminpanel.php');
  }else{
    header('location:index.php');
  }
}
else{
    echo "<h3>Wrong User-name or password!!</h3>";
    echo "<a href='login.php'> Login Again!</a>";
}

?>

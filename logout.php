<?php

session_start();

if(isset($_SESSION['loginuser'])){
  session_destroy();
  header('location:index.php');
}
else{
  header('location:signup.php');
}

?>

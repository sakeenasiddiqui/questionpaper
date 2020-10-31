<?php

error_reporting(0);
session_start();

$con = mysqli_connect('localhost', 'root', '' );
mysqli_select_db($con, 'examdatabase');
$testDb = $_POST['testName'];
$q = $_POST['quesText'];
$o1 = $_POST['op1Text'];
$o2 = $_POST['op2Text'];
$o3 = $_POST['op3Text'];
$q_id = 12;
$crr = 2;
$a_id = 31;

if($testDb == 1)
{
    $reg = " insert into questions (q_id, questions, ques_id) values ('$q_id', '$q', '$crr' )";
  mysqli_query($con, $reg);
  $reg = "insert into answers (a_id, answers, ans_id) values ('$a_id', '$o1', '$q_id')";
  mysqli_query($con,$reg);
  $a_id++;
  $reg = "insert into answers (a_id, answers, ans_id) values ('$a_id', '$o2', '$q_id')";
  mysqli_query($con,$reg);
  $a_id++;
  $reg = "insert into answers (a_id, answers, ans_id) values ('$a_id', '$o3', '$q_id')";
  mysqli_query($con,$reg);

}
if($testDb == 2)
{
    $reg = " insert into questions1 (q_id, questions, ques_id) values ('$q_id', '$q', '$crr' )";
  mysqli_query($con, $reg);
  $reg = "insert into answers1 (a_id, answers, ans_id) values ('$a_id', '$o1', '$q_id')";
  mysqli_query($con,$reg);
  $a_id++;
  $reg = "insert into answers1 (a_id, answers, ans_id) values ('$a_id', '$o2', '$q_id')";
  mysqli_query($con,$reg);
  $a_id++;
  $reg = "insert into answers1 (a_id, answers, ans_id) values ('$a_id', '$o3', '$q_id')";
  mysqli_query($con,$reg);

}
if($testDb == 3)
{
    $reg = " insert into questions2 (q_id, questions, ques_id) values ('$q_id', '$q', '$crr' )";
  mysqli_query($con, $reg);
  $reg = "insert into answers2 (a_id, answers, ans_id) values ('$a_id', '$o1', '$q_id')";
  mysqli_query($con,$reg);
  $a_id++;
  $reg = "insert into answers2 (a_id, answers, ans_id) values ('$a_id', '$o2', '$q_id')";
  mysqli_query($con,$reg);
  $a_id++;
  $reg = "insert into answers2 (a_id, answers, ans_id) values ('$a_id', '$o3', '$q_id')";
  mysqli_query($con,$reg);

}


  
?>



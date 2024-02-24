<?php
require "common.php";
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['pwd']);
$password=md5($password);

$select_query="select id, email from users where email=$email, id=$password";
$select_query_result=($con,$select_query) or die(mysqli_error($con));
$mysqli_num_rows=mysqli_num_rows($select_query_result);
If mysqli_num_rows == 0
echo "no user with the email and password";
?>
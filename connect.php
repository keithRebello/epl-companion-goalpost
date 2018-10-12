<?php
$connect=mysqli_connect("localhost","root","") or die(mysqli_error());
$db=mysqli_select_db($connect,"epl_login") or die(mysqli_error());
echo "Database Connection Successfully";
?>
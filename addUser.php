<?php
$connect=mysqli_connect("localhost","root","") or die(mysqli_error());
$db=mysqli_select_db($connect,"epl_login") or die(mysqli_error());
if(!empty($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$contact=$_POST['contact'];
$fav=$_POST['fav'];
$insert=mysqli_query($connect,"INSERT INTO epl_user(user,pass,fname,lname,email,contact,fav) VALUES('$user','$pass','$fname','$lname','$email','$contact','$fav')");
echo "Record Updated";
}
?>
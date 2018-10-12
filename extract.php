<?php
include('connect.php');
$extract=mysqli_query("SELECT * FROM epl_user");
$row=mysqli_fetch_assoc($extract);
while($row)
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $contact=$_POST['contact'];
    $fav=$_POST['fav'];    
}
header("Location: addUser.php");
?>
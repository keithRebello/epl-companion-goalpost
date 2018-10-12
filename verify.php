<?php 
if(isset($_POST['submit'])){ 
    $dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    $dbPass = "";            //Database Password 
    $dbDatabase = "epl_login";    //Database Name 
    $db = mysqli_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database.");  
    $connect=mysqli_select_db($db,$dbDatabase)or die("Couldn't select the database."); 
    $usr = $_POST['username']; 
    //$pas = hash('sha256', mysqli_real_escape_string($_POST['password'])); 
    $pas=$_POST['password'];
    $sql = mysqli_query($db,"SELECT * FROM epl_user WHERE user='$usr' AND pass='$pas' LIMIT 1;"); 
    if(mysqli_num_rows($sql) == 1){ 
        $row = mysqli_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['user']; 
        $_SESSION['fname'] = $row['fname']; 
        $_SESSION['lname'] = $row['lname']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: users_page.php"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        header("Location: signup.html"); 
        exit; 
    } 
}else{ 
    header("Location: homepage.html");     
    exit; 
} 
?> 
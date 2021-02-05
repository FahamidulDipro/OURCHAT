<?php
include "dbconnect.php";
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM `users` WHERE `username`='$username'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
    $row = mysqli_fetch_assoc($result);
    if($username == $row['username']){
        if($password == $row['password']){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['sn'] = $row['id'];
            $_SESSION['pic'] = $row['pic'];
            header('location:test.php?loginsuccess=true');
      

        }
        else{
            header('location:login.php?loginsuccess=false');
        }
    }
    else{
        header('location:login.php?loginsuccess=false');
    }
   
}
else{
    header('location:login.php?loginsuccess=false');
}


}
?>
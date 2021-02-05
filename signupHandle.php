<?php
include "dbconnect.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
$file = $_FILES['file'];
$tempFile = $file['tmp_name'];
print_r($tempFile);
echo "<br>";
$fileName = $file['name'];
print_r($fileName);
$fileExt = explode('.', $fileName);
$fileCheck = strtolower(end($fileExt));
$store = array('jpg', 'jpeg', 'png', 'webp', 'svg', 'pdf');
if (in_array($fileCheck, $store)) {
    $destFile = "images/" . $fileName;
    move_uploaded_file($tempFile, $destFile);
}
else {
    $target = null;
    echo"Problem inserting image";
    // echo "<br>No Image was uploaded";
}


$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$sqlSelect = "SELECT * FROM `users` WHERE `username`='$username'";
$result = mysqli_query($con,$sqlSelect);
$num = mysqli_num_rows($result);
if($num >0){
    echo"Username already exists, please select new username";
}
else{
    if($password == $cpassword){
        $sql = "INSERT INTO `users`( `username`, `password`,`pic`) VALUES ('$username','$password','$destFile')";
        mysqli_query($con,$sql);
        header('location:login.php');
    
    }
    else{
        echo"Password don't match";
    }

}
}


// if(isset($_POST['u'])){
  

// move_uploaded_file($_FILES['file']['tmp_name'],uniqid());

    // $username = $_POST['u'];
    // $password = $_POST['p'];
    // $cpassword = $_POST['c'];

    
    // echo $username;
    // echo"<br>";
    // echo $password;
    // echo"<br>";
    // echo $cpassword;
    // echo"<br>";
    

// }




?>


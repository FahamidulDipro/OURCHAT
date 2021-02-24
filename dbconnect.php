<?php
$con = new mysqli('localhost','root','','epiz_27538443_ourchat');

// Check Connection
if($con->connect_errno){
    echo"Failed to connect to the database: ".$con->connect_error;
    exit();
}




?>
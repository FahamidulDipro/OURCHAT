<?php
$con = new mysqli('sql207.epizy.com','epiz_27538443','lvpEy9Lm0qcrxW','epiz_27538443_ourchat');

// Check Connection
if($con->connect_errno){
    echo"Failed to connect to the database: ".$con->connect_error;
    exit();
}




?>
<?php

$server = 'Localhost';
$user= "root";
$pass="";
$db_name= "cms";

$con = mysqli_connect($server,$user,$pass,$db_name);
// if($con)
if($con->connect_error){
    echo "Failed to connect DB".$con->connect_error;
}


// echo "Connected!";

// else

// echo "Error";


?>
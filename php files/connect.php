<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='project';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
    // echo "Connection successfull";
}
else{
    // die(mysqli_error($con));
    die("connection failed: " . $con->connect.error);
}
?>
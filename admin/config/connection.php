<?php 
    include "config.php";
    $conn = mysqli_connect('localhost','root','','portfolio_db');
    if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
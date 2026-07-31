<?php 
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
$servername = "localhost";
$username = "root";
$password = "Yik123*02";
$dbname = "ecommerce";

$conn=new mysqli($servername, $username, $password, $dbname,3307);
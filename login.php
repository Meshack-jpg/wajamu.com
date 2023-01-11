<?php

session_start();

// connect to database
$user = 'root';
$pass = '';
$db = 'wajdb';

$mysqli = mysqli_connect('127.0.0.1', $user, $pass, $db) or die("Unable to connect");

$contact = $_REQUEST['txtcontact'];
$password = $_REQUEST['txtpassword'];

$query = "SELECT * FROM wajamu_members WHERE Contact = '$contact' AND Password = '$password'";
$result = $mysqli->query($query);

if($result){
    if(mysqli_num_rows($result) > 0){
        echo file_get_contents("home.html");
    }else{
        echo nl2br("Contact not found!!! \n Please sign up.");
    }
}else{
    echo "Error: ";
}

?>

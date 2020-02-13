<?php

$username = $_POST['username1'];
$email = $_POST['email1'];
$address = $_POST['address1'];



$link = mysqli_connect("localhost", "root", "", "doctormodule");

$query = "INSERT INTO feedback ( username, email, address) VALUES('$username', '$email', '$address')";

$result = mysqli_query($link, $query) or die("Oops Failed! ");




    echo " Thanks $username. Your Information Updated Successfully";
?>

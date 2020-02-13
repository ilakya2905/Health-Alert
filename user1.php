<?php

$username = $_POST['username1'];
$email = $_POST['email1'];
$address = $_POST['address1'];

$mobile = $_POST['mobile1'];
$age = $_POST['age1'];
$password = $_POST['password1'];
$cpassword = $_POST['cpassword1'];

$link = mysqli_connect("localhost", "root", "", "doctormodule");

$query = "INSERT INTO users1 ( username, email, address, mobile, age, password, cpassword) VALUES('$username', '$email', '$address', '$mobile','$age', '$password', '$cpassword')";

$result = mysqli_query($link, $query) or die("Oops Failed! ");




    echo " Thanks $username. Your Information Updated Successfully";
?>

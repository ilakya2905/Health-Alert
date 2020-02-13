<?php

$username = $_POST['username1'];
$email = $_POST['email1'];
$address = $_POST['address1'];

$mobile = $_POST['mobile1'];
$age = $_POST['age1'];
$spl = $_POST['spl1'];

$link = mysqli_connect("localhost", "root", "", "doctormodule");

$query = "INSERT INTO doctordetails ( username, email, address, mobile, age, spl) VALUES( '$username', '$email', '$address', '$mobile','$age', '$spl')";

$result = mysqli_query($link, $query) or die("Oops Failed! ");



echo "Dr.";
    echo $username;
    echo " Information Updated Successfully";
?>

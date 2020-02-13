<?php

    $usermail = $_POST['mail'];
    $password = $_POST['pass'];

    $link = mysqli_connect("localhost", "root", "", "doctormodule");


    $usermail = stripcslashes($usermail);
    $password = stripcslashes($password);
   $usermail = mysqli_real_escape_string($link,$usermail);
$password = mysqli_real_escape_string($link,$password);

   // mysql_connect("localhost", "root", "");
    //mysql_select_db("project");

    $result = mysqli_query($link,"select * from users1 where email = '$usermail' and password = '$password'") 
                or die("Failed to query database".mysqli_error($link));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($usermail==''||$password==''){
        $alertmsg= "Fill The Required Fields!!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
    }
    else if ($row['email'] == $usermail && $row['password'] == $password ){
        $redirect_page = 'http://localhost/blueLine%20Health%20Care/cholestrol.php';
        header('Location: '.$redirect_page);
    } 
    

else {
        $alertmsg= "Login Failed.Invalid mail and password combination.Please Try Again!!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
        
    }


?>
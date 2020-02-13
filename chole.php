<?php

    $cholestrol = $_POST['sample'];
    
   
   $cholestrol = stripcslashes($cholestrol);
if($cholestrol==''){
        $alertmsg= "Fill The Required Fields!!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
    }

else if ($cholestrol<=200){
        $redirect_page = 'cholesnormal.html';
        header('Location: '.$redirect_page);
    } 
else if ($cholestrol>200 && $cholestrol<=239){
        echo "Result : BorderLine High Cholesterol Level";
        $redirect_page = 'cholesrisk.html';
         header('Location: '.$redirect_page);
    } 
else if ($cholestrol>=240){
        $redirect_page = 'choleshigh.html';
        header('Location: '.$redirect_page);
    } 

    
    else{
        $alertmsg= "Invalid!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
    }


?>
<?php

    $cholestrol = $_POST['sample'];
    
   
   $cholestrol = stripcslashes($cholestrol);
if($cholestrol==''){
        $alertmsg= "Fill The Required Fields!!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
    }

else if ($cholestrol<=42){
        $redirect_page = 'sugarnormal.html';
        header('Location: '.$redirect_page);
    } 
else if ($cholestrol>42 && $cholestrol<=47){
        echo "Result : BorderLine High Cholesterol Level";
        $redirect_page = 'predia.html';
         header('Location: '.$redirect_page);
    } 
else if ($cholestrol>=48){
        $redirect_page = 'dia.html';
        header('Location: '.$redirect_page);
    } 

    
    else{
        $alertmsg= "Invalid!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
    }


?>
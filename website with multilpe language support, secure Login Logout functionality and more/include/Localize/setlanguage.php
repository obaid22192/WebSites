<?php
include '../../include/login/functions.php';
sec_session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

 *  */
$webpage =  $_SESSION['filename'];
if(isset($_POST['french']))
{


  
if(isset($_SESSION['en'])){
   
    unset($_SESSION['en']);
    $_SESSION['fr'] = 'french';
  header("Location: $webpage");
   exit();
    }
    else if(isset($_SESSION['nl'])){
       unset($_SESSION['nl']);
    $_SESSION['fr'] = 'french'; 
    header("Location: $webpage");
   
    } 
 else {
     header("Location: $webpage");  
    }
}
else if (isset($_POST['english'])) {
if(isset($_SESSION['fr'])){
   
    unset($_SESSION['fr']);
    $_SESSION['en'] = 'english';
     header("Location: $webpage"); 
    exit();
    }
    else if(isset($_SESSION['nl'])){
       unset($_SESSION['nl']);
    $_SESSION['en'] = 'english'; 
     header("Location: $webpage"); 
    
        
    }
    else
    {
        
         header("Location: $webpage"); 
    }

}
elseif (isset ($_POST['dutch'])) {
    if(isset($_SESSION['fr']))
    {
    unset($_SESSION['fr']);
    $_SESSION['nl'] = 'dutch';
   header("Location: $webpage"); 
    exit();
    }
    else if(isset($_SESSION['en'])){
       
       unset($_SESSION['en']);
    $_SESSION['nl'] = 'dutch'; 
   header("Location: $webpage"); 
   
        
    }
    else{
         header("Location: $webpage"); 
        
    }

}





?>

<?php


//include 'include/LastVisit/cookiepermission.php';

$cookie =  "<span id = welcome> Welcome..! </span>";
if(isset($_COOKIE['lastvisit']))
 { 
 $last = $_COOKIE['lastvisit']; 
 $cookie = "<span id = welcome> Welcome back!</span> ". " You last visited on ". $last; 
  $Month = 2592000 + time(); 
 //this adds 30 days to the current time 
 setcookie("lastvisit", date("F jS - g:i a"), $Month);

 } 
 else if(isset($_POST['install']))
 { 
     $Month = 2592000 + time(); 
 //this adds 30 days to the current time 
 setcookie("lastvisit", date("F jS - g:i a"), $Month);
 $cookie =  "<span id = welcome>Welcome to My site!</span>";
$_SESSION['setcookie'] = 'setcookie';


 }
 elseif (isset($_POST['ignore'])) {
     
     
     $_SESSION['cookieignore'] = 'cookieignore';
 }
 else{
     $cookie = "<span id = welcome> Welcome..! </span>";
     
     
 }
 

  
 
 ?>


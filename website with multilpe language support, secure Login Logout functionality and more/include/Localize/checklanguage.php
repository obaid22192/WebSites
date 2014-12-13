<?php

//header('Cache-control: private');
include 'language.php';
$default = ' ';


if(isset($_SESSION['fr']))
{
    $default = 'fr';
   
    //unset( $_SESSION['french']);
}
else if(isset($_SESSION['en'])){
    $default = 'en';
    
}
else if (isset ($_SESSION['nl'])){
    $default = 'nl';
    
}
 else {
$lan = getenv("HTTP_ACCEPT_LANGUAGE");
$code = substr($lan, 0 , 2);

switch($code)
{
    case "en":
      $default = $code;
          break;
    case "fr":
       $default = $code;
         break;
    case "nl":
        $default = $code;
        break;
    default :
       $default = "en";
    
}
 $_SESSION[$default] = 'default';

}


?>
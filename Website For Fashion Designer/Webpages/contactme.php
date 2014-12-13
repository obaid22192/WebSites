<?php




if(isset($_POST['name'], $_POST['email'] , $_POST['message']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mess = $_POST['message'];
    
    $headers =  "From: $email";
   $success=  mail("obaid_habib34@hotmail.com", "Visitor wants to contact", $mess ,$headers );
   if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
    
}




?>
<html>
    <head>
        <link rel="shortcut icon" href="../Images/logo.png">
        <title>Contact</title>
        <script> 

delayRedirect('contact.php');

 

function delayRedirect(url)
 {
 var Timeout = setTimeout("window.location='" + url + "'",4000);
 }
</script> 
        
    </head>
    <body>
  
        
    </body>
    
</html>
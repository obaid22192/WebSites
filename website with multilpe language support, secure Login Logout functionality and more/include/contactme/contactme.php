<?php
include_once '../login/functions.php';
include_once '../login/psl-config.php';
include_once '../login/db_connect.php';



if(isset($_POST['name'], $_POST['email'] , $_POST['message']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mess = $_POST['message'];
    
    $headers =  "From: $email";
   
$data = $mysqli->query("INSERT INTO contact (Name,Email,Message)
                                    VALUES ('$name', '$email','$mess')");
       mail("obaid_habib34@hotmail.com", "Visitor wants to contact", $mess ,$headers );
    
}




?>
<html>
    <head>
        <script> 

delayRedirect('../../contact/contact.php');

 

function delayRedirect(url)
 {
 var Timeout = setTimeout("window.location='" + url + "'",4000);
 }
</script> 
        
    </head>
    <body>
        
        <?php  if($data) 
        {
            echo "<h1> THANK YOU TO CONTACT ME...... :</h1> ";
            
        }
        else 
        {
            Echo "<h1>Error while connecting.....</h1> ";
            
        }
            ?>
        
    </body>
    
</html>
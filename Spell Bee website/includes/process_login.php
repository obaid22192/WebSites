<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 $filenameredirect = $_SESSION['filename'];

if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header("Location: $filenameredirect");
    
        
    } 
    
    else  if(isset($_SESSION['attempts'])) 
      {
          $temp =$_SESSION['attempts'];
      
           $to = $email;
           $subject = "SUSPICIOUS sign in prevented";
           $txt = "Someone recently used your password to try to sign in to your  Account "
                   . "We prevented the sign-in attempt in case this was a hijacker trying to access your"
                   . " account. Please review the details of the sign-in attempt:"
                   . "If you do not recognize this sign-in attempt, someone else might be trying to access your account. ";;
           $headers = "From:accounts@alertmail.com" ;
           mail($to,$subject,$txt,$headers);
           header("Location: ../index.php?locked=1");

       }
      
    else {
        // Login failed 
        header('Location: ../index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
    header('Location: ../index.php?error=1');
}

?>
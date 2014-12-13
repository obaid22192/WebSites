<?php
if(isset($_POST['email'])) {

    $email_to = "posstech@hotmail.nl";
    $email_subject = "Contact Form";
 
    function died($error) {
        echo  $error."<br /><br />";        
        die();
    }
 
    // validation expected data exists
 
     if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('The Form You Submitted Is Invalid.');          
 
    }
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
    
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
   $error_message .= '<p style="color:white;margin-top:-150px;padding-left:130px">*The Email You Entered Is Missing Or Invalid.</p>';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= '<p style="color:white;padding-left:130px">*The Name You Entered Is Missing Or Invalid.</p>';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= '<p style="color:white;padding-left:130px">*The Comments Are Missing or Invalid.</p>';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below:\n\n";
    
 
    $email_message .= "Name: ".($name);
 
    $email_message .= "Email: ".($email_from);
 
    $email_message .= "Comments: ".($comments);
 
     
 
     
 
// create email headers
 
$headers = "From: website@possmail.com";
 
mail($email_to,$email_subject,$email_message,$headers);  
 
echo '<p style="color:white; margin-top:-50px; padding-left:130px">Thank You Contacting For Poss. You Will Receive A Relpy Via Email Shortly!</p>';
  
}
 
?>
 

 

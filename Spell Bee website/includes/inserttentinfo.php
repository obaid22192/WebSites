<?php 
include 'db_connect.php';
include 'functions.php';
sec_session_start();

if(isset($_SESSION['user_id']))
{
$userid =  $_SESSION['user_id'];
$guest1 = $_POST['guest1'];
$guest2 = $_POST['guest2'];
$guest3 = $_POST['guest3'];
$guest4 = $_POST['guest4'];
$guest5 = $_POST['guest5'];
$today = date("Y-m-d");
if(isset($_GET['id']))
{
   $tid = $_GET['id']; 
    
}
echo $today;
echo $userid .PHP_EOL;
echo $guest1 .PHP_EOL;
echo $guest2 .PHP_EOL;
echo $guest3 .PHP_EOL;
echo $guest4 .PHP_EOL;
echo $guest5 .PHP_EOL;
echo $tid;

  if ($insert_stmt = $mysqli->prepare("INSERT INTO `tent_booked_by`  VALUES ('$userid',$tid, '$guest1','$guest2','$guest3','$guest4','$guest5','$today',0)")) {
           // $insert_stmt->bind_param('ssssssssssssss',$nicnumber,0,$username,$lastname,$nicnumber , $mobile,$address,$email,$password,$gender,$dateofbirth, 0 , 0,0 );
            // Execute the prepared query.
            if ($insert_stmt->execute()) {
              
               
    echo "inserted sucessfully";
    
            }
     else {
         
         echo "insertion failed";
     }
      
    }
    else"i hate you";
}
 else {
    echo 'i love you';    
}

?>
<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
 sec_session_start();
$error_msg = "";
 
if (isset($_POST['username'],$_POST['lastname'],$_POST['dd'], $_POST['mm'],$_POST['yyyy'],$_POST['NICNumber'], $_POST['email'], $_POST['mobile'] ,$_POST['Address'],$_POST['p'],$_POST['gender'])) {
    // Sanitize and validate the data passed in
   
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
  $lastname = $_POST['lastname'];
  $day = $_POST['dd'];
  $month = $_POST['mm'];
  $year = $_POST['yyyy'];
  $nicnumber = $_POST['NICNumber'];
  $mobile = $_POST['mobile'];
  $address = $_POST['Address'];
  $gender = $_POST['gender'];
  $dateofbirth =$year."-".$month."-".$day;
  $loginpass = $_POST['p'];
  
 //  $pic=($_FILES['photo']['name']);
 
  
  if(isset($_FILES['photo']))
  {
      $file = $_FILES['photo']['tmp_name'];
         $image_name =   addslashes ($_FILES["photo"]["name"]);
         $pic = addslashes (file_get_contents($file));
         $image_size = addslashes ($_FILES["photo"]["type"]);
     
  }
     
  
  
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
 
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT ID FROM client WHERE Email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">A user with this email address already exists.</p>';
        }
    } else {
        $error_msg .= '<p class="error">Database error</p>';
    }
$prep_stmt1 = "SELECT ID FROM client WHERE Email = ? LIMIT 1";
    $stmt1 = $mysqli->prepare($prep_stmt1);
     if ($stmt1) {
        $stmt1->bind_param('s', $nicnumber);
        $stmt1->execute();
        $stmt1->store_result();
 
        if ($stmt1->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">A user This NIC Number already exists.</p>';
            
        }
    } else {
        $error_msg .= '<p class="error">Database error</p>';
    }
 
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
 
    if (empty($error_msg)) {
        // Create a random salt
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
        
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO `client` ( `RFID` , `RFID_Assigned` , `First_name` , `Last_name` , `ID` , `Phone` , `Address` , `Email` , `Password`,  `salt` , `Gender` , `Birth_day` , `Balance` , `Event_fee` , `present_ In_event`, `Photo` )  VALUES ($nicnumber,0,'$username','$lastname','$nicnumber' , '$mobile','$address','$email','$password','$random_salt','$gender','$dateofbirth', 0, 0,0,'$pic')")) {
           // $insert_stmt->bind_param('ssssssssssssss',$nicnumber,0,$username,$lastname,$nicnumber , $mobile,$address,$email,$password,$gender,$dateofbirth, 0 , 0,0 );
            // Execute the prepared query.
            if ($insert_stmt->execute()) {
              
                 // sleep(10);
        if (login($email, $loginpass, $mysqli) == true)
                    {
        // Login success 
        
        header("Location: ../index.php?true=1");
    } else
        {
        // Login failed 
        header('Location: ../index.php?error=1');
    }
 
            }
      else
      {
      header('Location: ../register/register.php?registrationfailed=1'); 
        }
      
    }
 else {
 echo $error_msg;       
 }
}
}

?>
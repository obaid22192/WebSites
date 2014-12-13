<?php
include_once '../login/functions.php';
sec_session_start();
include '../../include/Login/db_connect.php';
include 'Coments.php';


$obj = new Coments();

   if(isset($_POST['message']))
            {
              $obj = new Coments();
              $mess = "Blank";
               $mess = $_POST['message'];
                $user = $_SESSION['username'];
                $filename1 = $_GET['file'];
                echo $filename1;
                $obj->setcomment($filename1,$user, $mess ,$mysqli);
                
               }
              


?>
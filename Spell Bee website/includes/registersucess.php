<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';

$pass = $_REQUEST['pass'];
$email1 = $_REQUEST['mail'];
 if (login($email1, $pass, $mysqli) == true)
                    {
        // Login success 
        
        header("Location: ../index.php?true=1");
    } else
        {
        // Login failed 
        header('Location: ../index.php?error=1');
    }
 ?>

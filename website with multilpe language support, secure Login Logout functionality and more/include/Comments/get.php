<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../../include/Login/db_connect.php';
include 'Coments.php';
$obj = new Coments();
$filename1 = $_GET['file'];
$rowres = $obj->getcomment($filename1, $mysqli);
 
for($count = 0 ; $count < count($rowres);$count++ )
{
      
    echo "<h2><img src = \"../../user.jpg\"  height=\"42\" width=\"42\"> ".$rowres[$count]->name."</h2><br>" ;
    
  
       echo $rowres[$count]->comment."<br><hr>";
}
?>

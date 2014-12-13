<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coments
 *
 * @author Obaid92
 */

include '../../include/login/db_connect.php';
include 'Storedata.php';
//$s = new SplObjectStorage();
class Coments {
    
    function setcomment($pagename , $name , $comment ,$mysqli)
    {
       $insery_stmt = $mysqli->prepare("INSERT INTO `PageComments`(`page`, `Name`, `comment`) VALUES ('$pagename','$name','$comment')");
       
      if($insery_stmt->execute())
      {
          echo 'inserted sucess fully';
          
      }
      else {
          
          echo 'insertion failed';
      }
    }
    function getcomment($pagename, $mysqli){
       
        $s = new SplObjectStorage();
        $stmt = $mysqli->prepare("SELECT * FROM `PageComments` WHERE `page` LIKE'%$pagename%'");
        
         $stmt->execute();
         $res = $stmt->get_result();
        for ($row_no = ($res->num_rows - 1); $row_no >= 0; $row_no--) {
        $res->data_seek($row_no);
        $row = $res->fetch_assoc();
        $obj = new Storedata($row['page'], $row['Name'], $row['comment']);
       
        $data[] = $obj;
        
        }
       if(!isset($data))
       {
           return null;
       }
 else {
           return $data;
       }
        
    }
    
    
}
?>
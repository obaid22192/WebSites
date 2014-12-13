<?php

include_once 'storedata.php';
//sec_session_start();
if(isset($_SESSION['user_id']))
{
$temp =  $_SESSION['user_id'];

$stmt = $mysqli->prepare("SELECT * FROM `client` WHERE  `ID` = '$temp' ");
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();

$stmt = $mysqli->prepare("SELECT * FROM  `tent_booked_by`  WHERE  `Client_RFID` = '$temp' ");
$stmt->execute();
$res2 = $stmt->get_result();
$rowrfidcheck = $res2->fetch_assoc();

$stmt = $mysqli->prepare("SELECT * FROM `tents_info` WHERE `Availability` = 1");
$stmt->execute();
         $res1 = $stmt->get_result();
         if($res1->num_rows > 0)
         {
        for ($row_no = 0; $row_no < $res1->num_rows; $row_no++) {
        $res1->data_seek($row_no);
        $row1 = $res1->fetch_assoc();
        $obj = new storedata($row1['TentId'], $row1['Location'], $row1['Total_Cost'],$row1['Availability']);
       
        $data[] = $obj;
        
        }
        
         }
 else { $data[] = null;}

}



?>
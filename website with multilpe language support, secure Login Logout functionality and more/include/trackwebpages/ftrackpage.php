<?php


$ipaddress = $_SERVER['REMOTE_ADDR'];
$date = date ("M dS H:i:s");

$message = "\n $page _ $ipaddress _ $date  \n" .PHP_EOL;


$File = $_SESSION['track'].".txt";
$Open = fopen($File, "a+");
if ($Open){
   
fwrite($Open, "$message");
fclose ($Open);
}

?>

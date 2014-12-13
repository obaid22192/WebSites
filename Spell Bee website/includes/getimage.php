<?php
mysql_connect("athena01.fhict.local","dbi281301","2yHbIUCWYC");
mysql_select_db("dbi281301");
      $id = mysql_real_escape_string($_GET['id']);                        
    $query = mysql_query("SELECT Photo
                             FROM client
                             WHERE  ID = '$id'") ;                            
   
                                     
    while($row = mysql_fetch_assoc($query))
    {
        $imagedata = $row["Photo"];
    }
                           
   header("content-type: image/jpeg");
   echo $imagedata;                       

?>


<?php

include_once 'functions.php';
sec_session_start();
include '../localize/checklanguage.php';



$filename = $_SERVER['PHP_SELF'];
$_SESSION['filename'] = $filename;
  include 'loginwindow.php';
 ?>

<html>
    <head> 
        
        <script type="text/javascript">

$(document).ready(function () {
    // Select a link by ID
   
  
   
    $('a.login-window').trigger('click');
    
    // Select the first link with a certain class
    
});

</script>
<style>
   body { background:   coral no-repeat center center fixed; } 
</style>
    </head>
    <body >

         <a href="#login-box" id ="AutoLink" class="login-window" ></a>
        
        </body>
        
    
    
    
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Success</title>
     <script> 

delayRedirect('index.php');

 

function delayRedirect(url)
 {
 var Timeout = setTimeout("window.location='" + url + "'",4000);
 }
</script> 



      
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <h1>Registration successful!</h1>
        
        <p>You can now go back to the <a href="index.php">login page</a> and log in</p>
    </body>
</html>
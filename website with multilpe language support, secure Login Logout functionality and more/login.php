<?php
include_once 'include/login/db_connect.php';
include_once 'include/login/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="/Ita2website/js/sha512.js"></script> 
        <script type="text/JavaScript" src="/Ita2website/js/forms.js"></script> 
    </head>
    <body>
        <?php
        
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="include/Login/process_login.php" method="post" name="login_form">                  
            Email: <input type="text" name="email" />
            Password: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
        <p>If you don't have a login, please <a href="register.php">register</a></p>
        <p>If you are done, please <a href="/Ita2website/include/login/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
    </body>
</html>
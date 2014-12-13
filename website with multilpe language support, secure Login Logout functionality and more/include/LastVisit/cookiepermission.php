
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script>

</script>

<script type="text/javascript">
$(document).ready(function() {
	$('a.cookie-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
       
	$('a.close , #mask').live('click', function() {
            
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
        
	return false;
	});
});
</script>


</head>
<body>
 <?php
        
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>
<div class="container">
	<div id="content">
    
		
        
        <div id="cookie-box" class="login-popup">
        <a href="#" class="close"><img src="/Ita2website/include/login/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <p>Please turn you browsers accepts cookies option on and accept cookies <br>to proceed if you do not want to allow cookies installation <br> please choose ignore to proceed.  </p>
        <form method="post" class="signin" action="index.php" name="login_form">
                <fieldset class="textbox">
            	
                    <table>
                        <tr> 
                            <td>  <button type="submit" id = "submit1" class="submit button" name ="install" >Install Cookies</button></td>
                            <td>  <button type="submit" id = "submit1" class="submit button" name ="ignore" >Ignore</button></td>
                        </tr>
                        
                    </table>
              
                
               
                
                
                </fieldset>
          </form>
         
		</div>
            
    </div>
</div>
   

</body>
</html>
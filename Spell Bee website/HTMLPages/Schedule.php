<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
 
sec_session_start();
 $filename = $_SERVER['PHP_SELF'];
$_SESSION['filename'] = $filename;
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/pro_dropdown_2.css" rel="stylesheet" type="text/css">
<script src="../javascript/stuHover.js" type="text/javascript"></script>
<script type="text/JavaScript" src="../js/sha512.js"></script> 
<script type="text/JavaScript" src="../js/forms.js"></script> 

<style>

 
		
		
		body {
	background:url(../backgroundimage/bee-sweet-request-yellow.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	font-weight: bold;
	text-align: left;
		}
	    #page-wrap { width: 96%; margin: -5px auto; padding: 20px;  -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 40px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
		#topimage{  width:100%;margin: -5px  auto; padding: 0px;  -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black;}
		#image{width:100%;max-width:100%}
		#menu{ margin: 10px auto;  -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black;}
		#bee{margin :0px auto;}
			#images{width:100%;
    text-align:center;
    margin:0px auto; 
}
#images a{

    margin:0px 20px;
    display:inline-block;
    text-decoration:none;
    color:black;
 }
		
		
</style>
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('a.login-window').click(function() {
		
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
	$('a.close, #mask').live('click', function() { 
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
 <div id="page-wrap">
<div id = "topimage">
 <img src="../backgroundimage/header.png" id="image" alt = "" />
 </div>
  
<div id = "menu">

       <ul id="nav">
	    <li class="top"><a href="../index.php" class="top_link"><span><font face="Imprint MT Shadow">Home</span></a></li>
	     	     <li class="top"><a href="#nogo24" id="products" class="top_link"><span class="down">About The Bee</span></a>
         <ul class="sub">
			<li><a href="History.php">History</a></li>
			<li><a href="Rules_and_regulations.php">Rules N Regulation</a></li>
            </ul> 
	</li>
	<li class="top"><a href="My_Spell_bee.php" id="services" class="top_link"><span class="down">My Spell Bee</span></a>
		
	</li>
	<li class="top"><a href="#nogo27" id="contacts" class="top_link"><span class="down">How To Reach Us</span></a>
	<ul class="sub">
			<li><a href="Contact.php">Contact</a></li>
			<li><a href="FAQ.php">FAQ</a></li>
			
		</ul>	
	</li>
		
	
      </ul>
	  
    </div>
 
<div class="container">
	<div id="content">
    
		<div class="post">
    	<table style=" margin-left:74%;">
                        <tr>
        	<td><div class="btn-sign">
			<?php  if($logged == "in")
                        {
                            echo "<a href=\"../includes/logout.php\">  Sign out </a>";
                            echo '|';
                            $temp = $_SESSION['username'];
                            echo $temp; // later here come my spell bee
                        }
                        else {
                            
                         echo "<a href=\"#login-box\" class=\"login-window\">  Login </a>";
                        }
                            ?>
				
                              
                               
        	</div> </td>
                        </tr>
                        </table>
			
		</div>
        
         <div id="login-box" class="login-popup" align = "">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <div id = "formdata" style="text-align:center">
          <form method="post" class="signin" action="../includes/process_login.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Email</span>
                <input id="username" name="email" value="" type="text" autocomplete="on" placeholder="Email">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                <button class="submit button" type="button" onclick="formhash(this.form, this.form.password);">Sign in</button>
                
                <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>
                
                </fieldset>
          </form>
        </div>
        <span>If you don't have a login, please <a href="../register/register.php">register</a><br></span>
        
		</div>
    
    </div>
    
<div id = "scheddiv">
 <img src="../backgroundimage/bg.jpg">
<h2> Bee Schedule </h2>
 <h3>Note: All time schedules is to be strictly adhered to.</h3>
 <table width="1042" height="317" border="2" cellspacing="2" background="../backgroundimage/2ndstrip bg.jpg">
   <caption class="tablecaption">
     Daily Schedule
   </caption>
   <tr>
     <th scope="col">Date</th>
     <th scope="col">Activity</th>
     <th scope="col">Reporting Time for Activities</th>
     <th scope="col">Starting Time</th>
   </tr>
   <tr>
     <td>14-05-2014</td>
     <td>Round 1</td>
     <td>11:00am </td>
     <td>12:00pm</td>
   </tr>
   <tr>
     <td>15-05-2014</td>
     <td>Round 2</td>
     <td>11:00am</td>
     <td>12:00pm</td>
   </tr>
   <tr>
     <td>16-05-2014</td>
     <td>Finals</td>
     <td>9:00am</td>
     <td>10:00am</td>
   </tr>
 </table>
 
    </div>
</body>
</html>

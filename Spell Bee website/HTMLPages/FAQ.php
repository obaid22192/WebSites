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

<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/pro_dropdown_2.css" />
<script src="../javascript/stuHover.js" type="text/javascript"></script>

<style>

 
		
		
		body { 
			
			background:url(../backgroundimage/bee-sweet-request-yellow.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size:cover;
			
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
		
		
.STYLE2 {font-size: 18px}
.STYLE4 {
	color: #003300;
	font-weight: bold;
	font-style: italic;
}
.STYLE5 {font-size: 24px; color: #003300; }
.STYLE6 {color: #000033}
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

 <div id="page-wrap">
 <div id = "topimage">
 <img src="../backgroundimage/header.png" id="image" alt = "" /> </div>
  
   <div id = "menu">

       <ul id="nav">
	    <li class="top"><a href="../index.php" class="top_link"><span><font face="Imprint MT Shadow">Home</span></a></li>
	    	     <li class="top"><a href="#nogo24" id="products" class="top_link"><span class="down">About The Bee</span></a>
         <ul class="sub">
			<li><a href="History.html">History</a></li>
			<li><a href="Rules-Regulations.html">Rules N Regulation</a></li>
            </ul> 
	</li>
	<li class="top"><a href="My Spell Bee.html" id="services" class="top_link"><span class="down">My Spell Bee</span></a>	</li>
	<li class="top"><a href="#nogo27" id="contacts" class="top_link"><span class="down">How To Reach Us</span></a>
	<ul class="sub">
			<li><a href="Contact.html">Contact</a></li>
			<li><a href="FAQ.html">FAQ</a></li>
	  </ul>	
	</li>
      </ul>
</div>
 
<div class="container">
	<div id="content">
    
		<div class="post">
    	
        	<div class="btn-sign">
			<a href="../register/register.php" id = "register" >Register | </a> <!--register page link -->
				<a href="#login-box" class="login-window">  Login </a>        	</div>
		</div>
        
        <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="../WebsitePics/ClosePop.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                <button class="submit button" type="button">Sign in</button>
                
                <p>
                <a class="forgot" href="#">Forgot your password?</a>                </p>
                </fieldset>
          </form>
		</div>
    </div>

<div class="register1">
  <h3><b>Frequently Asked Questions</b></h3>
<h4>Enrollment:</h4>
<li class="STYLE1"><a href="#faq1">When is the deadline for enrollment? </a></li>
<li class="STYLE1"><a href="#faq2">How do I enroll my school? </a></li>
<li class="STYLE1"><a href="#faq3">How do I enroll my child? </a></li>

<h4>Spelling Bee:</h4>
<li class="STYLE1"><a href="#faq4">When is the Spelling Bee?</a></li>
<li class="STYLE1"><a href="#faq5">How does someone qualify for the Spelling Bee?</a></li>

<br>
<br>

<div class="STYLE2" id="faq1">
<li>When is the deadline for enrollment?</li>
<br>&nbsp &nbsp There is no deadline for the enrollment,you can enroll on anytime until the end of the event.</div>
<span class="STYLE2"><br>
<br>
</span>
<div class="STYLE2" id="faq2">
<li>How do I enroll my school?</li>
<br>&nbsp &nbsp You could connect with the organizing committee directly.</div>
<span class="STYLE2"><br>
<br>
</span>
<div class="STYLE2" id="faq3">
<li>How do I enroll my child?</li>
<br>&nbsp &nbsp You could register in our website by yourself or your child could connect his/her school to get information about the enrollment.</div>
<br><br>
<div class="STYLE2" id="faq4">
<li>When is the Spelling Bee?</li>
<br>&nbsp &nbsp The event will hold on 6th June(Fri),2014,which will last 3 days until 8th June(Sun),2014.</div>
<span class="STYLE2"><br>
<br>
</span>
<div class="STYLE2" id="faq5">
<li>How does someone qualify for the Spelling Bee?</li>
<br>&nbsp &nbsp There are no special qualifications for this event,the things you need are passion and confidence!<span class="STYLE2"><br>
<br>
</span></div>
</div>

<div align="center"><span class="STYLE5"><span class="STYLE6"> More question?Please</span> <a href="Contact.html" class="STYLE4 STYLE5"><u>Contact</u></a> <span class="STYLE6">us!</span></span>
</div>
</body>


</body>

</html>
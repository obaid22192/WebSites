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



<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
	<script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

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
  <div class = "register2">
<img src="../backgroundimage/hall_of_fame_494x175.jpg" width="740" height="105" >
<h2> 2012 Season </h2>
<div class="register3">
<img src="../backgroundimage/Spelling-beewinner1.jpg">
<h4> Full Name: Pat Nevinukus</h4>
<h4> City: Amsterdam </h4>
<h4> RFID Number: 221345 </h4>
<h5> Pat won the 2012 season spelling the word "Knaidel". He qualified from the 1st round with ease and didn't look like a fierce competitor until the finals where he spelt very difficult words with utmmost ease. He took away with him $3,000.</h5><hr/>
<h2> 2010 Season </h2>
<div class="register3">
<img src="../backgroundimage/51171afdc93c1.image.jpg">
<h4> Full Name: Anna Renkema</h4>
<h4> City: Texas </h4>
<h4> RFID Number: 218950 </h4>
<h5> Anna was able to spell the word "enthomolgy" and therefore walked away as the winner of the 2010 edition. She showed a lot fo courage being able to beat Phil who was tipped to win that year's edition. She took away with her $2,500.</h5><hr/>
<h2> 2008 Season </h2>
<div class="register3">
<img src="../backgroundimage/Spelling-Bee-Champion.jpg">
<h4> Full Name: Els Estep</h4>
<h4> City: Paris </h4>
<h4> RFID Number: 205678 </h4>
<h5> A real fighter and champion, Els ended up becoming. She won the finals spelling the word "osteopath". She took away with her $2,500 and some other prizes from our sponsors.</h5><hr/>
<h2> 2006 Season </h2>
<div class="register3">
<img src="../backgroundimage/0b0fc24c-6c61-4116-a4da-8fc15ad4cff8.jpg">
<h4> Full Name: Beulah Cuppen</h4>
<h4> City: Brussels </h4>
<h4> RFID Number: 267834 </h4>
<h5> Coupled with almost loosing out in the first round and last to qualify in the 2nd round, Beulah went on to win the 2006 season spelling the word "grotesque". She walked away with her $2,500.</h5><hr/>
<h2> 2004 Season </h2>
<div class="register3">
<img src="../backgroundimage/42712st.andrewbeeze20121009ia.jpg">
<h4> Full Name: Andrew Breeze</h4>
<h4> City: Eindhoven </h4>
<h4> RFID Number: 267019 </h4>
<h5> Andrew Breeze like his name is, breezed through each round and then the finals to win the first season of the event. He also won a scholarship to university given by the King. Finally, he went home with $2,500.</h5>
</div>
 
  </div>
</body>
</html>

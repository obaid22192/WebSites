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
<script type="text/JavaScript" src="../js/sha512.js"></script> 
<script type="text/JavaScript" src="../js/forms.js"></script> 
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
	    <li class="top"><a href="../sindex.php" class="top_link"><span><font face="Imprint MT Shadow">Home</span></a></li>
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
    
    <div class="BodyMsg2">
    <img src="../backgroundimage/rules-regulation.jpg" width="890" height="139">

<h4><b>Please read the following rules and regulations before registering for the event.</b></h4>
This competition is a three day run event divided into phases with some rules and regulations every competitor should adhere to.
<h3>Rounds At The Finals:</h3>
<b>Round 1: All Registered Participants</b>
<p>This is a time bound written test. The top 5 participants from each city/country represented move through.</p>
<b>Round 2: Top 5 In Each City/Country</b>
<p>This is a dictation round in which the students from each city with the top 5 scores from round 1 will participate. The top scorer of Round 1 receives an immunity that protects him/ her from elimination in round 2. He/ she therefore automatically qualify for Round 3 regardless of their performance in round 2. The best scored individual from each city (+ top scorer of round 1, if necessary), move through to the next round.</p>
<b>Round 3: Finals</b>
<p>This is a dictation round in which the best students from each city and country participate and battle it out until the winner of the event emerges.</p>

<h3>Instructions</h3>
<li> Entry restricted to students carrying valid RFID Number only.</li>
<li>All participating students should reach the venue 45 minutes prior to the scheduled time.</li>
<li>Students to carry black/blue ball pen, HB pencil, writing pad, water and basic snacks if needed.</li>
<li>Students must be accompanied by a school coordinator or their parents or even friends.</li>
<li> Participants indulging in unfair means or foul play will be immediately disqualified.</li>
<li>All personal details submitted must be accurate and complete and are subject to proof upon request by the organizer. The organizer reserves the right, at any time, to verify the validity of entries and entrants.</li>
<li> All answer sheets will be evaluated by the organizer and organizer's decision will be final and no correspondence will be entertained in this regards.</li>
<li> The organizers will not be responsible for any loss/damage of any personal belongings of the participants or their parents. </li>

</body>

</html>
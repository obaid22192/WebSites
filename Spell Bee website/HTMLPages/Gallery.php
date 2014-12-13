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




<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="../engine1/style.css" media="screen" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="../engine2/style.css" media="screen" />
	<script type="text/javascript" src="../engine2/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->





<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="../engine3/style.css" media="screen" />
	<script type="text/javascript" src="../engine3/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="../engine4/style.css" media="screen" />
	<script type="text/javascript" src="../engine4/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body>
<?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
 
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
	   <div class ="BodyMsg3">
<div id = "wowafrica">
	<div id="wowslider-container2">
	<div class="ws_images"><ul>
<li><img src="../data2/images/sandy+shivashankar+students+compete+honors+kmsyyjjy6mix.jpg" alt="Els receiving a warm embrace from her parents after winning the bee in 2006" title="Els receiving a warm embrace from her parents after winning the bee in 2006" id="wows2_0"/>Beulah cuppen wins the spelling bee and is hugged by emotional parents</li>
<li><img src="../data2/images/cvbf.jpg" alt="Els picking up her trophy for the 2006 season" title="Els picking up her trophy for the 2006 season" id="wows2_1"/>Miss. Beulah is being presented her awards for winning the 2nd edition of the spelling bee held in 2006.</li>
<li><img src="../data2/images/pho09may29163718.jpg" alt="Els and her parents" title="Els and her parents" id="wows2_2"/>Another picture of Beulah with her very happy parents.</li>
<li><img src="../data2/images/judgestimekeeperandmc.jpg" alt="Our judges and timekeeper" title="Our judges and timekeeper" id="wows2_3"/>A pic of our judges and timekeeper from the event in 2006</li>
<li><img src="../data2/images/scrippsspellingbee2007.jpg" alt="Spelling-Bee-2006" title="Spelling-Bee-2006" id="wows2_4"/>A contestant trying to spell 'proposterous' during the event.</li>
</ul></div>
<span class="wsl"><a href="http://wowslider.com">Carousel jQuery</a> by WOWSlider.com v4.7</span>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="../engine2/wowslider.js"></script>
	<script type="text/javascript" src="../engine2/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</div>






<div id = "wowafrica2">
<div id="wowslider-container1">
<div class="ws_images"><ul>
<li><img src="../data1/images/spellingbee2007.jpg" alt="One of the contestants" title="One of the contestants" id="wows1_0"/>A contestant using her technique to spell a word in the 2004 season</li>
<li><img src="../data1/images/spellingfeb2012aefs18.jpg" alt="A view of the judges" title="A view of the judges - 2004 Season" id="wows1_1"/>Our eloquent judges during the premier of the event</li>
<li><img src="../data1/images/spellingbee016a.jpg" alt="A cross section of the contestants of the finals" title="A cross section of the contestants of the finals of the 2004 season" id="wows1_2"/>The contestnts who qualified for the finals about to get underway</li>
<li><img src="../data1/images/2581778.jpg" alt="Contestant 35 trying to spell a word" title="Contestant 35 trying to spell a word" id="wows1_3"/>Paul Garvin trying to spell a word in the first round.</li>
</ul></div>
<span class="wsl"><a href="http://wowslider.com">Carousel jQuery</a> by WOWSlider.com v4.7</span>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="../engine1/wowslider.js"></script>
	<script type="text/javascript" src="../engine1/script.js"></script>
    
<!-- End WOWSlider.com BODY section -->
</div>
<div id ="wowafrica3">
<!-- Start WOWSlider.com BODY section id=wowslider-container3 -->
	<div id="wowslider-container3">
	<div class="ws_images"><ul>
<li><img src="../data3/images/518c788540f8c.preview620.jpg" alt="Mark the soldier" title="Mark the soldier" id="wows3_0"/>Mark, a contestant in the 2008 season was nicknamed a soldier due to the way he stood when trying to spell words, he came 3rd in the 2008 season</li>
<li><img src="../data3/images/0603spellingbee_full_600.jpg" alt="Sights of the 2008 season" title="Sights of the 2008 season" id="wows3_1"/>A contestant in utter surprise after spelling a very difficult word right</li>
<li><img src="../data3/images/8504440853_17d3d114ce.jpg" alt="Backstage with some contestants and their parents" title="Backstage with some contestants and their parents" id="wows3_2"/>A quick sneak peek backstage with a contestant's family</li>
<li><img src="../data3/images/2735398002.jpg" alt="Our judges in the 2008 event" title="Our judges in the 2008 event" id="wows3_3"/></li>
<li><img src="../data3/images/wherearetheynowpastspellingbeechampions.jpg" alt="Victory roar " title="Victory roar " id="wows3_4"/>Els celebrates winning the 2008 season of the bee</li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Mark the soldier"><img src="../data3/tooltips/518c788540f8c.preview620.jpg" alt="Mark the soldier"/>1</a>
<a href="#" title="Sights of the 2008 season"><img src="../data3/tooltips/0603spellingbee_full_600.jpg" alt="Sights of the 2008 season"/>2</a>
<a href="#" title="Backstage with some contestants and their parents"><img src="../data3/tooltips/8504440853_17d3d114ce.jpg" alt="Backstage with some contestants and their parents"/>3</a>
<a href="#" title="Our judges in the 2008 event"><img src="../data3/tooltips/2735398002.jpg" alt="Our judges in the 2008 event"/>4</a>
<a href="#" title="Victory roar "><img src="../data3/tooltips/wherearetheynowpastspellingbeechampions.jpg" alt="Victory roar "/>5</a>
</div></div>
<span class="wsl"><a href="http://wowslider.com">Carousel jQuery</a> by WOWSlider.com v4.7</span>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="../engine3/wowslider.js"></script>
	<script type="text/javascript" src="../engine3/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</div>
<div id = "wowafrica4">


<!-- Start WOWSlider.com BODY section id=wowslider-container4 -->
	<div id="wowslider-container4">
	<div class="ws_images"><ul>
<li><img src="../data4/images/ap_spelling_bee_contestants_ll_130530_wblog.jpg"alt="A view of round 2 contestants in 2010" title="A view of round 2 contestants in 2010" id="wows4_0"/>Some of the contestants who participated in the 2010 season</li>

<li><img src="../data4/images/nationalspellingbeefinals.jpg" alt="national-spelling-bee-finals 2012" title="national-spelling-bee-finals 2012" id="wows4_1"/>A birds-eye view of the 2012 finals in which Pat won.</li>

<li><img src="../data4/images/spellingbee.jpeg281280x960.jpg" alt="Pat celebrating his victory" title="Pat celebrating his victory" id="wows4_2"/>After a great show of talent on display, pat finally takes home the 2012 spelling bee trophy.</li>

<li><img src="../data4/images/2011spellingbee.jpg" alt="2010 spelling bee" title="2010 spelling bee" id="wows4_3"/>A contestant during the 2010 event.</li>

<li><img src="../data4/images/scrippsspellingbee2007.jpg" alt="Spelling-Bee-2010" title="Spelling-Bee-2010" id="wows4_4"/>Another participant in the 2010 event.</li>
<li><img src="data4/images/original.jpg" alt="A contestant spelling a word" title="A contestant spelling a word" id="wows4_5"/></li>

<li><img src="../data4/images/spellingbeewinner1.jpg" alt="Spelling-bee winner 2012" title="Spelling-bee winner 2012" id="wows4_6"/>It's Pat being honored after a flawless and impressive win.</li>

<li><img src="../data4/images/spelling_bee.jpg" alt="Show of emotions" title="Show of emotions" id="wows4_7"/>One of the different show of emotions after being knocked out of the competition.</li>

</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="A view of round 2 contestants in 2010"><img src="../data4/tooltips/ap_spelling_bee_contestants_ll_130530_wblog.jpg" alt="A view of round 2 contestants in 2010"/>1</a>
<a href="#" title="national-spelling-bee-finals 2012"><img src="../data4/tooltips/nationalspellingbeefinals.jpg" alt="national-spelling-bee-finals 2012"/>2</a>
<a href="#" title="Pat celebrating his victory"><img src="../data4/tooltips/spellingbee.jpeg281280x960.jpg" alt="Pat celebrating his victory"/>3</a>
<a href="#" title="2010 spelling bee"><img src="../data4/tooltips/2011spellingbee.jpg" alt="2010 spelling bee"/>4</a>
<a href="#" title="Spelling-Bee-2010"><img src="../data4/tooltips/scrippsspellingbee2007.jpg" alt="Spelling-Bee-2010"/>5</a>
<a href="#" title="A contestant spelling a word"><img src="../data4/tooltips/original.jpg" alt="A contestant spelling a word"/>6</a>
<a href="#" title="Spelling-bee winner 2012"><img src="../data4/tooltips/spellingbeewinner1.jpg" alt="Spelling-bee winner 2012"/>7</a>
<a href="#" title="Show of emotions"><img src="../data4/tooltips/spelling_bee.jpg" alt="Show of emotions"/>8</a>
</div></div>
<span class="wsl"><a href="http://wowslider.com">Carousel jQuery</a> by WOWSlider.com v4.7</span>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="../engine4/wowslider.js"></script>
	<script type="text/javascript" src="../engine4/script.js"></script>
<!-- End WOWSlider.com BODY section -->

</div>
</div>
    </div>
   
<div id ="page-wrap">

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
    
    </div>
    </div>
</font>


</body>
</html>

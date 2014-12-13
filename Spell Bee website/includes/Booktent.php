<?php 
include 'db_connect.php';
include 'functions.php';
sec_session_start();
if(isset($_POST['addguest']))
{
if(isset($_SESSION['user_id']))
{
$userid =  $_SESSION['user_id'];
$guest1 = $_POST['guest1'];
$guest2 = $_POST['guest2'];
$guest3 = $_POST['guest3'];
$guest4 = $_POST['guest4'];
$guest5 = $_POST['guest5'];
$today = date("Y-m-d");
if(isset($_GET['id2']))
{
   $tid = $_GET['id2']; 
    
}


  if ($insert_stmt = $mysqli->prepare("INSERT INTO `tent_booked_by`  VALUES ('$userid',$tid, '$guest1','$guest2','$guest3','$guest4','$guest5','$today',0)")) {
           // $insert_stmt->bind_param('ssssssssssssss',$nicnumber,0,$username,$lastname,$nicnumber , $mobile,$address,$email,$password,$gender,$dateofbirth, 0 , 0,0 );
            // Execute the prepared query.
            if ($insert_stmt->execute()) {
              
               
    $insert_stmt1 = $mysqli->prepare("UPDATE  `tents_info`  SET   `Availability` = 0 WHERE `TentId`= $tid");
    $insert_stmt1->execute();
    header('Location: ../HTMLPages/My_Spell_bee.php?booked=1');
    
            }
     else {
         
            header('Location : ../HTMLPages/My_Spell_bee.php?bookfailed=1');

     }
      
    }
    else"";
}
 else {
    echo '';    
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/css">


a { 
	text-decoration:none; 
	color:   #4512d8 ; font:  bold;
        
}


.container {width: 960px; margin: 0 auto; overflow: hidden;}

#content {	float: left; width: 100%;}

.post { margin: 0 auto; padding-bottom: 50px; float: left; width: 960px; }



.btn-sign a { color:#fff; text-shadow:0 1px 2px #161616; }

#mask {
	display: none;
	background: #000; 
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: 0.8;
	z-index: 999;
}

.login-popup{
	display:none;
	background: white;
	padding: 10px; 	
	border: 2px solid #ddd;
	float: left;
	font-size: 1.2em;
	position: fixed;
	top: 50%; left: 50%;
	z-index: 99999;
	box-shadow: 0px 0px 20px #999;
	-moz-box-shadow: 0px 0px 20px #999; /* Firefox */
    -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */
	border-radius:3px 3px 3px 3px;
    -moz-border-radius: 3px; /* Firefox */
    -webkit-border-radius: 3px; /* Safari, Chrome */
}

img.btn_close {
	float: right; 
	margin: -28px -28px 0 0;
}

fieldset { 
	border:none; 
}

form.signin .textbox label { 
	display:block; 
	padding-bottom:7px; 
}

form.signin .textbox span { 
	display:block;
}

form.signin p, form.signin span { 
	color:#999; 
	font-size:11px; 
	line-height:18px;
} 

form.signin .textbox input { 
	background:#666666; 
	border-bottom:1px solid #333;
	border-left:1px solid #000;
	border-right:1px solid #333;
	border-top:1px solid #000;
	color:#fff; 
	border-radius: 3px 3px 3px 3px;
	-moz-border-radius: 3px;
    -webkit-border-radius: 3px;
	font:13px Arial, Helvetica, sans-serif;
	padding:6px 6px 4px;
	width:200px;
}

form.signin input:-moz-placeholder { color:#bbb; text-shadow:0 0 2px #000; }
form.signin input::-webkit-input-placeholder { color:#bbb; text-shadow:0 0 2px #000;  }

.button { 
	background: -moz-linear-gradient(center top, #f3f3f3, #dddddd);
	background: -webkit-gradient(linear, left top, left bottom, from(#f3f3f3), to(#dddddd));
	background:  -o-linear-gradient(top, #f3f3f3, #dddddd);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#f3f3f3', EndColorStr='#dddddd');
	border-color:#000; 
	border-width:1px;
	border-radius:4px 4px 4px 4px;
	-moz-border-radius: 4px;
    -webkit-border-radius: 4px;
	color:#333;
	cursor:pointer;
	display:inline-block;
	padding:6px 6px 4px;
	margin-top:10px;
	font:12px; 
	width:214px;
}

.button:hover { background:#ddd; }

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
                window.location.href="../HTMLPages/My_Spell_bee.php"
	}); 
	return false;
	});
});
</script>
 <script type="text/JavaScript" src="/Ita2website/js/sha512.js"></script> 
 <script type="text/JavaScript" src="/Ita2website/js/forms.js"></script> 
<?php if (isset($_GET['id'])) 

echo "<script type=\"text/javascript\">


$(document).ready(function () {
   
    $('a.login-window').trigger('click');
   
    
});
</script>
"
?>
</head>
<body>

<div class="container">
	<div id="content">
    
		
        
         <div id="login-box" class="login-popup" align = "">
             <a href="#" class="close"><img src="../HTMLPages/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
             <p>Please Enter Guest Id numbers (Optional)</p>
            
        <div id = "formdata" style="text-align:center">
            <form method="post" class="signin" action="Booktent.php?id2=<?php echo $_GET['id'] ?>">
                <fieldset class="textbox">
            	<label class="guest1">
                <span>Guest 1</span>
                <input id="username" name="guest1" value="" type="text" autocomplete="on" placeholder="Guest 1">
                </label>
                
               <label class="guest1">
                <span>Guest 2</span>
                <input id="username" name="guest2" value="" type="text" autocomplete="on" placeholder="Guest 2">
                </label>
                    <label class="guest1">
                <span>Guest 3</span>
                <input id="username" name="guest3" value="" type="text" autocomplete="on" placeholder="Guest 3">
                </label>
                    <label class="guest1">
                <span>Guest 4</span>
                <input id="username" name="guest4" value="" type="text" autocomplete="on" placeholder="Guest 4">
                </label>
                    <label class="guest1">
                <span>Guest 5</span>
                <input id="username" name="guest5" value="" type="text" autocomplete="on" placeholder="Guest 5">
                </label>
                
                    <button name = "addguest" class="submit button" type="submit" >Book</button>
                
              
                
                </fieldset>
          </form>
        </div>
    
    </div>
             <a href="#login-box" class="login-window"> </a>
</div>

</body>
</html>


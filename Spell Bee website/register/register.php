<?php
include_once '../includes/register.inc.php';
include_once '../includes/functions.php';

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
			
			background:url(../backgroundimage/2ndstrip%20bg.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			
		}
	    #page-wrap { width: 96%; margin: -5px auto; padding: 20px; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
		#topimage{  width:100%;margin: -5px  auto; padding: 0px;  -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black;}
		#image{width:100%;max-width:100%}
		#menu{ margin: 10px auto;  -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black;}
		#bee{width:100%;margin:0px auto;}
		#box1{width:400px; height:200px;background:red;}
		#title_change{width:330px;
	position:relative;
    float:left;
	padding:2px;
	border-radius:5px;
	background:#000000;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#00c6ff', EndColorStr='#018eb6');
	text-align:center;
	font-size:25px;
	color:#fff;
	text-transform:uppercase;}
	<!--form css-->	
	  
	
	<!--end form css-->
		
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
 <img src = "../backgroundimage/header.png" id="image" alt = "" />
 </div>
  
   <div id = "menu">

       <ul id="nav">
	    <li class="top"><a href="../index.php" class="top_link"><span>Home</span></a></li>
	     <li class="top"><a href="#nogo2" id="products" class="top_link"><span class="down">About the bee</span></a>
         <ul class="sub">
			<li><a href="../HTMLPages/History.php">History</a></li>
			<li><a href="../HTMLPages/Rules_and_regulations.php">Rules N Regulation</a></li>
            </ul>
		
	</li>
	<li class="top"><a href="../HTMLPages/My_Spell_bee.php" id="services" class="top_link"><span class="down">My spell Bee</span></a>
		
	</li>
	<li class="top"><a href="#nogo27" id="contacts" class="top_link"><span class="down">How To Reach Us</span></a>
	<ul class="sub">
			<li><a href="../HTMLPages/Contact.php">Contact</a></li>
			<li><a href="../HTMLPages/FAQ.php">FAQ</a></li>
			
		</ul>	
	</li>
	
		
	
      </ul>
	  
    </div>
 
<div class="container">
	<div id="content">
    
		
			
		
		
    	
        	
		
        
        <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="../close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
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
                <a class="forgot" href="#">Forgot your password?</a>
                </p>
                
                </fieldset>
          </form>
		</div>
    
    </div>
</div>
<div class="register1">
<h2> Spelling Bee - Registration </h2>
<h3> Think you're ready for the spelling bee competition now? </h3>
<div class="formtext">
     <?php
        if (empty($error_msg)) {
            echo $error_msg;
        
        
       echo " <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Email must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
            
        </ul>";
        }
                            ?>
			<form enctype="multipart/form-data" name="frm1" id="frm1" name ="registration_form" method="post" action ="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"  target="_parent">
			<input type="hidden" name="refsite" id="refsite" value="" />
			<input type="hidden" name="adunit" id="adunit" value="" />
			<input type="hidden" name="channel" id="channel" value="" />
			<input type="hidden" name="campaign" id="campaign" value="" />
			<table width="650" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                  <td width="250">First Name<span class="formtext_red">*</span></td>
                   <td width="400"><label for="firstname"></label>
                       <input name="username" type="text"  placeholder="First Name" class="textInput" id="firstname" maxlength="50" value=""  /></td>
                   <span id="unamestatus"></span>
                  </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                  <tr>
                  <td>Last Name<span class="formtext_red">*</span></td>
                  <td><label for="lastname"></label>
                      <input name="lastname" type="text" placeholder="Last Name" class="textInput" id="lastname" maxlength="50"/></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                  <tr>
                    <td>Date of Birth<span class="formtext_red">*</span></td>
                    <td><table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                        <td width="107" align="left" valign="top"><label for="date"></label>
                         <select name="dd"  class="ddSmall" id="dd">
								<option value="" selected="selected">Date</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</td>
                        <td width="107" align="left" valign="top"><label for="month"></label>
                       <select name="mm" class="ddSmall" id="mm"   >
								<option value="" selected="selected">Month</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							</td>
                        <td width="186" align="left" valign="top"><label for="year"></label>
                        <select name="yyyy" class="ddSmall" id="yyyy">
								<option value="" selected="selected">Year</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
						</select>
							</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                  <tr>
                    <td>NIC Number <span class="formtext_red">*</span></td>
                    <td><label for="NIC Number"></label>
                        <input name="NICNumber" type="text" class="textInput" placeholder="Id Number" id="schoolname" maxlength="100"/></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                  <tr>
                    <td>Email ID<span class="formtext_red">*</span></td>
                    <td><label for="email"></label>
                        <input name="email" id="email id" maxlength="50" type="text" placeholder="Valid Email" class="textInput" value="" asdasdasd /><?php echo $error_msg ?></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="10px"></td>
                  </tr>
                  <tr>
                    <td>Mobile Number<span class="formtext_red">*</span></td>
                    <td><label for="mobile no"></label>
                        <input name="mobile" id="mobile" maxlength="10" type="text" placeholder="Mobile Number" class="textInput" value=""  /></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                  <tr>
                    <td>Address<span class="formtext_red"></span></td>
                    <td><label for="Address"></label>
                        <input name="Address" id="Address" maxlength="100" type="text" class="textInput"placeholder="Street,number,City,Post" /></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="10px"></td>
                  </tr>
                  <tr>
                    <td>Password<span class="formtext_red">*</span></td>
                    <td><label for="password"></label>
                    <input name="password" id="password" maxlength="10" type="password" placeholder="Password" class="textInput" value=""  /></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="10px"></td>
                  </tr>
                   <tr>
                    <td>Confirm Password<span class="formtext_red">*</span></td>
                    <td><label for="confirmpwd"></label>
                    <input name="confirmpwd" id="confirmpwd" maxlength="10" type="password" placeholder="ConfirmPassword" class="textInput" value=""  /></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                  <tr>
                   <tr>
                       <td>Gender<span class="formtext_red">*</span></td>
                    <td><table width="400" border="0" cellspacing="0" cellpadding="0">
                        <td width="107" align="left" valign="top"><label for="date"></label>
                         <select name="gender"  class="ddSmall" id="dd">
								<option value="" selected="selected">Gender</option>
								<option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                         </select>
                        </td>
                        </table>
                   </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                   <tr>
                    <td>Picture<span class="formtext_red"></span></td>
                    <td><label for="photo"></label>
                        <input type="file" class="photo" name="photo"</td>
                  </tr>
                  <tr>
                  <td colspan="2" height="8px"></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="formtextsmall" style="color: black;">(*Mandatory fields )</td>
                  </tr>
                  <tr>
                  <td colspan="2" height="10px"></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="font-size:12px;"><input type="checkbox" name="tnc" id="tnc" />
                    <label for="tnc"></label> &nbsp;&nbsp;I agree that all information entered by me is accurate and I accept the <a href = "javascript:void(0)" onclick ="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';">Terms and Conditions</a>.</td>
                  </tr>
                  <tr>
                  <td colspan="2" height="10px"></td>
                  </tr>
                  <tr>
                    <td><input type="image" value="Register" src="../backgroundimage/imagesbutton.jpg" width="110" height="37" border="0"  onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.lastname,
                                   this.form.dd,
                                   this.form.mm,
                                   this.form.yyyy,
                                   this.form.NICNumber,
                                   this.form.email,
                                   this.form.mobile,
                                   this.form.Address,
                                   this.form.password,
                                   this.form.confirmpwd,
                                   this.form.gender,
                                   this.form.tnc);" /></td>
                    <td>&nbsp;</td>
                  </tr>
                  


<div id = "bee" align ="right">  <!--Bee pic div for all pages-->
<img src = "../bee.png"alt =""/>

</div>

</div>
</div>

</body>

</html>
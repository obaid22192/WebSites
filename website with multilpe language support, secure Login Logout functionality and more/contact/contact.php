<?php
include_once '../include/login/functions.php';
sec_session_start();
include '../include/localize/checklanguage.php';
include '../include/changebackground/backgroundchange.php';
$filename = $_SERVER['PHP_SELF'];
$_SESSION['filename'] = $filename;
$_SESSION['registerpath'] = '../register';

  include '../include/login/loginwindow.php';      
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Obaid Habib</title>
    
		<link rel="stylesheet" href="../css/mainmenuestylesheet.css" />
		<link rel="stylesheet" href="../css/footercss.css" />
		<link rel="stylesheet" href="../css/headercss.css" />
		
	
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../css/slider1.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../css/stylesocialnetworks.css" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	     <script type="text/javascript" src="../jquery/script.js"></script>
	
		<style>
		#contact{
                     width: 430px; margin: 60px auto; padding: 60px 30px;
	     margin-top:450px;
		 margin-left:420px;
		 margin-right:50px;
		background: #c9d0de; border: 1px solid #e1e1e1;
       
         
		 
            
            
                
		
		}
	#addpos{margin-top:200px; width:600px; height:300px; }
		#add{
		
		font-size:40px;
		color:blue;
		
		
		}
		body { 
			
			background:url(../BackgroundImage/<?php echo $imageholder;  ?>) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size:cover;
			
		}
                #submit {
 cursor: pointer;
 font-size: 0;
 width: 30px;
 height: 30px;
 border: none;
 margin: 6px;
 background: #000;
 padding: 0;
 
  
}
#form{

margin-left: 88%;
color:#fcfdfd; 

width: 12%;

    
}
#socialplugins{
    
   
color:#fcfdfd; 

width: 20%; 
    
}
body, div, h1, form, fieldset, input, textarea {
	margin: 0; padding: 0; border: 0; outline: none;
}







h1 {
	font-size: 35px; color: #445668; text-transform: uppercase;
	text-align: center; margin: 0 0 35px 0; text-shadow: 0px 1px 0px #f2f2f2;
}

label {
	float: left; clear: left; margin: 11px 20px 0 0; width: 95px;
	text-align: right; font-size: 16px; color: #445668; 
	text-transform: uppercase; text-shadow: 0px 1px 0px #f2f2f2;
}

input {
	width: 260px; height: 35px; padding: 5px 20px 0px 20px; margin: 0 0 20px 0; 
	background: #5E768D;
	background: -moz-linear-gradient(top, #546A7F 0%, #5E768D 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#546A7F), color-stop(20%,#5E768D)); /* webkit */
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
	-moz-box-shadow: 0px 1px 0px #f2f2f2;-webkit-box-shadow: 0px 1px 0px #f2f2f2;
	font-family: sans-serif; font-size: 16px; color: #f2f2f2; text-transform: uppercase; text-shadow: 0px -1px 0px #334f71; 
}
	input::-webkit-input-placeholder  {
    	color: #a1b2c3; text-shadow: 0px -1px 0px #38506b;  
	}
	input:-moz-placeholder {
	    color: #a1b2c3; text-shadow: 0px -1px 0px #38506b; 
	}

textarea {
	width: 260px; height: 170px; padding: 12px 20px 0px 20px; margin: 0 0 20px 0; 
	background: #5E768D;
	background: -moz-linear-gradient(top, #546A7F 0%, #5E768D 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#546A7F), color-stop(20%,#5E768D)); /* webkit */
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
	-moz-box-shadow: 0px 1px 0px #f2f2f2;-webkit-box-shadow: 0px 1px 0px #f2f2f2;
	font-family: sans-serif; font-size: 16px; color: #f2f2f2; text-transform: uppercase; text-shadow: 0px -1px 0px #334f71; 
}
	textarea::-webkit-input-placeholder  {
    	color: #a1b2c3; text-shadow: 0px -1px 0px #38506b;  
	}
	textarea:-moz-placeholder {
	    color: #a1b2c3; text-shadow: 0px -1px 0px #38506b; 
	}
	
input:focus, textarea:focus {
	background: #728eaa;
	background: -moz-linear-gradient(top, #668099 0%, #728eaa 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#668099), color-stop(20%,#728eaa)); /* webkit */
}

input[type=submit] {
	width: 185px; height: 52px; float: right; padding: 10px 15px; margin: 0 15px 0 0;
	-moz-box-shadow: 0px 0px 5px #999;-webkit-box-shadow: 0px 0px 5px #999;
	border: 1px solid #556f8c;
	background: -moz-linear-gradient(top, #718DA9 0%, #415D79 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#718DA9), color-stop(100%,#415D79)); /* webkit */
	cursor: pointer;
}
		</style>
    </head>

    <body>
        <div id = "testtop">
           
              <table    border="0" style=" margin-left:62%;">
                <tr>
                    
                     
                    
                      <?php 
                    
                      if($logged =="out")
                      {
                     $holder = "<td id = col1><a href=\"#login-box\" id = \"AutoLink\" class=\"login-window\" >".$Home[$default]['signin']."</a></td>";
                      $_SESSION['addholder'] = $_SERVER['PHP_SELF'];
                     echo $holder;
                     
                      }
                      else
                      {
                     $holder = "<td id = col2><a href=\"../include/login/logout.php\" >".$Home[$default]['signout']." | " . "</a>" .$_SESSION['username']."</td>";
                     echo $holder;
                      }?>
                     
                    <td id = "col3">
                         <form name ="french1" method="post" action = "../../include/localize/setlanguage.php"> 
               
               <button type="submit" id = "submit" name="french" value="submit"><img src="../languagechangeimages/images.jpg" width="30px" height="30px"  alt="Submit"></button>
               <button  type="submit" id = "submit" name="english" value="submit"><img src="../languagechangeimages/index.jpg" width="30px" height="30px"  alt="Submit"></button>
               <button  type="submit" id = "submit" name="dutch" value="submit"><img src="../languagechangeimages/images1.jpg" width="30px" height="30px"  alt="Submit"></button>        
            </form>
                        
                    </td> 
                   
                    
                </tr>
               
                
            </table>
            
        </div> 
        <p> </p>
		<div id = "mainpage"class="content">
			
			
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="../index.php">
						<img src="../Navigationimages/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default]['title']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['Home_sub']  ?></span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="../Navigationimages/2.jpg"alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default]['Portfolio']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['Portfolio_sub']  ?></span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="../portofolio/whoIam.php"><?php echo $Home[$default]['who_i_am']  ?></a>
							<a href="../portofolio/Skills/skills.php"><?php echo $Home[$default]['skills']  ?></a>
							
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="../Navigationimages/3.gif"" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default]['kashmir']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['mycountry']  ?></span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="../Kashmir/History/history.php"><?php echo $Home[$default]['history']  ?></a>
							<a href="../Kashmir/tourism/tourism.php"><?php echo $Home[$default]['tourism']  ?></a>
							
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="../Navigationimages/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default][ 'Newtechnologies']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['explore']  ?></span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="../NewTechnologies/computers/computers.php"><?php echo $Home[$default]['computers']  ?></a>
						<a href="../NewTechnologies/mobiles/mobiles.php"><?php echo $Home[$default]['mobiles']  ?></a>
						
					</div>
				</li>
				<li>
					<a href="#">
						<img src="../Navigationimages/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default]['contact']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['contact_sub']  ?></span>
						</span>
					</a>
				</li>
			</ul>
		</div>
       <!--slider -->
	   <div class="slider">
      <ul class="slides">
        <li><img src="1.jpg" /></li>
        <li><img src="2.jpg" /></li>
		<li><img src="3.jpg" /></li>
        <li><img src="4.jpg" /></li>
		
      </ul>
	  
      </div>
	<div id = "header">
	<h1 id = "heading"></h1>
	</div>
	
	<div class ="footerclass" id = "footer">
	<h1 id = "footertext"> </h1>
	
	</div>
	
       <!--slider -->
	   <div id="wrapper">
	 
		</div>
	<div id="contact">
	<h1>Contact Me</h1>
        <form action="../include/contactme/contactme.php" method="post">
		<fieldset>
			<label for="name">Name:</label>
			<input type="text" name ="name" id="name" placeholder="Enter your full name" />
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Enter your email address" />
			
			<label for="message">Message:</label>
			<textarea id="message" name ="message" placeholder="What's on your mind?"></textarea>
			
			<input type="submit" value="Send message" />
			
		</fieldset>
	</form>
</div>
        <div class ="footerclass1" id = "footer1">
              <table id ="footertable">
                  <tr>
                      
                      <td id >
                           <div id = "socialplugins">
            <ul class="social" id="jquery">
			
			
			<li class="facebook">
				<a href="http://www.facebook.com/"><strong>Facebook</strong></a>
			</li>
			
			<li class="linkedin">
				<a href="http://www.linkedin.com/"><strong>LinkedIn</strong></a>
			</li>
		
			<li class="rss">
				<a href="http://feeds2.feedburner.com/marcofolio"><strong>RSS</strong></a>
			</li>
			<li class="twitter">
				<a href="http://twitter.com/"><strong>Twitter</strong></a>
			</li>
		</ul>
                </div>
                          
                      </td>
                      <td >    <div id = "refresh">
        
        <?php
         $holder1 =  "<span id = time>".date('h')."</span>";
         $holder2 =  "<span id = time>".date('i')."</span>";
         $holder3 =  "<span id = time>".date('s')."</span>";
          echo  $holder1; 
          echo ':';
          echo  $holder2; 
           
          echo ':' ;
          echo  $holder3; 
         
        
        ?>
        
    </div>  </td>
                      <?php $ip = getenv('HTTP_CLIENT_IP')?:
                     getenv('HTTP_X_FORWARDED_FOR')?:
                     getenv('HTTP_X_FORWARDED')?:
                     getenv('HTTP_FORWARDED_FOR')?:
                     getenv('HTTP_FORWARDED')?:
                     getenv('REMOTE_ADDR');
                     $holderip = "Your IP Address is ".$ip ."  ";
                     echo "<td id = ipcol>$holderip</td>"; ?>
                      
                  </tr>
                  
                  
              </table>
	
	</div>
	  
        <!-- The JavaScript -->
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="../jquery/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src = "../jquery/menuejava.js"></script>

        <script src="../jquery/jquery.blueberry.js"></script>
		<script src="../jquery/jquerysliderrun.js"></script>
		 
        


		
           
        
    </body>
</html>
<?php 
$page = $filename;
$_SESSION['track'] = '../track';
 include '../include/trackwebpages/ftrackpage.php';
?>
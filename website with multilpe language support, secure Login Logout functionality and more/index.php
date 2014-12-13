<?php

include_once 'include/login/functions.php';
sec_session_start();

 include_once 'include/LastVisit/lastvisitcookie.php';
include 'include/localize/checklanguage.php';
include 'include/changebackground/backgroundchange.php';




$filename = $_SERVER['PHP_SELF'];
$_SESSION['filename'] = $filename;
  include 'include/login/loginwindow.php';
  
  include 'include/LastVisit/cookiepermission.php';
   $_SESSION['registerpath'] = 'register';
   
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title><?php echo $Home[$default]['title']  ?></title>
        
		<link rel="stylesheet" href="css/mainmenuestylesheet.css" />
		<link rel="stylesheet" href="css/footercss.css" />
		<link rel="stylesheet" href="css/headercss.css" />
		<link rel="stylesheet" href="css/stylesocialnetworks.css" />
		<link rel="stylesheet" href="css/myinfohomecss.css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="css/slider1.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	     <script type="text/javascript" src="jquery/script.js"></script>
             <script src="http://widgets.twimg.com/j/2/widget.js"></script>
             

</script>
<?php if (isset($_GET['error'])|| isset($_GET['locked'])||isset($_GET['empty'])) 


echo "<script type=\"text/javascript\">


$(document).ready(function () {
   
    $('a.login-window').trigger('click');
   
    
});
</script>
"
    
     
 
 
?>

   
  
   
    
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



<script src="http://code.jquery.com/jquery-latest.js"></script>

<script>
    $(document).ready(function () {
    setInterval(function() {
        $.get("include/Clock/digitalwatch.php", function (result) {
            $('#refresh').html(result);
        });
    }, 1000);
});
    
</script>
		<style>
		#div1{
		width:680px;
		height:200px;
		margin-top:-810px;
		margin-left:210px;
		
		}
		
		#div2{
		width:680px;
		height:200px;
		
		margin-top:-200px;
		margin-left:210px;
		
		}
		#div3{
		width:680px;
		height:200px;
		margin-top:-200px;
		
		margin-left:210px;
		
		}
				.slider1{
width:330px;
height:200px;
overflow:hidden;

margin-left:-40px;
margin-top:210px;




}
.slider1 img li {
width:300px;
height:200px;
display:none;
}
h3 .post {
 
    border-bottom: 1px solid black; 
}

#infot{
margin-left:300px;
font-size:20px;
color:#000;

}	
#test{
 
margin-top:-200px;
margin-left:340px;
color:#000;
}	
#bg{

background:#000 url(BackgroundImage/images.jpg) no-repeat fixed top center ;
width: 1400px;
higeht:1200px;
}
body { 
			
    background:url(BackgroundImage/<?php echo $imageholder;  ?>) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size:cover;
                        font-color: black;
			
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
#tweettest{width: 250px ; 
           height: 250px; 
 }

  tr td:first-child {padding-left:0px;}
  #col1{padding:0px 0px 7px 20px;  }
    #col2{padding:0px 0px 7px 20px;  }
 
  #col5{padding:0px 0px 7px 50px;  }
 #welcome{color: #4512d8 ; font-size: 40px; }
 
 #mainpage {
    background: rgba(150, 100, 100, 0.6);
    -pie-background:  rgba(200, 54, 54, 0.5);
    behavior: url(PIE.htc);
}
       
 
		</style>
	
       
    </head>

    <body  >
      
        <div    id = "testtop">
           
            <table    border="0" style=" margin-left:20%;" >
                <tr>
                    
                     
                    
                      <?php 
                       
                     echo "<td id = \"col4\"> $cookie </td>";
                     
                    
                      if($logged =="out")
                      {
                          
                     $holder = "<td id = col1><a href=\"#login-box\" id = \"AutoLink\" class=\"login-window\" >".$Home[$default]['signin']."</a></td>";
                     
                     $_SESSION['addholder'] = $_SERVER['PHP_SELF'];
                     echo $holder;
                      }
                      else
                      {
                     $holder = "<td id = col2><a href=\"include/login/logout.php\" >".$Home[$default]['signout']." | " . "</a>" .$_SESSION['username']."</td>";
                     echo $holder;
                      }?>
                     
                    <td id = "col3">
                         <form name ="french1" method="post" action = "include/localize/setlanguage.php"> 
               
               <button type="submit" id = "submit" name="french" value="submit"><img src="languagechangeimages/images.jpg" width="30px" height="30px"  alt="Submit"></button>
               <button  type="submit" id = "submit" name="english" value="submit"><img src="languagechangeimages/index.jpg" width="30px" height="30px"  alt="Submit"></button>
               <button  type="submit" id = "submit" name="dutch" value="submit"><img src="languagechangeimages/images1.jpg" width="30px" height="30px"  alt="Submit"></button>        
            </form>
                        
                    </td> 
                   
                    
                </tr>
               
                
            </table>
           
            </div>
        
          
        
      <a href="#login-box" class="login-window">  </a>
       <a href="#cookie-box" id ="AutoLink" class="cookie-window" ></a>
        <a href="#" class="close"><img src="/Ita2website/include/login/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        
        
       
		<div id = "mainpage" class="content">
			
			
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="index.php">
						<img src="Navigationimages/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default]['title']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['Home_sub']  ?></span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="Navigationimages/2.jpg"alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default]['Portfolio']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['Portfolio_sub']  ?></span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="portofolio/whoIam.php"><?php echo $Home[$default]['who_i_am']  ?></a>
							<a href="portofolio/Skills/skills.php"><?php echo $Home[$default]['skills']  ?></a>
							
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="Navigationimages/3.gif" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default]['kashmir']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['mycountry']  ?></span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="Kashmir/History/history.php"><?php echo $Home[$default]['history']  ?></a>
							<a href="Kashmir/tourism/tourism.php"><?php echo $Home[$default]['tourism']  ?></a>
							
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="Navigationimages/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Home[$default][ 'Newtechnologies']  ?></span>
							<span class="sdt_descr"><?php echo $Home[$default]['explore']  ?></span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="NewTechnologies/computers/computers.php"><?php echo $Home[$default]['computers']  ?></a>
						<a href="NewTechnologies/mobiles/mobiles.php"><?php echo $Home[$default]['mobiles']  ?></a>
						
					</div>
				</li>
				<li>
					<a href="contact/contact.php">
						<img src="Navigationimages/5.jpg" alt=""/>
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
        <li><img src="hompagesliderimages/13.jpg" /></li>
		<li><img src="hompagesliderimages/1.jpg" /></li>
		<li><img src="hompagesliderimages/2.jpg" /></li>
		<li><img src="hompagesliderimages/2h.jpg" /></li>
		<li><img src="hompagesliderimages/3.jpg" /></li>
		<li><img src="hompagesliderimages/5.jpg" /></li>
		<li><img src="hompagesliderimages/6.jpg" /></li>
		<li><img src="hompagesliderimages/7.jpg" /></li>
		<li><img src="hompagesliderimages/8.jpg" /></li>
		<li><img src="hompagesliderimages/14.jpg" /></li>
        
        
      </ul>
	  
      </div>
	  
	<div id = "header">
	<h1 id = "heading"></h1>
	
	</div>
	<div class ="footerclass" id = "footer">
	
	
	</div>
	
       <!--slider -->
	   <div id = "imageandinfoonhome">
	   <img src="myimages/images.png"  width="250"
        height="250" />
        <p id ="deschome"><?php echo $Home[$default][ 'myinfo']  ?>
            
		</p>
          
<a class="twitter-timeline"  href="https://twitter.com/Obaib_ob"  data-widget-id="413399655003615232">Tweets by @Obaib_ob</a>

	   </div>
	    
	  <div id = "div1">
	  <a href = "Kashmir/tourism/tourism.php">
	  <div class="slider1">
      <ul class="slides">
        
        <li><img src="11.jpg" /></li>
		 <li><img src="10j.jpg" /></li>
        
      </ul>
	  
      </div>
	  </a>
	  <h1 id = "test"><?php echo $Home[$default]['tourism_in_kashmir']  ?></h1>
	  <p id = "infot"><?php echo $Home[$default]['tourism_in_kashmir_info']  ?><a href ="Kashmir/tourism/tourism.php"><?php echo $Home[$default]['readmore']  ?></a></p>
	  </div>
	  <div id = "div2">
	  <a href = "NewTechnologies/mobiles/JOLLA.php">
	  <div class="slider1">
       <ul class="slides">
        <li><img src="10.jpg" /></li>
		 <li><img src="9.jpg" /></li>
		  <li><img src="4.jpg" /></li>
		  
      </ul>
	  
      </div>
	  </a>
	  <h1 id = "test"><?php echo $Home[$default]['jolla']  ?></h1>
	  <p id = "infot"><?php echo $Home[$default]['jolla_info']  ?> <a href ="NewTechnologies/mobiles/JOLLA.php"<?php echo $Home[$default]['readmore']  ?></a></p>
	  
	  </div>
	  
	   <div id = "div3">
	   <a href = "NewTechnologies/computers/notouching.php">
	   <div class="slider1">
       <ul class="slides">
         <li><img src="2.jpg" /></li>
        <li><img src="1.jpg" /></li>
        <li><img src="7.jpg" /></li>
   
        
      </ul>
	  
      </div>
	  </a>
	  <h1 id = "test"><?php echo $Home[$default][ 'no_touch']  ?> </h1>
	  <p id = "infot"><?php echo $Home[$default][ 'no_touch_info']  ?> <a href ="NewTechnologies/computers/notouching.php"><?php echo $Home[$default]['readmore']  ?></a></p>
	  </div>
       <a href="include/LastVisit/cookiepermission.php #cookie-box"  class="login-window" ></a>
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
	   <!--slider -->
       
        <!-- The JavaScript -->
	     
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		
        <script type="text/javascript" src = "jquery/menuejava.js"></script>

        
		<script src="jquery/jquerysliderrun.js"></script>
		   <script type="text/javascript" src="jquery/jquery.easing.1.3.js"></script>
	 
	  <script src="jquery/jquerysliderrun2.js"></script>
         
		
        
		
        


		
           
        
    </body>
</html>
<?php 

if(!isset($_COOKIE['lastvisit']))
{
      echo "<script type=\"text/javascript\">


$(document).ready(function () {
   
    $('a.cookie-window').trigger('click');
   
    
});
</script>
";
}


?>

<?php 
$page = $filename;
$_SESSION['track'] = 'track';
 include 'include/trackwebpages/ftrackpage.php';
?>
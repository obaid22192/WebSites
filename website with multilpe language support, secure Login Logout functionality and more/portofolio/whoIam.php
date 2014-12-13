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
        <title>About me</title>
        
		<link rel="stylesheet" href="../css/mainmenuestylesheet.css" />
		<link rel="stylesheet" href="../css/footercss.css" />
		<link rel="stylesheet" href="../css/headercss.css" />
		<link rel="stylesheet" href="../css/AboutMEcss.css" />
                 <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../css/slider1.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../css/stylesocialnetworks.css" />
		<style>
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
tr td:first-child {padding-left:0px;}
   #col1{padding:0px 0px 7px 20px;  }
    #col2{padding:0px 0px 7px 20px;  }
 #col3{padding:0px 0px 10px 50px; }		
		</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	     <script type="text/javascript" src="../jquery/script.js"></script>
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
					<a href="whoIam.php">
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
						<img src="../Navigationimages/3.gif" alt=""/>
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
					<a href="../contact/contact.php">
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
        <li><img src="../hompagesliderimages/13.jpg" /></li>
		<li><img src="../hompagesliderimages/2.jpg" /></li>
		<li><img src="../hompagesliderimages/3.jpg" /></li>
		<li><img src="../hompagesliderimages/5.jpg" /></li>
		<li><img src="../hompagesliderimages/6.jpg" /></li>
		<li><img src="../hompagesliderimages/7.jpg" /></li>
		<li><img src="../hompagesliderimages/8.jpg" /></li>
		 <li><img src="../hompagesliderimages/13.jpg" /></li>
		<li><img src="../hompagesliderimages/1.jpg" /></li>
		<li><img src="../hompagesliderimages/2.jpg" /></li>
		<li><img src="../hompagesliderimages/2h.jpg" /></li>
		<li><img src="../hompagesliderimages/3.jpg" /></li>
		<li><img src="../hompagesliderimages/5.jpg" /></li>
		<li><img src="../hompagesliderimages/6.jpg" /></li>
		<li><img src="../hompagesliderimages/7.jpg" /></li>
		<li><img src="../hompagesliderimages/8.jpg" /></li>
		<li><img src="../hompagesliderimages/14.jpg" /></li>
        
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
	  <!-- Social Media Buttons - jQuery -->
		
		<!-- /Social Media Buttons - jQuery -->
		</div>
		<!--Who i am -->
	
	<div class = "whoiam" id = "id_whoIam">
	  <h1 id = "bioheading" ><?php  echo $whoiam[$default]['heading']  ?></h1>
	  <hr />
	  <p id = "desc"><img src="images1.png" alt="Bird" width="200"
       height="300" align="left" /><?php  echo $whoiam[$default]['desc']  ?>  
       	  
	  
 </p>
	  
	
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
	
	
	
	<!-- who i am -->
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
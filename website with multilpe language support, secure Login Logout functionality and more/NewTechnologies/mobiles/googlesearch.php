<?php
include_once '../../include/login/functions.php';
sec_session_start();
include '../../include/localize/checklanguage.php';
include '../../include/changebackground/backgroundchange.php';
$filename = $_SERVER['PHP_SELF'];
$_SESSION['filename'] = $filename;
$_SESSION['registerpath'] = '../../register';
include '../../include/login/loginwindow.php'; 
include '../../include/Comments/Coments.php';


 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title><?php  echo $googlesearch[$default]['title'] ?></title>
    
		<link rel="stylesheet" href="../../css/mainmenuestylesheet.css" />
		<link rel="stylesheet" href="../../css/footercss.css" />
		<link rel="stylesheet" href="../../css/headercss.css" />
		
	
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../../css/slider1.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../../css/stylesocialnetworks.css" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	     <script type="text/javascript" src="../../jquery/script.js"></script>




             <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('form').submit( function () {
            var formdata = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "../../include/Comments/set.php?file=<?php echo $filename ; ?>",
                data: formdata
             });
            return false;
        });
    });
</script>
	
		<style>
		#notouch{
	     margin-top:450px;
		 margin-left:220px;
		 margin-right:50px;
		 width:980px;
         height:725px;
         overflow:scroll;
		 
         
             background-clip:content-box;
                
		
		}
		#bioheading{color:#000;}
		p{color:#000; font-size:25px;}
		span{color:red}
		h3{color:#fcfdfd; font-size : 25px;}
                body { 
			
			background:url(../../BackgroundImage/<?php echo $imageholder;  ?>) no-repeat center center fixed; 
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

h1 {
	font-size: 35px; color: #445668; text-transform: uppercase;
	text-align: center; margin: 0 0 35px 0; text-shadow: 0px 1px 0px #f2f2f2;
}




textarea {
	width: 93%; height: 100px; padding: 12px 20px 0px 20px; margin: 0 0 20px 0; 
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

.cbutton[type=submit] {
	width: 120px; height: 40px; float: right;  padding: 10px 15px; margin: 0 15px 0 0;
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
                     $holder = "<td id = col2><a href=\"../../include/login/logout.php\" >".$Home[$default]['signout']."</a></td>";
                     echo $holder;
                      }?>
                     
                    <td id = "col3">
                         <form name ="french1" method="post" action = "../../include/localize/setlanguage.php"> 
               
               <button type="submit" id = "submit" name="french" value="submit"><img src="../../languagechangeimages/images.jpg" width="30px" height="30px"  alt="Submit"></button>
               <button  type="submit" id = "submit" name="english" value="submit"><img src="../../languagechangeimages/index.jpg" width="30px" height="30px"  alt="Submit"></button>
               <button  type="submit" id = "submit" name="dutch" value="submit"><img src="../../languagechangeimages/images1.jpg" width="30px" height="30px"  alt="Submit"></button>        
            </form>
                        
                    </td> 
                   
                    
                </tr>
               
                
            </table>
            
        </div> 
		<div id = "mainpage"class="content">
			
			
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="../../index.php">
						<img src="../../Navigationimages/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Home</span>
							<span class="sdt_descr">Where ideas get born</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="../../Navigationimages/2.jpg"alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Portfolio</span>
							<span class="sdt_descr">Me And My work</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="../../portofolio/whoIam.php">Who I Am</a>
							<a href="../../portofolio/Skills/skills.php">Skills</a>
							
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="../../Navigationimages/3.gif"" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Kashmir</span>
							<span class="sdt_descr">My Country</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="../../Kashmir/History/history.php">History</a>
							<a href="../../Kashmir/tourism/tourism.php">Tourism</a>
							
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="../../Navigationimages/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">New Technologies</span>
							<span class="sdt_descr">Explore what's new</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="../computers/computers.php">computers</a>
						<a href="../mobiles/mobiles.php">Mobiles</a>
						
					</div>
				</li>
				<li>
					<a href="../../contact/contact.php">
						<img src="../../Navigationimages/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Contact</span>
							<span class="sdt_descr">How to reach me</span>
						</span>
					</a>
				</li>
			</ul>
		</div>
       <!--slider -->
	   <div class="slider">
      <ul class="slides">
        <li><img src="googleimages/1.jpg" /></li>
		 <li><img src="googleimages/2.png" /></li>
		  <li><img src="googleimages/3.jpg" /></li>
		
      </ul>
	  
      </div>
	<div id = "header">
	<h1 id = "heading"></h1>
	</div>
	
	<div class ="footerclass" id = "footer">
	<h1 id = "footertext"></h1>
	
	</div>
	
       <!--slider -->
	   <div id="wrapper">
	  <!-- Social Media Buttons - jQuery -->
           </div>
	
	  <div class = "whoiam" id = "notouch">
	  <h1 id = "bioheading" ><?php echo $googlesearch[$default]['title'] ?></h1>
<hr />

		<article id="content" class="single-post" itemprop="articleBody">
			<p id = "desc"><?php echo $googlesearch[$default]['p_1'] ?></p>
                        <p id = "desc" style="text-align: center;"><a href="http://www.digitaltrends.com/wp-content/uploads/2013/10/image-search.png"><span class="dt-auto-zoom"><span></span></span><img class="aligncenter size-large wp-image-489995" alt="Google Search By Image in Chrome 30" src="http://img.digitaltrends.com/image/image-search-625x625.png" width="625" height="317" /></a></p>
                        <p id = "desc" ><?php echo  $googlesearch[$default]['p_2'] ?></p>
<p id = "desc"><?php echo $googlesearch[$default]['p_3'] ?></p>
<p id = "desc"><a href="http://www.digitaltrends.com/wp-content/uploads/2013/10/Chrome-for-android-Gestures.jpg"><span class="dt-auto-zoom"><span></span></span><img class="aligncenter size-large wp-image-489997" alt="Chrome for Android Gesture Control" src="http://img.digitaltrends.com/image/chrome-for-android-gestures-625x625.jpg" width="625" height="343" /></a></p>
		</article>

	  <hr />
	  <p id = "desc">

 </p>
 	</div>
          

<div id ="page-wrap"> 
          
      <div id="contact">
	 <?php if (login_check($mysqli) == true) : ?>
          
          <form name = "for" action="" method="post">
		<fieldset>
			
			
	               <label for="message">Comment:</label>
			<textarea id="message" name ="message" placeholder="What's on your mind?"></textarea>
                        <br/>
			<input type="submit" name ="sumbit" class = "cbutton" name ="com" value="Comment"  id="submit_btn" value="Send"/>
			
		</fieldset>
	</form>
</div>
          
           <div id="comments">
              <?php else : ?>
               <h1>Sign in to comment</h1>
                <?php endif; ?>
                <?php 
                
                $obj = new Coments();

$rowres = $obj->getcomment($filename, $mysqli);
 
for($count = 0 ; $count < count($rowres);$count++ )
{
      
    echo "<h2><img src = \"../../user.jpg\"  height=\"42\" width=\"42\"> ".$rowres[$count]->name."</h2><br>" ;
    
  
       echo $rowres[$count]->comment."<br><hr>";
}
                ?>
           </div>
       
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
		<script type="text/javascript" src="../../jquery/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src = "../../jquery/menuejava.js"></script>

        <script src="../../jquery/jquery.blueberry.js"></script>
		<script src="../../jquery/jquerysliderrun.js"></script>
		 
        


		
           
        
    </body>
</html>
<?php 
$page = $filename;
$_SESSION['track'] = '../../track';
 include '../../include/trackwebpages/ftrackpage.php';
?>
<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';

sec_session_start();
include '../includes/spellbeepagedata.php';
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
<link rel="stylesheet" type="text/css" href="../css/global.css" />
<script src="../javascript/stuHover.js" type="text/javascript"></script>
<script type="text/JavaScript" src="../js/sha512.js"></script> 
<script type="text/JavaScript" src="../js/forms.js"></script>
<script>
function show(target){
document.getElementById(target).style.display = 'block';
}
function hide(target){
document.getElementById(target).style.display = 'none';
}
 
 
</script>
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
.floatLeft1 { width: 50%; float: left; }
.floatRight {width: 50%; float: right; }
.parentdiv{ overflow: hidden; }		
	span.tab{
    padding:  0 40px; /* Or desired space*/
}
#accountinfo{display:none;}
#camp{display:none;}


.booknow{
   margin-left:80%;
border:4px solid #7d99ca;-webkit-box-shadow: #B4B5B5 10px 10px 10px  ;-moz-box-shadow: #B4B5B5 10px 10px 10px ; box-shadow: #B4B5B5 10px 10px 10px  ; -webkit-border-radius: 8px; -moz-border-radius: 8px;border-radius: 8px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #A5B8DA; background-image: -webkit-gradient(linear, left top, left bottom, from(#A5B8DA), to(#7089B3));
 background-image: -webkit-linear-gradient(top, #A5B8DA, #7089B3);
 background-image: -moz-linear-gradient(top, #A5B8DA, #7089B3);
 background-image: -ms-linear-gradient(top, #A5B8DA, #7089B3);
 background-image: -o-linear-gradient(top, #A5B8DA, #7089B3);
 background-image: linear-gradient(to bottom, #A5B8DA, #7089B3);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#A5B8DA, endColorstr=#7089B3);
}

.booknow:hover{
 border:1px solid #5d7fbc;
 background-color: #819bcb; background-image: -webkit-gradient(linear, left top, left bottom, from(#819bcb), to(#536f9d));
 background-image: -webkit-linear-gradient(top, #819bcb, #536f9d);
 background-image: -moz-linear-gradient(top, #819bcb, #536f9d);
 background-image: -ms-linear-gradient(top, #819bcb, #536f9d);
 background-image: -o-linear-gradient(top, #819bcb, #536f9d);
 background-image: linear-gradient(to bottom, #819bcb, #536f9d);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#819bcb, endColorstr=#536f9d);
}
</style>
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</head>
<body>
   <?php if (login_check($mysqli) == true) : ?>
           
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
                       
                            ?>
				
                              
                               
        	</div> </td>
                        </tr>
                        </table>
		
                    
		</div>
        
        
            <table>
                <tr>
                    <td>  </td>
                    </tr>
                
                </table>
            <div id="content1" class="clearfix">
		<section id="left">
			<div id="userStats" class="clearfix">
				<div class="pic">
                                    <a href="#"><img src="../includes/getimage.php?id=<?php $holder = $_SESSION['user_id']; echo $holder; ?>" width="150" height="150" /></a>
				</div>
				
				<div class="data">
					<h5><?php  echo $row['First_name']; ?></h5>
					<h3><?php  echo $row['Address']; ?></h3>
					
					<div class="socialMediaLinks">
                                            <a href="http://twitter.com/jakerocheleau" rel="me" target="_blank"><img src="../css/img/twitter.png" alt="@jakerocheleau" /></a>
                                            <a href="http://gowalla.com/users/JakeRocheleau" rel="me" target="_blank"><img src="../css/img/gowalla.png" /></a>
					</div>
					<div class="sep"></div>
					
                                            <h5>Last Name: <span class= "tab"> <?php  echo $row['Last_name'];?> </span></h5>
                                                <h5>Phone: <span class= "tab"> <?php  echo $row['Phone'];?> </span> </h5>
                                                <h5>Email:  <span class= "tab"> <?php  echo $row['Email'];?> </span></h5>
                                                <h5>Date Of Birth:  <span class= "tab"> <?php  echo $row['Birth_day'];?> </span></h5>
                                                
                                                
                                                <h2><a href="#" onclick="show('accountinfo')">Account Info</a></h2>
                                               
                                                <div id = "accountinfo">
                                                <h5>Account Balance:  <span class= "tab"> <?php  echo $row['Balance'];?> </span></h5>
                                                <h5>Paid for Event:  <span class= "tab"> <?php  echo $row['Event_fee'];?> </span></h5>
                                               
                                               
                                                
                                                </div>
                                                
                                                 <h2><a href="#" onclick="show('camp')">Book A Tent </a></h2>
                                                <div id = "camp">
                                                    
                                                     <?php 
                                                      if($res2->num_rows > 0){
                                                                                                           echo "<h2>You have already booked the  Tent</h2>";
                                                                                                           
                                                                                                       }
                                                    else if($data !=null)
                                                {
                                                for($count = 0 ; $count < count($data);$count++ )
                                                                                                       {
                                                                                                      echo "<table cellpadding=\"0px\"cellspacing=\"30px\">";
                                                                                                      echo "<tr>";
                                                                                                       echo "<td><h2> LOCATION :</h2></td><td><h2>".$data[$count]->Location."</h2></td>" ;
                                                                                                     
                                                                                                       echo "</tr>";
                                                                                                       echo "<tr>";
                                                                                                        echo "<td><h2> COST  :</h2></td><td><h2>".$data[$count]->totalcost."</h2></td>" ;
                                                                                                        echo "</tr><hr>";
                                                                                                        $idtent = $data[$count]->tentid;
                                                                                                      echo "</table> <form method =\"post\" action =\"../includes/Booktent.php?id=$idtent\">  <button name = \"booknow\" class=\"booknow\" type=\"submit\">Book Now</button> </form><br>";
                                                                                                       }// echo "<h2> \"$data[$count]->avalability.\"<br><hr>";
                                                                                                       }
                                                                                                       
                                                                                                       else
                                                                                                       {
                                                                                                           echo "<h2>No Camp is available You are Late...!</h2>";
                                                                                                        }
                                                                                                        ?>
                                                </div>
					
				</div>
			</div>
			
			
		</section>
		
		
	</div> 
    </div>
</div>

 <?php else : ?>
            <p>
            <?php echo  '<span class="error">You are not authorized to access this page.</span> Please <a href="../index.php?access=1">login</a>' ;
           
            echo "<script> 

delayRedirect('../index.php?access=1');

 

function delayRedirect(url)
 {
 var Timeout = setTimeout(\"window.location='\" + url + \"'\",4000);
 }
</script> ";
            ?>
            </p>
        <?php endif; ?>
</body>

</html>
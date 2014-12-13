<?php
function getImages($dir)
 {
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        $images = array();
        $folder =  array();

        while (($file = readdir($dh)) !== false) {
            if (!is_dir($dir.$file)) {
                $images[] = $file;
            }
           
        }

        closedir($dh);

        return $images;
        
    }
}
 }
  $ip = getenv('HTTP_CLIENT_IP')?:
                     getenv('HTTP_X_FORWARDED_FOR')?:
                     getenv('HTTP_X_FORWARDED')?:
                     getenv('HTTP_FORWARDED_FOR')?:
                     getenv('HTTP_FORWARDED')?:
                     getenv('REMOTE_ADDR');
                     $holderip = "IP Address  ".$ip ."  ";
                     $ipaddress = $_SERVER['REMOTE_ADDR'];
$date = date ("M dS H:i:s");

$message = "\n $ipaddress _ $date  \n" .PHP_EOL;


$File = "track.txt";
$Open = fopen($File, "a+");
if ($Open){
   
fwrite($Open, "$message");
fclose ($Open);
}
                    
?>
<html>
<head>
    <link rel="shortcut icon" href="Images/logo.png">
        <title>Home</title>
    
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="CSS/pro_dropdown_2.css" />
<link rel="stylesheet"  type="text/css" href="CSS/slider1.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="JAVA/stuHover.js" type="text/javascript"></script>
<script src="JAVA/jquery.blueberry.js"></script>
<script src="JAVA/jquerysliderrun.js"></script>
<script>
    $(document).ready(function(){
    $('#imgLoader').show();
    $('#imgMain').load(function(){
      $('imgLoader').hide();
  });
});
</script>
</head>
<body >
   
 <div id="page-wrap">
     
<div id = "menu">
    
       <ul id="nav">
	    <li class="top"><a href="#" class="top_link"><span class ="upper"><font face="Imprint MT Shadow">HOME</span></a></li>
            <li class="top"><a href="Webpages/BIO.php" id="products" class="top_link"><span class="down">BIO</span></a>
             		
	</li>
        <li class="top"><a href="Webpages/lookbook.php" id="services" class="top_link"><span class="down">LOOKBOOK</span></a>
		
	</li>
        <li class="top"><a href="Webpages/sales.php" id="contacts" class="top_link"><span class="down">SALE</span></a></li>
        <li class="top"><a href="Webpages/video.php" id="contacts" class="top_link"><span class="down">VIDEO</span></a></li>
        <li class="top"><a href="Webpages/media.php" id="contacts" class="top_link"><span class="down">MEDIA</span></a></li>
        <li class="top"><a href="#nogo27" id="contacts" class="top_link"><span class="lower">CONTACT</span></a></li>
	
			
      </ul>
    <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="navigation_bar_images/fblogo.png" width="30px" height="30px"></a>
    <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="navigation_bar_images/twiterlogo.png" width="30px" height="30px"></a>
    <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="navigation_bar_images/nfeedlogo.png" width="30px" height="30px"></a>
    </div>
     <table id ="logotable">
         <tr>
             <td id="col1"><div id ="mafctxt"><img src ="bgimage/mafctxt.png" width="220px" height="120px"> </div></td>
             <td id = "col2"><div id ="logo1"><img src = "Images/logo.png" width="200px" height="60px">  </div></td>
         </tr>
         
     </table>
     <div id="main">
     <div id = "pageinfo">
         <p>M.A.F.<span>Couture<span></p>    
     </div>
         <div id="pagedesc"><h2>Mixed African Fashion </h2></div>
         
         <table id="tabletextandimages">
             <tr>
                 <td><div id="homepagetext"><p><b>A great many voices have touted Mary
Tataw, as a member of the “New-age African Haute Couture Establishment”. Her
volunteer models have proclaimed “All Hail Mary!”. Since being featured in
Mondriaan College’s very own fashion show, she is aiming for the top with her
scrumptious yet bold and provocative ‘afro themed’ fashion designs.<br /><br /> ​
Mary is currently working hard on completing a solid professional
portfolio that would include every single one of her eye-catching fashion
coutures as well as exclusive video footage of her hard at work. She is
beautiful, professional, and substantial, which makes her not just an upcoming
fashion designer but a role model as well for the young and often disadvantaged
African diaspora, who often find refuge from the pressure of culture shock
abroad, in their very own artistic wonderlands; places set in minds so magically
complex and yet gifted with ideas so beautifully imagined...and from these
imaginings come a flood of ideas that are materialized in Mary’s
couture...savvy?​<br /><br />The Journey has begun...cross over into Mary’s world...Every
superhero needs a theme song...Sing on, do it...Tell your friends, support her
work and bring your very own ideas to her design table... She is here to stay
and only time will expose the true genius behind such humble yet gifted
beginnings</b></p> </div></td>
         <td>
             <div id="box1">
                 <a href="Webpages/sales.php">
                    <div class="slider">
      <ul class="slides">
          
          <?php
             $dir = "categories/sales/";
             $imagesGot = getImages($dir);
              foreach ($imagesGot as $img)
              {
                  $str = '<li><img width="300" height="420" id="imgMain" src="'.$dir.$img.'" /></li>';
                  echo $str;
              }
          ?>
          
		
        
        
      </ul>
	  
      </div>
                 </a>
             </div>
             
             <div id="box2">
                 <div class="slider">
      <ul class="slides">
         <?php
             $dir = "categories/sales/";
             $imagesGot = getImages($dir);
              foreach ($imagesGot as $img)
              {
                  $str = '<li><img width="300" height="420" src="'.$dir.$img.'" /></li>';
                  echo $str;
              }
          ?>
		
        
        
      </ul>
	  
      </div>
             </div>
          
             <div id="box3">
                 <div class="slider">
      <ul class="slides" >
         <?php
             $dir = "categories/sales/";
             $imagesGot = getImages($dir);
              foreach ($imagesGot as $img)
              {
                  $str = '<li><img width="300" height="420" src="'.$dir.$img.'" /></li>';
                  echo $str;
              }
          ?>
        
        
      </ul>
	  
      </div>
             </div>
             <div id="box4">
                 <div class="slider">
      <ul class="slides">
         <?php
             $dir = "categories/sales/";
             $imagesGot = getImages($dir);
              foreach ($imagesGot as $img)
              {
                  $str = '<li><img width="300" height="420" src="'.$dir.$img.'" /></li>';
                  echo $str;
              }
          ?>
        
        
      </ul>
	  
      </div>
             </div>
         </td>
             </tr>
         </table>
     </div>
      
</div>
</body>

</html>
<?php
function getDir()
 {
$dir = "../categories/LookBook/";
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
return $scanned_directory;
 }
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

?>
<html>
<head>
    <link rel="shortcut icon" href="../Images/logo.png">
        <title>LooKBook</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/pro_dropdown_2.css" />
<link rel="stylesheet" type="text/css" href="../CSS/jquery.fancybox.css?v=2.1.5" media="screen" />
<script src="../JAVA/stuHover.js" type="text/javascript"></script>
<script type="text/javascript" src="../JAVA/jquery-1.10.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="../JAVA/jquery.blueberry_lookbook.js"></script>
<script src="../JAVA/jquerysliderrun.js"></script>
<script type="text/javascript" src="../JAVA/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="../JAVA/jquery.fancybox.js?v=2.1.5"></script>
 
<style type = "text/css">
    
.slider{width:100%;margin-left: 10%;background:url(../bgimage/loader.gif) no-repeat center;height: 300px; border: solid; border-color: #FF1493;border-radius: 12px; border-width: 5px;}   

.slider .slides {
	margin-top: -0.4px;
	position: relative;
	overflow: hidden;
}
.slider .slides li {
	position: absolute;
	left: 0;
        overflow: hidden;
        
}
.slider .slides li img{width:420px;height:300px;border: transparent;border-radius: 8px ;z-index:-1; opacity: 1.0;
    transition: opacity 1s ease-in-out;
    -moz-transition: opacity 1s ease-in-out;
    -webkit-transition: opacity 1s ease-in-out;}
@media screen and (-webkit-min-device-pixel-ratio:0) {.slider .slides li img{width:100%;height:300px;border: transparent;border-radius: 8px ;z-index:-1; opacity: 1.0;
    transition: opacity 1s ease-in-out;
    -moz-transition: opacity 1s ease-in-out;
    -webkit-transition: opacity 1s ease-in-out;}}
.slider .slides li img:hover {
    opacity: 0.8;
    transition: opacity .55s ease-in-out;
    -moz-transition: opacity .55s ease-in-out;
    -webkit-transition: opacity .55s ease-in-out;
}​

</style>


</head>
<body  >
   
 <div id="page-wrap">
     
<div id = "menu">
    
       <ul id="nav">
           <li class="top"><a href="../index.php" class="top_link"><span class ="upper"><font face="Imprint MT Shadow">HOME</span></a></li>
           <li class="top"><a href="BIO.php" id="products" class="top_link"><span class="down">BIO</span></a>  		
	</li>
	<li class="top"><a href="lookbook.php" id="services" class="top_link"><span class="down">LOOKBOOK</span></a>
		</li>
                <li class="top"><a href="sales.php" id="contacts" class="top_link"><span class="down">SALE</span></a></li>
                <li class="top"><a href="video.php" id="contacts" class="top_link"><span class="down">VIDEO</span></a></li>
                <li class="top"><a href="media.php" id="contacts" class="top_link"><span class="down">MEDIA</span></a></li>
        <li class="top"><a href="contact.php" id="contacts" class="top_link"><span class="lower">CONTACT</span></a></li>
	</ul>
    <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="../navigation_bar_images/fblogo.png" width="30px" height="30px"></a>
    <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="../navigation_bar_images/twiterlogo.png" width="30px" height="30px"></a>
    <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="../navigation_bar_images/nfeedlogo.png" width="30px" height="30px"></a>
    </div>
     <table id ="logotable">
         <tr>
             <td id="col1"><div id ="mafctxt"><img src ="../bgimage/mafctxt.png" width="220px" height="120px"> </div></td>
             <td id = "col2"><div id ="logo1"><img src = "../Images/logo.png" width="200px" height="60px">  </div></td>
         </tr>
         
     </table>
     <div id="main">
     <div id = "pageinfo">
         <p>LOOk<span>BOOKS...</span></p>    
     </div>
         <div id="pagedesc"><h2>summer, spring, autumn,winter </h2></div>
         <table id="lookbookstable">
             <?php  
             $counter =1;
             $lookbooks = getDir();
             $str = " ";
             $tableholder = array();
             
             for($counter ; $counter<=count($lookbooks);  $counter++)
             {
                 if($counter ==1)
                 {
                  $imgdir="../categories/LookBook/".$lookbooks[$counter+1];
                       $temp = getImages($imgdir);
                       $str = '<tr><td><p id= "t1"><b>'.$lookbooks[$counter+1].'</b></p><p id="t2"></p>
                            <div class="slider">
                            <ul class="slides">';
                            foreach($temp as $images){$str =$str.'<li><a class="fancybox-buttons'.$counter.'" data-fancybox-group="button" href="'.$imgdir.'/'.$images.'"><img id="images" src="'.$imgdir.'/'.$images.'" /> </a></li>';};
                            $str = $str.'</ul> </div><td>' ;
                            echo "<script type=\"text/javascript\">
		         $(document).ready(function() {
                    /*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons'+ $counter).fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
                       
                });
	</script>";
                             
                 }
                 
                  else if ($counter %2 <> 0){
                    // $str = '<tr><td><div></div><td>' ;
                       $imgdir="../categories/LookBook/".$lookbooks[$counter+1];
                       $temp = getImages($imgdir);
                       $str = '<tr><td><p id= "t1"><b>'.$lookbooks[$counter+1].'</b></p><p id="t2"></p>
                            <div class="slider">
                            <ul class="slides">';
                            foreach($temp as $images){$str =$str.'<li><a class="fancybox-buttons'.$counter.'" data-fancybox-group="button" href="'.$imgdir.'/'.$images.'"><img src="'.$imgdir.'/'.$images.'" alt=""/> </a></li>';}
                          
                          $str = $str.'</ul></div><td>' ;
                          echo "<script type=\"text/javascript\">
		$(document).ready(function() {
                    /*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons'+ $counter).fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
                       
                });
	</script>";
                 }
                 else if ($counter %2 ==0) {
                     $imgdir="../categories/LookBook/".$lookbooks[$counter+1];
                       $temp = getImages($imgdir);
                       $str = $str.'<td><p id= "t1"><b>'.$lookbooks[$counter+1].'<b></p><p id="t2"></p>
                            <div class="slider">
                            <ul class="slides">';
                            foreach($temp as $images){$str =$str.'<li><a class="fancybox-buttons'.$counter.'" data-fancybox-group="button" href="'.$imgdir.'/'.$images.'"><img src="'.$imgdir.'/'.$images.'" /> </a></li>';}
                            $str = $str.'</ul></div><td></tr>' ;
                            echo "<script type=\"text/javascript\">
		$(document).ready(function() {
                    /*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons'+ $counter).fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
                       
                });
	</script>";
                // $str = $str.'<td><div></div></tr>';
                 $tableholder = $str;
                 echo $str;
                 $str = "";  
             }
                 if($counter == count($lookbooks)&& $counter %2<>0)
                 {
                  $str = $str.'</tr>';
                 $tableholder = $str;
                 echo $str;
                 $str = "";   
                 }
             }
             //print_r($lookbooks);
             ?>
             
            
             
         </table>
       

     </div>
     
</div>
  
</body>

</html>
<?php

function getImages($dir) {
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            $images = array();
            $folder = array();

            while (($file = readdir($dh)) !== false) {
                if (!is_dir($dir . $file)) {
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
        <title>Videos</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../CSS/pro_dropdown_2.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/jquery.fancybox.css?v=2.1.5" media="screen" />
        <script src="../JAVA/stuHover.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JAVA/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../JAVA/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="../JAVA/jquery.fancybox.js?v=2.1.5"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                /*
                 *  Button helper. Disable animations, hide close button, change title type and content
                 */

                $('.fancybox-buttons').fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',
                    closeBtn: false,
                    helpers: {
                        title: {
                            type: 'inside'
                        },
                        buttons: {}
                    },
                    afterLoad: function() {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });





            });
        </script>
    </head>
    <body >

        <div id="page-wrap">

            <div id = "menu">

                <ul id="nav">
                    <li class="top"><a href="../index.php" class="top_link"><span class ="upper"><font face="Imprint MT Shadow">HOME</span></a></li>
                    <li class="top"><a href="#" id="products" class="top_link"><span class="down">BIO</span></a>

                    </li>
                    <li class="top"><a href="lookbook.php" id="services" class="top_link"><span class="down">LOOKBOOK</span></a>

                    </li>
                    <li class="top"><a href="sales.php" id="contacts" class="top_link"><span class="down">SALE</span></a></li>
                    <li class="top"><a href="#" id="contacts" class="top_link"><span class="down">VIDEO</span></a></li>
                    <li class="top"><a href="media.php" id="contacts" class="top_link"><span class="down">MEDIA</span></a></li>
                    <li class="top"><a href="contact.php" id="contacts" class="top_link"><span class="lower">CONTACT</span></a></li>


                </ul>
                <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="../navigation_bar_images/fblogo.png" width="30px" height="30px"></a>
                <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="../navigation_bar_images/twiterlogo.png" width="30px" height="30px"></a>
                <a class ="top" href="#nogo27" id="contacts" class="top_link"><img src ="../navigation_bar_images/nfeedlogo.png" width="30px" height="30px"></a>
            </div>
            <table id ="logotable">
                <tr>
                    <td id="col1"><div id ="mafctxt" ><img src ="../bgimage/mafctxt.png" width="220px" height="120px"> </div></td>
                    <td id = "col2"><div id ="logo1"><img src = "../Images/logo.png" width="200px" height="60px">  </div></td>
                </tr>

            </table>
            <div id="main">
                <div id = "pageinfo" >
                    <p>Watch our <span> Videos</span></p>    
                </div>
                <div id="pagedesc"><h2>shows, interviews, promo, recap.. </h2></div>
                <div id="videodiv">
                    <table id ="videotable">
                        <?php
                   $urlarray = array();
                   $myfile = fopen("../videos/youtubesvideos.txt", "r") or die("Unable to open file!");
                   $urlstr= fread($myfile,filesize("../videos/youtubesvideos.txt"));
                   $urlarray = explode("\n", $urlstr);
                  // echo $urlarray[0];
                   fclose($myfile);
                   $stringholder = '';
                   $counter =0;
                   $autoplay =0;
                   foreach ($urlarray as $url)
                   {
                       if($counter ==0)
                       {
                           if($autoplay==0)
                           {
                               $stringholder = $stringholder.'<tr><td><iframe width="420" height="345" src="'.$url.'?autoplay=1"allowFullScreen></iframe><td>';
                           }
                           else
                           {
                           $stringholder = $stringholder.'<tr><td><iframe width="420" height="345" src="'.$url.'"allowFullScreen></iframe><td>';
                           }
                           $counter++;
                           $autoplay++;
                       }
                       else{
                       $stringholder = $stringholder.'<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><iframe width="420" height="345" src="'.$url.'"allowFullScreen></iframe><td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>';
                           $counter=0;
                           $autoplay++;
                           echo $stringholder;
                   }
                       
                   }
                   ?> 
                    </table>
               
                </div>
        
            </div>

        </div>
    </body>

</html>
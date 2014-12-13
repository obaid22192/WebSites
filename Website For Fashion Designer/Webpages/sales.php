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
        <title>Sales</title>
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
                    <td id="col1"><div id ="mafctxt" ><img src ="../bgimage/mafctxt.png" width="220px" height="120px"> </div></td>
                    <td id = "col2"><div id ="logo1"><img src = "../Images/logo.png" width="200px" height="60px">  </div></td>
                </tr>

            </table>
            <div id="main">
                <div id = "pageinfo" >
                    <p>PIECES<span> ON SALE...</span></p>    
                </div>
                <div id="pagedesc"><h2>special offers..sales..buy for less </h2></div>
                <div id="sale">
                    <table id="tablesles">
<?php
$counter = 0;
$dir = "../categories/sales/";
$imagesGot = getImages($dir);
$tempimg;
$flag = 0;
foreach ($imagesGot as $img) {
    // $str = '<li><img width="300" height="420" src="'.$dir.$img.'" /></li>';
    if ($counter == 0) {
        $tempimg = $img;

        if ($flag >0) {
            $str = '<tr><td ><a class="fancybox-buttons" data-fancybox-group="button" href="' . $dir . $tempimg . '"><img src="' . $dir . $tempimg . '" width = "304px" height ="350px" style="margin-top: -210px" /></a></td>';
        } else {
            $str = '<tr><td ><a class="fancybox-buttons" data-fancybox-group="button" href="' . $dir . $tempimg . '"><img src="' . $dir . $tempimg . '" width = "304px" height ="350px" style="margin-top: -71px" /></a></td>';
        }
        echo $str;
        $counter++;
    } else {
           if ($counter == 1) {
            $str = '<td></td><td></td><td></td><td></td><td><a class="fancybox-buttons" data-fancybox-group="button" href="' . $dir . $img . '"><img src="' . $dir . $img . '" width = "304px" height ="420px"/></a></td>';
            echo $str;
            $counter++;
        } else if ($counter ==2) {

            if ($flag >0) {
                $str = '<td></td><td></td><td></td><td></td><td ><a class="fancybox-buttons" data-fancybox-group="button" href="' . $dir . $img . '"><img src="' . $dir . $img . '" width = "304px" height ="350px"style="margin-top: -210px"/></a></tr><tr></tr><tr></tr><tr></tr><tr></tr>';
            } else {
                $str = '<td></td><td></td><td></td><td></td><td ><a class="fancybox-buttons" data-fancybox-group="button" href="' . $dir . $img . '"><img src="' . $dir . $img . '" width = "304px" height ="350px"style="margin-top: -71px"/></a></tr><tr></tr><tr></tr><tr></tr><tr></tr>';
            }
            echo $str;
            $counter++;
        } else {
            $tempimg = $img;
            $counter = 0;
            $flag++;
        }
    }
}
?>


                    </table>
                </div>

            </div>

        </div>
    </body>

</html>
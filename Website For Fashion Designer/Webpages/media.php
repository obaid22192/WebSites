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
        <title>Media</title>
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
                    <p>GET SOCIAL <span> WITH US</span></p>    
                </div>
                <div id="pagedesc"><h2>features, magazines, websites, tv, events, videos, blogs, pinteres and more</h2></div>
                <div id="mediadiv">
                    <div id="div1">
                        <h3>MAGAZINES<h3>
                         <h4 id ="fe">FEATURES</h4>
                         <a  href="https://twitter.com/AfricanWomanNL"> <p><img src="../mediaimages/1.00_jpg_srz" alt="Magazines" align="left"><span id="mcol1">MAFC in African Woman NL</span><br />For official website and cover, pls contact them here </p></a><br /><hr  size="1" />
                         <a  href="http://issuu.com/.../tropics_magazine__mai_-_may_2013_/1"> <p><img src="../mediaimages/2.00_jpg_srz" alt="Magazines" align="left"><span>MAFC in Tropics Magazine</span><br />this was a tease cover, find real cover and story here </p></a><br /><hr size="1" />
                        <a  href="http://zenmagazineafrica.com/editorials/ethiopian-model-mearg-tareke-cover-star/"> <p><img src="../mediaimages/3.00_jpg_srz" alt="Magazines" align="left"><span id="mcol1">MAFC in Zen Magazine</span><br />check out our ft here </p></a><br /><br /><br /><hr size="1" />
                        <a  href=" http://www.fabafriq.com/articles/safari-kenya"> <p><img src="../mediaimages/4.00_jpg_srz" alt="Magazines" align="left"><span id="mcol1">MAFC in FabAfrique</span><br />our ft in </p></a><br /><br /><hr size="1" />
                         <a  href="http://issuu.com/icpubs/docs/naw20_smaller"> <p><img src="../mediaimages/5.00_jpg_srz" alt="Magazines" align="left"><span id="mcol1">MAFC in New Woman Magazine</span><br />featured in naw issu 20  </p></a><br /><br /><hr size="1"  />
                           <a  href="http://www.facebook.com/TeenStuffMagazine?fref=ts"> <p><img src="../mediaimages/6.00_jpg_srz" alt="Magazines" align="left"><span id="mcol1">MAFC in Teen Stuff Mag in Egypt!</span><br />Click here For More </p></a><br /><br /><hr size="1"  />
                           <a  href="www.hoda.nl"> <p><img src="../mediaimages/7.00_jpg_srz" alt="Magazines" align="left"><span id="mcol1">MAFC in HODA MagL</span > <br />hoda is a marrocco/netherland magazine </p></a><br /><hr size="1" /></td> </tr>
                          <a  href="#"> <p><img src="../mediaimages/8.00_jpg_srz" alt="Magazines" align="left"><span id="mcol1">MAFC in Fashionista magazine</span><br />thos edition of fashionista could be bought in ur local albert heijn. </p></a><br /><hr size="1"  />
                          <p><br /></p>
                          <p><br /></p>
                          <p><br /></p>
                          
                          
                          
                    </div>
                  
        <div id="div2">
            <h3>WEBSITES</h3>
            <h4 id ="fe">FEATURES</h4>
            <p><span id ="mcol2" style="margin-left: 50">Xcite African</span><br /><a href="http://www.xciteafrican.com/fashion-style/">http://www.xciteafrican.com/fashion-style/</a><hr size="1" /> </p>
                                <p><span id ="mcol2" style="margin-left: 50">Africa-Vogue</span><br /><a href="http://www.africa-vogue.com/sippora-jackson-m-a-f-couture-editorial//">http://www.africa-vogue.com/sippora-jackson<br />-m-a-f-couture-editorial//</a><hr size="1" /> </p>
                                <p><span id ="mcol2" style="margin-left: 50">powerLady</span><br /><a href="http://powerlady.nl/passie-voor-mijn-werk/">http://powerlady.nl/passie-voor-mijn-werk/</a> <hr size="1" /></p>
                                <p><span id ="mcol2" style="margin-left: 50">Fashion Buzz Tv</span><br /><a href="http://fashionbuzz.tv/zen-magazine-featuring-m-a-f-couture-from-editorial/">http://fashionbuzz.tv/zen-magazine-featuring<br />-m-a-f-couture-from-editorial/</a><hr size="1" /> </p>
                                <p><span id ="mcol2" style="margin-left: 50">Nexdime Empire</span><br /><a href="http://nexdimempire.com/tag/m-a-f-couture/">http://www.xciteafrican.com/fashion-style/</a> <hr size="1" /></p>
                                <p><span id ="mcol2" style="margin-left: 50">jaguda</span><br /><a href="http://www.jaguda.com/2013/05/20/zen-magazines-editorial-on-m-a-f-couture/">http://www.jaguda.com/2013/05/20/zen-magazines-editorial<br />-on-m-a-f-couture/</a> <hr size="1" /></p>
                                <p><span id ="mcol2" style="margin-left: 50">African prints in fashion</span><br /><a href="http://www.africanprintinfashion.com/2012/11/maf-couture-by-mary-tataw.html/">http://www.africanprintinfashion.com/2012/11/<br />maf-couture-by-mary-tataw.html</a> <hr size="1" /></p>
                                <p><span id ="mcol2" style="margin-left: 50">fabafrique</span><br /><a href="http://www.africanprintinfashion.com/2012/11/maf-couture-by-mary-tataw.html">http://www.africanprintinfashion.com/2012/11/<br />maf-couture-by-mary-tataw.html</a><hr size="1" /> </p>
                                <p><span id ="mcol2" style="margin-left: 50">zen mag online</span><br /><a href="http://zenmagazineafrica.com/editorials/m-a-f-coutures-colorful-summer-collection/">http://zenmagazineafrica.com/editorials/<br />m-a-f-coutures-colorful-summer-collection/</a> <hr size="1" /></p>
                                <p><span id ="mcol2" style="margin-left: 50">Music Nest</span><br /><a href="http://musicnestradio.com/2012/12/designer-spotlight-m-a-f-couture/">http://musicnestradio.com/2012/12/<br />designer-spotlight-m-a-f-couture/</a> <hr size="1" /></p>
                                <p><span id ="mcol2" style="margin-left: 50">Bella Naija</span><br /><a href="http://musicnestradio.com/2012/12/designer-spotlight-m-a-f-couture/">http://musicnestradio.com/2012/12/designer<br />-spotlight-m-a-f-couture/</a><hr size="1" /> </p>
                                <p><span id ="mcol2" style="margin-left: 50">fashion Mist</span><br /><a href="http://fashionmistonline.blogspot.nl/2013/05/participating-designermaf-couture.html#!/2013/05/participating-designermaf-couture.html">http://fashionmistonline.blogspot.nl/2013/05/<br />participating-designermaf-couture.html#!/2013/05/participating-<br />designermaf-couture.html</a><hr size="1" /> </p>
                                <p><span id ="mcol2" style="margin-left: 50">ZIMBIO</span><br /><a href="http://fashionmistonline.blogspot.nl/2013/05/participating-designermaf-couture.html#!/2013/05/participating-designermaf-couture.html">http://fashionmistonline.blogspot.nl/<br />2013/05/participating-designermaf-couture.html#!/<br />2013/05/participating-designermaf-couture.html</a><hr size="1" /> </p>
                                <p><span id ="mcol2" style="margin-left: 50">oodera</span><br /><a href="http://fashionmistonline.blogspot.nl/2013/05/participating-designermaf-couture.html#!/2013/05/participating-designermaf-couture.html">http://fashionmistonline.blogspot.nl/2013/05/<br />participating-designermaf-couture.html#!/2013/05/<br />participating-designermaf-couture.html</a> <hr size="1" /></p>
        </div>
        <div id="div3">
        <h3>BLOGS</h3>
         <h4 id ="fe">FEATURES</h4>
                            <p>pink-n-black-barbie</p><hr size="1" width="200px" />
                            <p>Afropolitan</p><hr size="1" width="200px" />
                             <p>Afropolitan</p><hr size="1" width="200px"  />
                              <p>African fabrics</p><hr size="1" width="200px" />
                               <p>fashion africa couture clothing</p><hr size="1" width="200px"  />
                                <p>something'else</p><hr size="1" width="200px"  />
                                 <p>Black girls killing it</p><hr size="1"width="200px"  />
                                  <p>African print in fashion</p><hr size="1" width="200px"  />
                                   <p>Adiree AFWNY</p><hr size="1" width="200px"  />
                                    <p>Elegancy 101</p><hr size="1"width="200px"  />
                                    <p>Gifted and tellented Foundation Afica</p><hr size="1" width="200px"  />
                                    <p>I love Africa</p><hr size="1" width="200px"  />
                                     <p><br /></p>
                          <p><br /></p>
                          <p><br /></p> <p><br /></p>
                          <p><br /></p>
                          <p><br /></p>
                           <p><br /></p>
                          <p><br /></p>
                          <p><br /></p> <p><br /></p>
                          <p><br /></p>
                          <p><br /></p>
                           <p><br /></p>
                          <p><br /></p>
                          <p><br /></p>
                           <p><br /></p>
                          <p><br /></p>
                          <p><br /></p>
                           <p><br /></p>
                          <p><br /></p>
                          <p><br /></p>
                          
        </div>
                </div>
            </div>

        </div>
    </body>

</html>
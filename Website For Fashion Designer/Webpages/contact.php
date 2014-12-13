<html>
    <head>
        <link rel="shortcut icon" href="../Images/logo.png">
        <title>Contact</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../CSS/pro_dropdown_2.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/contact.css" />
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
                    <li class="top"><a href="#" id="contacts" class="top_link"><span class="lower">CONTACT</span></a></li>


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
                    <p>CONTACT  <span> US</span></p>    
                </div>
                <div id="pagedesc"><h2><br /></h2></div>
                
          
            <div id="contactholder">
                <div id="diva">
                    <p> Mary Tataw E.<br />
                        3011PJ Hoogstraat
                        <br />Rotterdam, Nederlands <br /> <br /> <br />
                      </p>
                </div>
                <div id="divb">
                    <p> <a href="www.mafcouture.com">www.mafcouture.com</a>
                        <a href="mailto: mafcouture@gmail.com">mafcouture@gmail.com</a>
                        <a href="mailto:  info@mafcoutre.com"> info@mafcoutre.com</a>
                        <a href="mailto: sales@mafcouture.com">sales@mafcouture.com</a>
                        <a href="mailto: mafcouture@gmail.com">pr@mafcoutre.com</a><br >
                         Tel 06 84 68 90 98
 </p>
                </div>
                <div id="divc">
                    <p>Facebook page :M.A.F.COUTURE<br />
                                Instagram: Cutemissmary
                                <br />Twitter : mafcouture
                                <br />wordpress: mafcoutre<br /> <br /></p>
                </div>
            <div id="contact">
                <form action="contactme.php" method="post">
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
                </div>
                  </div>
    </body>

</html>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UCBMUN</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="css/committee_pages.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">        
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script src = "js/script.js"></script>
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
    </head>
    <body>
        <div id = "wrapper">
            <?php include 'menu.php'; ?>
            <div id = "echr_page2">
                <div id = "echr_content">  
                 
                    <div id="contact-box2">
                       <div id="contact-title">
                        Contact Us
                    </div>
                        <div id="contact-box-content">
                            <a href="mailto:sg@ucbmun.org">
                                <div id="first-section" class = "section">
                                    <div class = "contact_picture_container">
                                         <img src="assets/sec/Akash 1.jpg" class="profile">
                                    </div>
                                    <div class="description"> 
                                        <div class = "description_table">
                                            <div class = "description_container">
                                                Secretary General
                                                <div class="subdescription">
                                                   Akash Sharma
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:dsg@ucbmun.org">
                                <div id="second-section" class = "section">
                                    <div class = "contact_picture_container">
                                         <img src="assets/sec/Rajit 2.jpg" class="profile">
                                    </div>
                                    <div class="description"> 
                                        <div class = "description_table">
                                            <div class = "description_container">
                                                Deputy Secretary General
                                                <div class="subdescription">
                                                    Rajit Kinra
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:dbr@ucbmun.org">
                                <div id="third-section" class = "section">
                                    <div class = "contact_picture_container">
                                         <img src="assets/sec/Alice 2.jpg" class="profile">
                                    </div>
                                    <div class="description"> 
                                        <div class = "description_table">
                                            <div class = "description_container">
                                                Business Relations
                                                <div class="subdescription">
                                              Alice Ma
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:cos-external@ucbmun.org">
                                <div id="fourth-section" class = "section">
                                    <div class = "contact_picture_container">
                                         <img src="assets/sec/Varsha 2.jpg" class="profile">
                                    </div>
                                    <div class="description"> 
                                        <div class = "description_table">
                                            <div class = "description_container">
                                                Chief of Staff
                                                <div class="subdescription">
                                                 Varsha Vekatasubramaniam
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id = "info_content_container">
                        <div id = "info_content2">
                        <?php  
        					// check for a successful form post  
        					if (isset($_GET['s'])) {
        						echo "<div class=\"alert-success\">".$_GET['s']."</div>";  
        					}
        					// check for a form error  
        					elseif (isset($_GET['e'])) {
            					echo "<div class=\"alert-error\">".$_GET['e']."</div>";
     						   } 
        				?>
                                               
                            <div id = "info_header">
                                Contact Form
                            </div>
                            <div id = "info_text">   
                               <form action="verifyLogin.php" method="post">
                                        <div id = "form_elements">
                                        <div id="name">Name </div><input type="text" id="contact_name" name="contact_name" class="input-box"><br>
                                        <div id="email">Email </div> <input type="email" id="contact_email" name="contact_email" class="input-box"><br>
                                        <div id="college">College/University </div> <input type="text" id="contact_school" name="contact_school" class="input-box"><br>
                                        <div id="message">Message </div> <textarea id="contact_message" name="contact_message"></textarea><br>
                                        <script type="text/javascript">
                                        var RecaptchaOptions = {
                                            theme : 'blackglass'
                                        };
                                    </script>
                                    <?php
	                  					require_once('recaptchalib.php');
                  						$publickey = "6LcW--MSAAAAAP-bZrEbvsKfM33Rq2MGbBhgCmBy"; //Public Key
				                		echo recaptcha_get_html($publickey);
                					?>
                                    </div> 
                                                                       
                             
                                    <input type="hidden" name="save" value="contact">                                                                       
                                    <input type="submit" value="Submit" id="submit-btn">
                                </form>
                            </div>
                        </div>
                        <div class = "clear">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
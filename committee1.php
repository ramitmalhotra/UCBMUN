<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UCBMUN | Committees</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="css/committee_pages.css">
        <link rel="stylesheet" href="css/home.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">        
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
        <script src = "js/script.js"></script>
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
    </head>
    <body>
        <div id = "wrapper">
            <?php include 'menu.php';?>
            <div id = "echr_page">
            <div id = "echr_content">
                <div id = "image_sidebar_container">              <div id = "navbtn_content">
                        <div id = "navbtn_prev" class = "opacity">
                            &#10094; PREV
                        </div>
                           <a target = "_blank" onclick= "javascript:document.location.href='committee2.php'"><div id = "navbtn_next">
                            NEXT &#10095;
                        </div></a>
                    </div>
                    <div id = "image_sidebar">

                    <div id = "box_shadow">
                        <div id = "image_content">
                            <img src = "assets/sochum.jpg" class = "img_scaled_wh com_pic" id = "sochum">
                        </div>
                    </div>
                    </div>
                    <div id = "resource_title">
                    Resources
                    </div>
                    <div id = "resource_content">
                        <!--
                        <div class = "resource_item">
                            <img src = "assets/doc.png" class = "resource_icon">
                            <div class = "resource_item_header">BACKGROUND GUIDE
                            </div>
                            <div class = "resource_item_desc">Last updated: February 16, 2014
                            </div>
                        </div>
                        <div class = "resource_item">
                            <img src = "assets/doc.png" class = "resource_icon">
                            <div class = "resource_item_header">UPDATE PAPER
                            </div>
                            <div class = "resource_item_desc">No paper available
                            </div>
                        </div>
                        -->
                        <div class = "resource_item">
                          <img src = "assets/chair.png" class = "resource_icon">
                            <div class = "resource_item_header">HEAD CHAIR
                            </div>
                            <div class = "resource_item_desc">Damini Satija: sochum@ucbmun.org
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "info_content_container">
                    <div id = "info_content">
                        <div id = "info_header">
                            Social, Cultural, and Humanitarian Committee
                        </div>
                        <div id = "info_subheader">Specialized Bodies & General Assembly
                        </div>
                        <div id = "info_text">   
                            <p>The first topic this year's third committee of the General Assembly will consider is the torture of prison inmates, particularly those in areas of conflict. 
                            The committee will look at how much international progress has been made since the Abu Ghraib revelations of 2003, and where changes must still be made. 
                            Secondly, the SOCHUM committee will explore the changing landscape of privacy in an age of digital evolution. Since governments increasingly 
                            have the opportunity to launch digital surveillance on their citizens and purchase personal data from large tech corporations, this 
                            committee will investigate whether it is permissible for states to do so, and to what extent human rights are violated by such actions.</p>
                        </div>
                    </div>
                </div>
                <div class = "clear">
                </div>
            </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
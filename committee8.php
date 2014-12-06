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
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
        <script src = "js/script.js"></script>
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
    </head>
    <body>
        <div id = "wrapper">
           	<?php include 'menu.php'; ?>
            <div id = "echr_page">
            <div id = "echr_content">
                <div id = "image_sidebar_container">
                           <div id = "navbtn_content">
                       <a target = "_blank" onclick= "javascript:document.location.href='committee7.php'"> <div id = "navbtn_prev">
                            &#10094; PREV
                        </div></a>
                           <a target = "_blank" onclick= "javascript:document.location.href='committee9.php'"><div id = "navbtn_next">
                            NEXT &#10095;
                        </div></a>
                    </div>
                    <div id = "image_sidebar">
                    <div id = "box_shadow">
                        <div id = "image_content">
                            <img src = "assets/unsc.jpg" class = "img_scaled_wh com_pic">
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
                            <div class = "resource_item_desc">Divit Sood: unsc@ucbmun.org
                            </div>
                        </div>
                        <div class = "resource_item">
                          <img src = "assets/chair.png" class = "resource_icon">
                            <div class = "resource_item_header">CRISIS DIRECTOR
                            </div>
                            <div class = "resource_item_desc">Shayaan Abdullah: unsc@ucbmun.org
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "info_content_container">
                    <div id = "info_content">
                        <div id = "info_header">
                            UN Security Council
                        </div>
                        <div id = "info_subheader">
                            CRISIS COMMITTEES
                        </div>
                        <div id = "info_text">   
                            <p>
                            This year at UCBMUN XIX, the United Nations Security Council (UNSC) has specifically been called to 
                            address the subject of the Islamic State (IS) which continues to plague the Middle East, and 
                            threatens to spill over into neighboring countries and destabilize the region as a whole. 
                            The council must address issues pertaining to territorial aggression 
                            with specific regard to the Chinese belligerence in the ‘South China Sea’.
                            Additionally, delegates must be prepared to deal with the issues of militancy, 
                            famine and disease that weaken the integrity of the African continent. 
                            Finally delegates will have to confront the alleged Russian backed rebellions in Ukraine. 
                            Each issue needs to be tackled with tact and without hesitation or error. 
                            We invite you to come tango with us!</p>
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
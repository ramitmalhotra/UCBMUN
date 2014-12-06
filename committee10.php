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
            <?php include 'menu.php';?>
            <div id = "echr_page">
            <div id = "echr_content">
                <div id = "image_sidebar_container">
                           <div id = "navbtn_content">
                       <a target = "_blank" onclick= "javascript:document.location.href='committee9.php'"> <div id = "navbtn_prev">
                            &#10094; PREV
                        </div></a>
                           <a target = "_blank" onclick= "javascript:document.location.href='committee11.php'"><div id = "navbtn_next">
                            NEXT &#10095;
                        </div></a>
                    </div>
                    <div id = "image_sidebar">
                    <div id = "box_shadow">
                        <div id = "image_content">
                            <img src = "assets/adhoc.jpeg" class = "img_scaled_wh stretch com_pic" id = "adhoc">
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
                            <div class = "resource_item_desc"> Mikaela Rear: adhoc@ucbmun.org
                            </div>
                        </div>
                        <div class = "resource_item">
                          <img src = "assets/chair.png" class = "resource_icon">
                            <div class = "resource_item_header">CRISIS DIRECTOR
                            </div>
                            <div class = "resource_item_desc">Apratim Vidyarthi: adhoc@ucbmun.org
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "info_content_container">
                    <div id = "info_content">
                        <div id = "info_header">
                            Ad-Hoc Committee of the Secretary General
                        </div>
                        <div id = "info_subheader">
                            CRISIS COMMITTEES
                        </div>
                        <div id = "info_text">   
                            <p>
                                The Ad-Hoc Committee of the Secretary General is the flagship committee offered by 

                                UCBMUN. High quality debate is expected from this application based committee. In

                                the vein of all Ad-Hocs, delegates will be tested on every nuance of MUN, from accurate 

                                debate to diplomacy and leadership. Since the name of the committee is indeed "Ad-
                                Hoc", delegates will only receive the committee topic and a lengthy background guide 

                                a week before committee. In addition to the background guide, delegates are also 

                                expected to gain familiarity with the topic in the few days that they have. Similar to other 

                                committees; however, delegates will participate in debate, argue loudly about things, be 

                                diplomatic, write directives about crises, overwhelm the crisis staff with complicated 

                                notes, make points and motions...and perhaps even go to the bathroom during unmods. 

                                Although we expect a fast-paced and high-quality committee, we encourage all sorts of experienced 

                                delegates to apply. Join Chair Mikaela Rear and Crisis Director Apratim Vidyarthi as they 

                                challenge you and aim to make your life complicated. Committee applications will be 

                                available through your head-delegate. Crises will be fast paced, and this committee will 

                                do everything it can to completely reshape your life and change the way you think, and 

                                we hope to see you there.
                            </p>
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
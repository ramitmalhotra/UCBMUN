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
                       <a target = "_blank" onclick= "javascript:document.location.href='committee11.php'"> <div id = "navbtn_prev">
                            &#10094; PREV
                        </div></a>
                           <a target = "_blank" onclick= "javascript:document.location.href='committee13.php'"><div id = "navbtn_next">
                            NEXT &#10095;
                        </div></a>
                    </div>
                    <div id = "image_sidebar">
                    <div id = "box_shadow">
                        <div id = "image_content">
                            <img src = "assets/tongwars.png" class = "img_scaled_wh com_pic">
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
                            <div class = "resource_item_desc">Lorenzo Ramos: tong-wars@ucbmun.org
                            </div>
                        </div>
                        <div class = "resource_item">
                          <img src = "assets/chair.png" class = "resource_icon">
                            <div class = "resource_item_header">CRISIS DIRECTOR
                            </div>
                            <div class = "resource_item_desc">Grayson Dimick: tong-wars@ucbmun.org
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "info_content_container">
                    <div id = "info_content">
                        <div id = "info_header">
                            Tong Wars
                        </div>
                        <div id = "info_subheader">CRISIS COMMITTEES
                        </div>
                        <div id = "info_text">   
                            <p>The year is 1893. Seedy opium dens, dark alleys, rampant prostitution, and bloody guerilla warfare are the defining features of San Francisco's Chinatown. 
                            This was not always the case: fleeing from violence and persecution in the mines during the 1850s Gold Rush, 
                            Chinese immigrants sought refuge in San Francisco, forming a quiet community in the heart of the city. 
                            Within a few decades, however, the Chinese found themselves entrapped not only by a discriminatory government, 
                            but also by their fellow neighbors, as vicious gang warfare ensnared the alleys and rooftops of Chinatown. 
                            Although the tong gangs formed with harmless intentions of collective protection for their fellow 
                            countrymen, the committee will discover that the illicit markets of Chinatown are a much more lucrative business-although running gambling, 
                            prostitution, and opium rackets is risky business, especially when your rivals are out to separate your head with a hatchet. From the 
                            boo how doy to the corrupt contacts inside of City Hall, delegates will be responsible for ensuring the dominance of the Chee Kong Tong by 
                            any means necessary. Rival gangs, the San Francisco police, concerned missionaries, and a terrified community lurk at every turn, seeking 
                            to bring about your downfall. Shady deals, intimidation, image control, betrayal, and above all, outsmarting the opposition will be vital 
                            if the Chee Kong is to survive. As committee will be situated near the heart of where the battles took place and blood flowed, delegates 
                            will have the unique opportunity to battle for dominance as they relive one of the darkest and most complex eras in San Francisco's history.
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
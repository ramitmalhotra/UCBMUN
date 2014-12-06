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
                       <a target = "_blank" onclick= "javascript:document.location.href='committee8.php'"> <div id = "navbtn_prev">
                            &#10094; PREV
                        </div></a>
                           <a target = "_blank" onclick= "javascript:document.location.href='committee10.php'"><div id = "navbtn_next">
                            NEXT &#10095;
                        </div></a>
                    </div>
                    <div id = "image_sidebar">
                    <div id = "box_shadow">
                        <div id = "image_content">
                            <img src = "assets/britian.jpg" class = "img_scaled_wh com_pic">
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
                            <div class = "resource_item_desc">Othmane Benkirane: vikings@ucbmun.org
                            </div>
                        </div>
                        <div class = "resource_item">
                          <img src = "assets/chair.png" class = "resource_icon">
                            <div class = "resource_item_header">CRISIS DIRECTOR
                            </div>
                            <div class = "resource_item_desc">Or-El Vaknin: vikings@ucbmun.org
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "info_content_container">
                    <div id = "info_content">
                        <div id = "info_header">
                            Vikings 865: The Conquest of the British Isles
                        </div>
                        <div id = "info_subheader">
                            CRISIS COMMITTEES
                        </div>
                        <div id = "info_text">   
                            <p>
                            In the fight for the Danelaw, and the conquest of the British Isles, the Vikings formed

                            together to form one "Great Heathen Army". This army, led by multiple Vikings in open 

                            fashion, could provide the Vikings with the vague organization needed to sweep across 

                            the British Isles, conquering and looting as they go. The Vikings have a fight for honor 

                            at stake as well, with the two main leaders (Halfdan Ragnarsson and Ivar the Boneless) 

                            having had their father, Ragnar Lodbrok, killed at the hands of Ælla of Northumbria. 

                            Bloody vengeance and the honor of a great Viking leader is at stake, and delegates will 

                            have the opportunity to lead armies, plan battles, and fight for control of the Viking 

                            armies. Seeking glory, power, riches, and revenge, delegates can fight the enemy together, 

                            or alone, and maneuver between themselves to try to gain a larger stake in the Great 

                            Heathen Army. Clan loyalties and rivalries are likely, leading to various degrees of 

                            infighting, even as the Vikings attempt to complete a sweep across the British Isles in 

                            chaotic fashion. Delegates will have to balance their decentralized participation in the 

                            Great Heathen Army with the various aspirations of each other, all while fighting a war 

                            against an organized but smaller enemy. Vikings from the Danelaw will find themselves 

                            united, but also wondering where to begin their strikes on the enemy kingdoms, and 

                            where to lead their troops, and by what transport. There is ample room for inter-
                            delegate fighting, and the delegates will have to pick their battles wisely. At all turns this 

                            committee promises to be fast-paced and complex, and delegates have the prospects to 

                            choose their own fate, and affect the fate of their comrades, at any given moment!
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
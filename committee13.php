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
                       <a target = "_blank" onclick= "javascript:document.location.href='committee12.php'"> <div id = "navbtn_prev">
                            &#10094; PREV
                        </div></a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee14.php'"><div id = "navbtn_next">
                            NEXT &#10095;
                        </div>
                    </div>
                    <div id = "image_sidebar">
                    <div id = "box_shadow">
                        <div id = "image_content">
                            <img src = "assets/secondwar.jpg" class = "img_scaled_wh com_pic">
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
                            <div class = "resource_item_desc">Ramit Malhotra: the-second@ucbmun.org
                            </div>
                        </div>
                        <div class = "resource_item">
                          <img src = "assets/chair.png" class = "resource_icon">
                            <div class = "resource_item_header">CRISIS DIRECTOR
                            </div>
                            <div class = "resource_item_desc">Daniel Remler: the-second@ucbmun.org
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "info_content_container">
                    <div id = "info_content">
                        <div id = "info_header">
                            The Second Peloponnesian War
                        </div>
                        <div id = "info_subheader">CRISIS COMMITTEES
                        </div>
                        <div id = "info_text">   
                            <p>                                
                                Between 431 and 404 BCE the Delian League, led by Athens, and the Peloponnesian

                                League, led by Sparta, fought the Peloponnesian War, a conflict that has defined 

                                Western history since Thucydides first wrote his gripping history. Fought between a 

                                rising superpower against the previously dominant power, the rise of Athens made 

                                war in Thucydides' estimation,''inevitabl''. A war both sides believed they could win 

                                quickly and fought for ideology as much as for geopolitics, within a generation it had 

                                brought horrors unseen in Greece even during the Persian invasions, such as plague 

                                and famine. A war for the destiny of Greece, it brought epochal change to Greek 

                                civilization and marked the end of its golden age. This committee will be comprised of 

                                delegates from the Delian League as they attempt to survive the Peloponnesian attack 

                                and ensure the security of their city-states for the next generation. With overwhelming 

                                sea power, a zeal for democracy and an unwieldy coalition more afraid of Sparta than 

                                loyal to Athens, delegates will have to maintain political solidarity, set the objectives for 

                                the war and ultimately claim victory in a conflict that pits the two Greek superpowers 

                                of the age against one another. The city-states of the Delian League must judge the 

                                long term survival of their polities above all else, and only enter this war believing that 

                                Spartan hegemony would spell their enslavement. It will be the work of the delegates 

                                assembled to both work towards a united alliance while maintaining their own security. 

                                The committee will open in 431 on the eve of the very first Spartan invasion of Attica. 

                                Delegates should come prepared to fight a war like no other.
                            
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
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
        <link rel="stylesheet" href="css/sponsors.css">
        <link rel="stylesheet" href="css/committees.css">
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
            <div id = "committees_page">
                <div id = "committeespg_content">
                    <div id = "committeespg_content_header">
                        Committees
                    </div>
                    <div id="setOne" class = "committeespg_subheader">
                        Specialized Bodies & General Assembly
                    </div>
                    <div class = "committeespg_section">
                        <a target = "_blank" onclick= "javascript:document.location.href='committee1.php'">
                            <div class = "com_item_container">  
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item"> 
                                    <div class = "com_item_img_content">
                                        <img src = "assets/sochum.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    Social, Cultural and Humanitarian
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee2.php'">
                            <div class = "com_item_container">
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/worldbank.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    World Bank
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee3.php'">
                            <div class = "com_item_container">
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/africanunion.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    African Union
                                </div>
                            </div>
                        </a>
                       <a target = "_blank" onclick= "javascript:document.location.href='committee4.php'">
                            <div class = "com_item_container">
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/icj.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    International Court of Justice
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee5.php'">
                            <div class = "com_item_container">         
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item"> 
                                    <div class = "com_item_img_content">
                                        <img src = "assets/nam.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    Non-Aligned Movement
                                </div>
                            </div>
                        </a>
                        <div class = "clear">
                        </div>
                    </div>
                    <div id="setTwo" class = "committeespg_subheader">
                        Crisis Committees
                    </div>
                    <div class = "committeespg_section">
                        <a target = "_blank" onclick= "javascript:document.location.href='committee6.php'">
                            <div class = "com_item_container">
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div> 
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/seasteading.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    Seasteading: the New Frontier of Civilization
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee7.php'">
                            <div class = "com_item_container">
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div> 
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/ostpolitik.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    Ostpolitik-The Government of Willy Brandt 1969
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee8.php'">
                            <div class = "com_item_container">        
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/unsc.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    UN Security Council
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee9.php'">
                            <div class = "com_item_container">
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/britian.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                               <div class = "com_item_content">
                                    Vikings 865: The Conquest of the British Isles
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee10.php'">
                            <div class = "com_item_container">         
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/adhoc.jpeg" class = "img_scaled_wh com_item_img stretch">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    Ad-Hoc Committee of the Secretary General
                                </div>
                            </div>
                        </a>
                        <a target = "_blank" onclick= "javascript:document.location.href='committee11.php'">
                            <div class = "com_item_container">         
                                <div class = "modal">
                                    <div class = "modal_vertical">
                                        <div class = "modal_content">
                                            <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                        </div>
                                    </div>
                                </div>
                                <div class = "com_item">
                                    <div class = "com_item_img_content">
                                        <img src = "assets/petrol.jpg" class = "img_scaled_wh com_item_img">
                                    </div>
                                </div>
                                <div class = "com_item_content">
                                    World Petroleum Congress
                                </div>
                            </div>
                        </a>
                    <a target = "_blank" onclick= "javascript:document.location.href='committee12.php'">
                        <div class = "com_item_container">         
                            <div class = "modal">
                                <div class = "modal_vertical">
                                    <div class = "modal_content">
                                        <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                    </div>
                                </div>
                            </div>
                            <div class = "com_item">
                                <div class = "com_item_img_content">
                                    <img src = "assets/tongwars.png" class = "img_scaled_wh com_item_img">
                                </div>
                            </div>
                            <div class = "com_item_content">
                                Tong Wars
                            </div>
                        </div>
                    </a>
                    <a target = "_blank" onclick= "javascript:document.location.href='committee13.php'">
                        <div class = "com_item_container">         
                            <div class = "modal">
                                <div class = "modal_vertical">
                                    <div class = "modal_content">
                                        <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                    </div>
                                </div>
                            </div>
                            <div class = "com_item">
                                <div class = "com_item_img_content">
                                    <img src = "assets/secondwar.jpg" class = "img_scaled_wh com_item_img">
                                </div>
                            </div>
                            <div class = "com_item_content">
                                The Second Peloponnesian War
                            </div>
                        </div>
                    </a>
                    <a target = "_blank" onclick= "javascript:document.location.href='committee14.php'">
                        <div class = "com_item_container">        
                            <div class = "modal">
                                <div class = "modal_vertical">
                                    <div class = "modal_content">
                                        <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                    </div>
                                </div>
                            </div>
                            <div class = "com_item">
                                <div class = "com_item_img_content">
                                    <img src = "assets/terror.jpg" class = "img_scaled_wh com_item_img">
                                </div>
                            </div>
                            <div class = "com_item_content">
                                Reign of Terror
                            </div>
                        </div>
                    </a>
                    <div class = "clear">
                    </div>
                </div>
                <div id="setThree" class = "committeespg_subheader">
                    Joint-Crisis Committees: The New World
                </div>
                <div class = "committeespg_section">
                    <a target = "_blank" onclick= "javascript:document.location.href='committee15.php'">
                        <div class = "com_item_container">
                            <div class = "modal">
                                <div class = "modal_vertical">
                                    <div class = "modal_content">
                                        <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                    </div>
                                </div>
                            </div>
                            <div class = "com_item"> 
                                <div class = "com_item_img_content">
                                    <img src = "assets/spain.png" class = "img_scaled_wh com_item_img">
                                </div>
                            </div>
                            <div class = "com_item_content">
                                Spain
                            </div>
                        </div>
                    </a>
                    <a target = "_blank" onclick= "javascript:document.location.href='committee16.php'">
                        <div class = "com_item_container">
                            <div class = "modal">
                                <div class = "modal_vertical">
                                    <div class = "modal_content">
                                        <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                    </div>
                                </div>
                            </div>
                            <div class = "com_item">
                                <div class = "com_item_img_content">
                                    <img src = "assets/england.jpg" class = "img_scaled_wh com_item_img">
                                </div>
                            </div>
                            <div class = "com_item_content">
                                England
                            </div>
                        </div>
                    </a>
                    <a target = "_blank" onclick= "javascript:document.location.href='committee17.php'">
                        <div class = "com_item_container">
                            <div class = "modal">
                            <div class = "modal_vertical">
                                    <div class = "modal_content">
                                        <img src = "assets/view.png" width="25" height="25" class = "view_icon">
                                    </div>
                                </div>
                            </div>
                            <div class = "com_item">
                                <div class = "com_item_img_content">
                                    <img src = "assets/france.png" class = "img_scaled_wh com_item_img">
                                </div>
                            </div>
                            <div class = "com_item_content">
                                France
                            </div>
                        </div>
                    </a>
                        <div class = "clear">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
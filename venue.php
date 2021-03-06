<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UCBMUN | Venue</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="css/sponsors.css">
        <link rel="stylesheet" href="css/conference.css">
        <link rel="stylesheet" href="css/home.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
        <script src = "js/script.js"></script>        
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
    </head>
    <body>
        <div id = "wrapper">
            <?php include 'menu.php'; ?>
            <div id = "conf_page">
                <div id = "confpg_content">
                    <div id = "confpg_content_header">
                        Venue
                    </div>
                    <div class = "confpg_section">
                        <div id = "venue_container">
                            <div id = "venue_img">
                                <div id = "venue_overlay">
                                    <div id = "venue_overlay_content">
                                        The Hilton SF: Financial District 
                                    </div>
                                </div>
                                <img src = "assets/hilton.jpg" class = "img_scaled_wh" id = "hilton_pic">
                            </div>
                            <div id = "venue_map">
                                <div class="well span5 offset3">
                                    <div style="width:400px;height:300px">
                                        <iframe width="400" height= "300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=750%2BKearny%2BSt%2BSan%2BFrancisco%2C%2BCA(Hilton+Financial+District)&amp;ie=UTF8&amp;z=14&amp;t=m&amp;iwloc=addr&amp;output=embed">
                                        </iframe><br><table width="465" cellpadding="0" cellspacing="0" border="0">
                                        <tbody><tr>
                                            <td align="left"><small>
                                              <a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=750%2BKearny%2BSt%2BSan%2BFrancisco%2C%2BCA(Hilton+Financial+District)&amp;ie=UTF8&amp;z=14&amp;t=m&amp;iwloc=addr">View Larger Map</a>
                                            </small>
                                          </td>
                                        </tr>
                                        </tbody></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id = "venue_desc_container">
                             <div class = "confpg_subheader_2">
                                The Hilton SF: Financial District
                            </div>
                             <p id = "venue_desc">
                                UCBMUN XIX will be hosted at the Hilton San Francisco Financial District. This hotel venue sits at the crossroads of three of the most well known neighborhoods in San Francisco: Chinatown, Russian Hill, and the Financial District. Their central location allows delegates to get a feel for the entire city. Food and nightlife abound around the Hilton.<br>
                                UCBMUN has secured a special group rate at the Hilton for accodomations. To make reservations, please visit the <a href = " http://www.hilton.com/en/hi/groups/personalized/S/SFOFDHF-UCB-20150226/index.jhtml?WT.mc_id=POG" target = "_blank"><b>online Hilton page</b></a> or call the Hilton toll-free at 1-800-424-8292. Be sure to identify yourself as part of UC Berkeley Model United Nations.
                            </p>
                        </div>
                      <!--  <div class = "confpg_subheader">
                            Explore San Francisco
                        </div>
                        <div id = "explore_container">
                            <img src = "assets/alcatraz.jpg" class = "img_scaled_wh">
                            <div id = "button_1">
                            </div>
                            <div id = "button_2">
                            </div>
                        </div>
-->
                    </div>
                </div>
            </div> 
        </div>   
        <?php include 'footer.php';?>
    </body>
</html>
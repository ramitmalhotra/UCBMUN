<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UCBMUN | Home</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="css/home.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">        
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>        
        <script type="text/javascript">

		    var _gaq = _gaq || [];
		    _gaq.push(['_setAccount', 'UA-42656598-2']);
		    _gaq.push(['_trackPageview']);
		
		    (function() {
		      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		    })();
		
	  	</script>
    </head>
    <body>
        <div id = "wrapper">
            <div id = "landing_cover">
                <div id = "landing_nav">
                    <div id = "landing_nav_content">
                        <a href = "#landing_cover" class = "smoothScroll">
                            <div id = "landing_nav_logo">
                                <img src = "assets/ucbmunlogo.png" class = "img_scaled" id = "logo">
                            </div>
                        </a>
                        <div id = "landing_nav_item_container">
                            <a href = "#landing_cover" class = "smoothScroll">
                                <div class = "landing_nav_item">
                                    Home
                                </div>
                            </a>
                            <div class = "landing_nav_item" id = "conference_nav">
                                <div id = "conference_drop_container">
                                    <div id = "triangle">
                                    </div>
                                    <a target = "_blank" onclick= "javascript:document.location.href='venue.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Venue
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='fees.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Fee Information
                                            </div>
                                        </div>
                                    </a>
                                    <!--
                                    <a target = "_blank" onclick= "javascript:document.location.href='events.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Events
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='schedule.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Schedule
                                            </div>
                                        </div>
                                    </a>
                                    -->
                                    
                                    <a target = "_blank" onclick= "javascript:document.location.href='secretariat.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Secretariat
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='exploresf.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Explore SF!
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='letter.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Welcome Letter
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                Conference <i class = "fa fa-caret-down caret"></i>
                            </div>
                            <a target = "_blank" onclick= "javascript:document.location.href='committees.php'"><div class = "landing_nav_item">
                                Committees
                            </div></a>
                            <!--
                            <a target = "_blank" onclick= "javascript:document.location.href='sponsors.php'">
                                <div class = "landing_nav_item">
                                    Sponsors
                                </div>
                            </a>
                            -->
                            <a target = "_blank" onclick= "javascript:document.location.href='contact.php'">
                                <div class = "landing_nav_item">
                                    Contact
                                </div>
                            </a>
                            <?php 
                            	if(isset($_SESSION['username'])){
								echo '<div class = "landing_nav_item" id = "user_nav">
                                <div id = "user_drop_container">
                                    <a target = "_blank" onclick= "javascript:document.location.href=\'delegationHome.php\'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                My Home
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href=\'logout.php\'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Logout
                                            </div>
                                        </div>
                                    </a>                                    
                                </div>'.$_SESSION['user'].'
                                 <i class = "fa fa-caret-down caret"></i>
                            </div>';
							}			
                            ?>
                        </div>
                        <div class = "clear">
                        </div>
                    </div>
                </div>
                <div id = "landing_cover_content">
                    <div id = "landing_cover_header">
                        <div id = "landing_cover_title">    
                            UCBMUN | XIX
                        </div>
                        <div id = "landing_cover_logo">
                            <img src = "assets/ucbmunlogo.png" class = "img_scaled">
                        </div>
                        <div id = "button_container">
	                        <a target = "_blank" onclick= "javascript:document.location.href='registration.php'">
	                            <div id = "landing_cover_register">
	                                 <div id = "register_caption">
	                                    Register 
	                                </div>
	                                <div id = "register_icon">
	                                    <img src = "assets/pen.png" width="35" height="35">
	                                </div>
	                            </div>  
	                        </a>                      
	                        <a target = "_blank" onclick= "javascript:document.location.href='main_login.php'">
		                        <div id = "landing_cover_login">
		                             <div id = "login_caption">
		                                Login 
		                            </div>
		                            <div id = "login_icon">
		                                <img src = "assets/login.png" width="35" height="35">
		                            </div>
		                        </div>
		                	</a>
                        </div>
                        <div class = "clear">
                        </div>
                        <div id="news_tick">
                        	Early Registrations Closed! <br/>
                        	Regular Registrations now <br>OPEN!
                        </div>                        
                        <div id = "landing_cover_subtitle">
                            UC Berkeley's intercollegiate MUN conference
                        </div>
                    </div>
                    <div id  = "landing_cover_img">
                        <img src = "assets/sftest3.jpg" class = "img_scaled_wh">
                    </div>
                </div>
            </div>
            <div id = "landing_welcome">
                <div id = "landing_welcome_content">
                   <div id = "secgen"> <img src = "assets/sec/akashoutline.png"  width="250px" height="250px" id = "secretary"></div>
                <div id = "welcome_text_content">
                    <div id = "landing_welcome_title">
                        Welcome to UCBMUN XIX
                    </div>
                    <p id = "landing_welcome_letter">
                        Delegates, Faculty Advisors, Sponsors, and Visitors,
                        As the Secretary General of UCBMUN, it is my utmost honor to welcome you to UC Berkeley Model United Nations Conference XIX from February 26th until March 1st, 2015. This year UCBMUN will take place in the beautiful, albeit foggy, city of San Francisco at the Hilton in the Financial District.
                    </p>
                     <a target = "_blank" onclick= "javascript:document.location.href='letter.php'">
                        <div id = "landing_welcome_button" class = "button">
                            Read the letter
                        </div>
                    </a>
                </div>
            </div>
            </div>
            <div id = "committees_page">
                <div id = "committees_sidebar">
                    <div id = "committees_sidebar_content">
                        <div id="setOne" class = "sidebar_item">
                            <div class = "sidebar_icon">
                                <img src = "assets/committee.png" class = "img_scaled_wh">
                            </div>
                            <div class = "sidebar_caption"><b>SET ONE</b><br>Specialized Bodies & <br>General Assembly
                            </div>
                                
                        </div>
                        <div id="setTwo" class = "sidebar_item">
                            <div class = "sidebar_icon"> 
                                <img src = "assets/committee2.png" class = "img_scaled_wh">
                            </div>
                            <div class = "sidebar_caption"><b>SET TWO</b><br>Crisis Committees
                            </div>
                        </div>
                        <div id="setThree" class = "sidebar_item">
                            <div class = "sidebar_icon">
                              <img src = "assets/committee3.png" class = "img_scaled_wh">
                            </div>
                            <div class = "sidebar_caption"><b>SET THREE</b><br>Joint-Crisis Committees
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "committees_content">
                    <div id = "committees_content_title">
                        17 Ways to Solve Global Problems
                    </div>
                    <p id = "committees_content_desc">  
                        The 17 committees at UC Berkeley Model United Nations 
                        Conference XIX address a breadth of issues, aiming 
                        to challenge delegates and allow for productive debate. 
                        The conference is divided into three sets of committees: 
                        Specialized Bodies and General Assembly, Crisis Committees, and, 
                        after their immense success last year, Joint-Crisis Committees.
                    </p>
                     <a target = "_blank" onclick= "javascript:document.location.href='committees.php'"><div id = "committees_button" class = "button">
                        View Committees
                    </div></a>
                </div>
            </div>
            <div id = "sf_page">
            <div id = "sf_page_content">
                <div id = "sf_content">
                    <div id = "sf_content_title">
                        San Francisco & the Bay
                    </div>
                    <p id = "sf_content_text">
                        The birthplace of the UN, San Francisco, is called home
                         by many diverse nationalities and cultures. Situated in the heart 
                        of the city, UCBMUN XIX is perfectly placed for delegates to discover 
                        all parts of the city. With a variety of social events, delegates will 
                        explore the city taking in the sights and sounds of one of the world’s 
                        most famous cities. Tours around the Bay Area will let delegates see 
                        the city that beatniks, immigrants, and tech start ups have all called home.
                    </p>
                    <a target = "_blank" onclick= "javascript:document.location.href='exploresf.php'"><div id = "sf_button" class = "button">
                        Explore SF
                    </div></a>
                </div>
                <div id = "sf_content_img">
                    <img src = "assets/ggb.jpg" class = "img_scaled_wh" id = "sf_img">
                </div>
                <div class = "clear">
                </div>
            </div>
            </div>
            <div id = "staff_page">
                <div id = "staff_content">
                    <div id = "staff_content_title">
                        Experienced Staff, Ready to Help
                             <img src = "assets/staff.png" width="300px" height="300px" id = "staff_icon">
                    </div>
                    <p id = "staff_content_text">
                        The secretariat of UCBMUN XIX comes from across the globe, from far-east 
                        Asia to Orange County. The conference staff brings with it experience in both the high school 
                        circuit and the collegiate circuit. Training provided the 
                        entire school year ensures that all staff can provide an 
                        incredible experience to our delegates. Members are constantly available to help delegates 
                        enjoy, learn, and excel at UCBMUN XIX.
                    </p>
                         <a target = "_blank" onclick= "javascript:document.location.href='secretariat.php'"><div id = "staff_button" class = "button">
                        Meet the Secretariat
                    </div></a>
                </div>
            </div>
            <div id = ""></div>
            <div class = "clear">
            </div>
        </div>
        <!--  Le JS to not block laoding of page -->        
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src= "js/smoothscroll.js"></script> 
        <script src = "js/script.js"></script>
        <?php include 'footer.php';?>
    </body>
</html>
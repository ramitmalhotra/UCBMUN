<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In | UCBMUN XVIII</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.icon-large.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/committee_pages.css">	
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/home.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/png" href="assets/favicon.png">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">        
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>   		    
</head>
<body>
        <div id = "wrapper">
              <div id = "sponsors_nav">
                    <div id = "landing_nav_content">
                        <a target = "_blank" onclick= "javascript:document.location.href='index.php'">
                            <div id = "landing_nav_logo">
                                <img src = "assets/ucbmunlogo.png" class = "img_scaled" id = "logo">
                            </div>
                        </a>
                        <div id = "landing_nav_item_container">
                            <a target = "_blank" onclick= "javascript:document.location.href='index.php'">
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
                                    <a class = "smoothScroll" href = "#conf_page">
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
                            <a target = "_blank" onclick= "javascript:document.location.href='sponsors.php'"><div class = "landing_nav_item">
                                Sponsors
                            </div></a>
                            -->
                            <a href = "contact.php" class = "smoothScroll">
                                <div class = "landing_nav_item">
                                    Contact
                                </div>
                            </a>
                        </div>
                        <div class = "clear">
                        </div>
                    </div>
                </div>
           <div id = "echr_page2">
            <div id = "echr_content"> 
            <div id = "info_content_container">
                        <div id = "info_content2">
                        <?php
					        if(isset($_SESSION[$myusername])){
					          echo   
					          '<div class="well span4 offset4" style="margin-top:150px">
					            <center>
					              <p> 
					                 Hey there! You are already logged in. <br /> 
					                 Nothing to see here <br />
					                 Watch <a href="http://www.youtube.com/watch?v=2mVnXU_KN68" target="_blank">this </a> instead. <br />
					              </p>
					            </center>
					          </div> 
					          <script src="http://code.jquery.com/jquery.js"></script>
					          <script src="js/bootstrap.min.js"></script>';
					          die();
					        }
					      ?>
        				<?php
		          			 if (isset($_GET['e'])) {
		           				$errorString = "Incorrect Username or Password";
		                		echo "<div class=\"alert alert-error\" style=\"margin-left:10px\">".$errorString."</div>";
		            			}   
	         			?>             
                            <div id = "info_header">
                                Log In
                            </div>
                            <!--<div id = "info_subheader">Please fill out the form below if you wish to contact us with any questions or requests.
                            </div>-->
                            <div id = "info_text">   
                               <form action="checkLogin.php" method="post">
                                    <div id="name">Username </div><input type="text" id="myusername" name="myusername" class="input-box"><br>
                                    <div id="email">Password </div> <input type="password" id="mypassword" name="mypassword" class="input-box"><br>                					                  					                                    
                                    <input type="submit" value="Submit" id="submitForm">
                                </form>
                            </div>
                        </div>
                        <div class = "clear">
                        </div>
					</div>	                        
   				</div>
    		</div>
		</div>
	
	<!-- JAVASCRIPT -->
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
	   $("#submitForm").click(function() {
		   	event.preventDefault();
	    	var username = $("#inputName").val();
	    	var password = $("#inputPassword").val();
		    if(!username.match(/\S/)) {
		        alert ('Your username can not be empty!');
		        return false;
		    } else if (!password.match(/\S/)) {
		        alert ('Your password can not be empty!');
		        return false;
		    }      
	       $("#loginForm").submit();
	   });
	});
	</script>  
</body>
</html>
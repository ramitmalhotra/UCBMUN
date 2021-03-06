<!-- <?php
session_start();
?>-->
<!DOCTYPE html>
<html>
    <head>
        <title>UCBMUN</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap.icon-large.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">        
        <link rel="stylesheet" href="css/committee_pages.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/registration.css">        
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">        
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
                            <a href = "#echr_page2" class = "smoothScroll">
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
                    <!--<?php
        				session_start();
        				if( isset($_SESSION['username']) ){
          				echo '  
          				<div class="info_text">
            				<center>
              					<p> 
                 					Hold up! You can not register twice! <br />
                 					But if you really want something else to do <br />
                 					you can watch <a href="http://www.youtube.com/watch?v=vD186euK58Y" target="_blank">this</a>
              					</p>
            				</center>
          				</div> 
          				<script src="http://code.jquery.com/jquery.js"></script>
          				<script src="js/bootstrap.min.js"></script> 
          				';
          				die();
        				}
      				?>-->
                        <div id = "header">
                            Registration
                        </div>
                        <div id = "welcome">
                            Please fill out the form and read the terms of conditions to complete your school's registration for UCBMUN XVIII. In case of any questions or concerns regarding registration, please contact cos-external@ucbmun.org.
                        </div>
                        <div id = "info_content2">
                            <div id = "info_header">
                                Contact Information
                            </div>
                            <!--<div id = "info_subheader">Please fill out the form below if you wish to contact us with any questions or requests.
                            </div>-->
                            <div id = "info_text">   
                               <form id="registrationForm" action="registrationLoginCheck.php" method="post">
                               		<!--<?php
           								if (isset($_GET['s'])){ 
											echo "<div class=\"alert alert-success\">"."Thank you for registering for UCBMUN XVIII. We look forward to seeing you in March."."</div>";
										}  
           								if (isset($_GET['e'])) {
                							echo "<div class=\"alert alert-error\" style=\"text-align:center\">".$_GET['e']."</div>";
            							}   
          							?>-->
                                    <div id="name">Head Delegate/Faculty Advisor </div><input type="text" id="inputPrimatyContact" name="inputPrimatyContact" class="input-box" placeholder="John Doe"><br>
                                    <div id="email">Email </div> <input type="email" id="inputPrimaryEmail" name="inputPrimaryEmail" class="input-box" placeholder="john@doe.com"><br>
                                    <div id="college">Phone Number </div> <input type="tel" id="inputPrimaryPhone" name="inputPrimaryPhone" class="input-box" placeholder="(XXX)-XXX-XXXX"><br>
                                    <div id="message">
                                    Address </div> <textarea id="inputAddress" style="margin: 2px; width: 270px; height: 70px;"></textarea><br>
                                    <div id = "info_header" class = "middle">
                                        Delegation Information
                                    </div>
                                    <div id="name">University </div><input type="text" id="inputUniversity" name="inputUniversity" class="input-box"><br>
                                    <div id="email">Delegation Size </div> <input type="number" id="inputDelegation" name="inputDelegation" class="input-box"><br>
                                    <div id = "info_header" class = "middle">
                                        Login Information
                                    </div>
                                    <div id="name">Username </div><input type="text" id="inputUserName" name="inputUserName" class="input-box"><br>
                                    <div id="email" data-toggle="tooltip" title="Password must be at least 7 characters long">Password</div> <input type="password" id="inputPassword" name="inputPassword" onChange="checkPasswordLength();" class="input-box"><br>
                                    <div style="display:inline-block" id="pwlong" class="iconCheck">
					                	<i class="icon-ok" id="pwlong"></i>
					              	</div>
					              	<div style="display:inline-block" id="pwshort" class="iconCheck">
					                	<i class="icon-remove"id="pwshort"></i>
					              	</div>
                                    <div id="email">Confirm Password </div> <input type="password" id="inputConfirmPassword" name="inputConfirmPassword" onChange="checkPasswordMatch();" class="input-box"><br>
                                    <div style="display:inline-block" id="match" class="iconCheck">
						                <i class="icon-ok" id="pwmatch"></i>
							        </div>
							        <div style="display:inline-block" id="nomatch" class="iconCheck">
							            <i class="icon-remove"id="pwnomatch"></i>
							        </div>
							        <h6 style="color:red; text-align:center"> All fields required </h6>
                                    <div id = "terms_container">
                                        <div id = "terms_header">
                                            Registration Terms
                                            <i class = "fa fa-angle-down" id = "angle"></i>
                                        </div>
                                        <div id = "terms_content">
                                            <ol>
                                                <li>
                                                    <b>Payments</b><br>
                                                    Payments should be made in the form of checks payable to:
                                                    ASUC/UCBMUN
                                                    c/o LEAD Center 
                                                    102 Hearst Gym MC 4500 
                                                    Berkeley, CA 94720-4500 
                                                    [UCBMUN is sponsored by the Associated Students of the University of California, a 501c3 Non-Profit Organization supporting student initiated activities]
                                                </li>
                                                <li>
                                                    <b>Proof of Payment</b><br>
                                                    In order to ease registration and prevent lost checks we ask that you send us Proof of Payment. Proof of Payment can either be a copy or a photo of the completed check or the USPS/UPS/FedEx tracking number, sent electronically to cos-external@ucbmun.org. The Proof of Payment is due within 20 days of Early or Normal registration (and before BayMUN if you wish to attend), and within 7 days of late registration. If you fail to send Proof of Payment by that date and have not communicated with our Chief of Staff External, you will not be allowed to participate in UCBMUN XVIII. In case of special circumstances, please contact our Chief of Staff - External.
                                                </li>
                                                <li>
                                                    <b>Delegation Change Guidelines</b><br>
                                                    We understand that change happens and sometimes members back out of events for various reasons. If you wish to change your delegation you must inform the Chief of Staff - External within 4 weeks of your registration or February 14th whichever is earlier in order to receive a full refund. If you reduce the size of your delegation UCBMUN will refund your delegation on the first day of the conference. If you increase the size of your delegation you must bring a check for the additional amount owed on the first day of the conference.
                                                </li>
                                                <li>
                                                    <b>Enforcement Policy</b><br>
                                                    We will work with you to ensure that every member of your delegation is able to participate. We will not allow any delegates to participate if they have not paid within the appropriate timeframe and not contacted our Chief of Staff External. If you have any questions feel free to contact us.
                                                </li><br>
                                                <b>
                                                    By clicking 'Register', you agree to the Terms of Registration on this page
                                                </b>
                                            </ol>
                                        </div>
                                    </div>
                                   <!--  <?php
           								 require_once('recaptchalib.php');
	    								 $publickey = '6Lf-2OYSAAAAAHynuBI0atSN53Tfphfr0KJn4Hnb'; //Public Key#2
            							 echo recaptcha_get_html($publickey);
          							?> -->
						          	<div class="control-group">
						            	<div class="controls" style="text-align:center;margin-top:20px;">
						              		<button  class="btn btn-success" id="submitForm">Register</button>
						            	</div>
						            	<h6 style="text-align:center" class="muted"> By clicking 'Register', you agree to the Terms of Registration on this page </h6>
						          	</div>
                                </form>
                            </div>
                        </div>
                        <div class = "clear">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Le Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
        </script> 
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src= "js/smoothscroll.js"></script>                                
        <script src = "js/script.js"></script>
   	 	<!--  <script src="js/bootstrap.min.js"></script>-->

    	<script type="text/javascript">
	        function checkPasswordMatch() {
	            var password = $("#inputPassword").val();
	            var confirmPassword = $("#inputConfirmPassword").val();
	            if (password != confirmPassword) {
	                $("#match").addClass('iconCheck');
	                $("#nomatch").removeClass('iconCheck');
	            }              
	            else{
	                $("#match").removeClass('iconCheck');
	                $("#nomatch").addClass('iconCheck');
	            }
	        }

	        function checkPasswordLength() {
	            var password = $("#inputPassword").val();
	            var pwLen = password.length;
	            if (pwLen < 7) {
	                $("#pwlong").addClass('iconCheck');
	                $("#pwshort").removeClass('iconCheck');
	            }              
	            else{
	                $("#pwlong").removeClass('iconCheck');
	                $("#pwshort").addClass('iconCheck');
	            }
	        }
	        $(document).ready(function () {
	           $("#inputPassword").keyup(checkPasswordLength());
	           $("#inputConfirmPassword").keyup(checkPasswordMatch());
	           $("#submitForm").click(function() {
	              var empties = $('input').filter(function () {
	              return ($.trim($(this).val()) == '');
	              });
	              if (empties.length > 0) {
	                alert("Please fill out all the fields! ");
	                return false;
	              }
	              var password = $("#inputPassword").val();
	              var confirmPassword = $("#inputConfirmPassword").val();
	              if ($('#match').hasClass('iconCheck')) {
	                alert("Your passwords do not match!");
	                return false;
	              }
	              if (password != confirmPassword) {
	                alert("Your passwords do not match!");
	                return false;
	              }
	              if ($('#pwlong').hasClass('iconCheck')) {
	                alert("Your password is not long enough. It has to be at least 7 characters long!");
	                return false;
	              } 
	               $("#registrationForm").submit();
	           });
	        });
    	</script>
    </body>
</html>
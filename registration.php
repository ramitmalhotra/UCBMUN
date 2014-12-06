<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UCBMUN</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link rel="stylesheet" href="css/committee_pages.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/registration.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">        
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>		                     
    </head>
    <body>
        <div id = "wrapper">
            <?php include 'menu.php'; ?>
            <div id = "echr_page2">
                <div id = "echr_content">  
                    <div id = "info_content_container">
                    <?php
        				session_start();
        				if( isset($_SESSION['username']) ){
          				echo '  
          				<div class="alert-error">
        				<i class = "fa fa-info-circle info"></i>
                 					Hold up! You can not register twice! <br />
                 					But if you really want something else to do you can watch this!
          				</div>
        				<iframe width="100%" height="450" src="//www.youtube.com/embed/vD186euK58Y" frameborder="0" allowfullscreen></iframe> 
        				<script src = "js/script.js"></script>                		
        				<script src="http://code.jquery.com/jquery.js"></script>
          				';          				
        				}
      				?>
      			<?php if(isset($_SESSION['username'])){
				echo '</div></div></div></div>';
				include 'footer.php';
				echo '</body></html>';
				die();
				}		
			?>
                        <div id = "header">
                            Registration
                        </div>
                        <div id = "welcome">
                            Please fill out the form and read the terms of conditions to complete your school's registration for UCBMUN XIX. In case of any questions or concerns regarding registration, please contact cos-external@ucbmun.org.
                        </div>
                        <div id = "info_content2">
                        	<div id="alertDiv" style="display:none;"></div>                        
                            <div id = "info_header">
                                Contact Information
                            </div>                           	
                            <!--<div id = "info_subheader">Please fill out the form below if you wish to contact us with any questions or requests.
                            </div>-->
                            <div id = "info_text">                               
                               <form id="registrationForm">                               
          							<div id = "form_content">
          								<div id = "fields">All fields required </div>
	                                    <div id="name" class="label">Head Delegate/Faculty Advisor </div><input type="text" id="inputPrimaryContact" name="inputPrimaryContact" class="input-box login-input" placeholder="John Doe"><br>
	                                    <div id="email" class="label">Email </div> <input type="email" id="inputPrimaryEmail" name="inputPrimaryEmail" class="input-box login-input" placeholder="john@doe.com"><br>
	                                    <div id="college" class="label">Phone Number </div> <input type="tel" id="inputPrimaryPhone" name="inputPrimaryPhone" class="input-box login-input" placeholder="(XXX)-XXX-XXX"><br>
	                                    <div id="message" class="label">
	                                    Address </div> <textarea id="inputAddress" name ="inputAddress" style="margin: 2px; height: 70px;" class="login-input" title="Please enter full address including your zip."></textarea><br>
	                                    <div id = "info_header" class = "middle">
	                                        Delegation Information
	                                    </div>
	                                    <div id="name" class="label">University </div><input type="text" id="inputUniversity" name="inputUniversity" class="input-box login-input"><br>
	                                    <div id="email" class="label">Delegation Size </div> <input type="number" id="inputDelegation" name="inputDelegation" class="input-box login-input" title="Delegation size must not be negative"><br>
	                                    <div id = "info_header" class = "middle">
	                                        Login Information
	                                    </div>
	                                    <div id="name" class="label">Username </div><input type="text" id="inputUserName" name="inputUserName" class="input-box login-input"><br>
	                                    <div id="email" class="label" data-toggle="tooltip" title="Password must be at least 7 characters long">Password</div>
	                                    <div>
	                                    	<input type="password" id="inputPassword" name="inputPassword" onChange="checkPasswordLength();" class="input-box login-input" title="Passwords must be greater than 7 characters">
		                                    <div style="display:inline-block" id="pwlong" class="iconCheck">
							                	<i class="icon-ok" id="pwlong"></i>
							              	</div>
							              	<div style="display:inline-block" id="pwshort" class="iconCheck">
							                	<i class="icon-remove"id="pwshort"></i>
							              	</div>
						            	</div>
                                    	<div class="label" id="email">Confirm Password </div> 
                                    	<div>
	                                    	<input type="password" id="inputConfirmPassword" name="inputConfirmPassword" onChange="checkPasswordMatch();" class="input-box login-input" title="Passwords must match">
		                                    <div style="display:inline-block" id="match">
								                <i class="icon-ok" id="pwmatch"></i>
									        </div>
									        <div style="display:inline-block" id="nomatch">
									            <i class="icon-remove"id="pwnomatch"></i>
									        </div>
								    	</div>
                                    	<div id = "terms_container">
	                                        <div id = "terms_header" title="Click to view terms of registration">
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
	                                                    In order to ease registration and prevent lost checks we ask that you send us Proof of Payment. Proof of Payment can either be a copy or a photo of the completed check or the USPS/UPS/FedEx tracking number, sent electronically to cos-external@ucbmun.org. The Proof of Payment is due within 20 days of Early or Regular registration (and before BayMUN if you wish to attend), and definitely within 7 days of the last registration date. If you fail to send Proof of Payment by that date and have not communicated with our Chief of Staff External, you will not be allowed to participate in UCBMUN XIX. In case of special circumstances, please contact our Chief of Staff - External.
	                                                </li>
	                                                <li>
	                                                    <b>Delegation Change Guidelines</b><br>
	                                                    We understand that change happens and sometimes members back out of events for various reasons. If you wish to change your delegation you must inform the Chief of Staff - External within 4 weeks of your registration or February 14th whichever is earlier in order to receive a full refund. If you reduce the size of your delegation UCBMUN will refund your delegation on the first day of the conference. If you increase the size of your delegation you must bring a check for the additional amount owed on the first day of the conference.
	                                                </li>
	                                                <li>
	                                                    <b>Enforcement Policy</b><br>
	                                                    We will work with you to ensure that every member of your delegation is able to participate. We will not allow any delegates to participate if they have not paid within the appropriate timeframe and not contacted our Chief of Staff External. If you have any questions feel free to contact us.
	                                                </li><br>	                                                
	                                            </ol>
	                                            <b>
	                                                    By clicking 'Register', you agree to the Terms of Registration on this page
	                                                </b>
	                                        </div>
	                                    </div>
	                                    <?php
	           								 require_once('recaptchalib.php');
		    								 $publickey = '6Lf-2OYSAAAAAHynuBI0atSN53Tfphfr0KJn4Hnb'; //Public Key#2
	            							 echo recaptcha_get_html($publickey);
	          							?>
	          						</div>
	          						<div id='loadingmessage' style='display:none'>
  										<img src='assets/spinner.gif'/>
									</div>
                                    <input type="submit" value="Register" id="submit-btn" title="By clicking this, you agree to the Terms of Registration of UCBMUN XIX.">
                                </form>
                            </div>
                        </div>
                        <div class = "clear">
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <script src = "js/script.js"></script>        
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
        <script type="text/javascript" src= "js/jquery-blockui.js"></script>
        <script type="text/javascript" src= "js/jquery-ui.min.js"></script>
        <script type="text/javascript">
	        function checkPasswordMatch() {
	            var password = $("#inputPassword").val();
	            var confirmPassword = $("#inputConfirmPassword").val();
	            if (password != confirmPassword || confirmPassword == '') {
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
	        	var tooltips = $( "[title]" ).tooltip({
	  		      position: {
	  		        my: "left top",
	  		        at: "right+5 top-5"
	  		      }
	  		    });			               	
	           $("#inputPassword").keyup(checkPasswordLength());
	           $("#inputConfirmPassword").keyup(checkPasswordMatch());
	           $("#registrationForm").submit(function(e) {		          
	              var empties = $('input').filter(function () {
	              return ($.trim($(this).val()) == '');
	              });
	              if (empties.length > 0) {
	                alert("Please fill out all the fields! ");
	                return false;
	              }
	              var size = $("#inputDelegation").val();
	              if(size <= 0){
		              alert("Delegation size must be greater than 0");
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
	              $.blockUI({ message: '<h1><img src="assets/spinner.gif" /> Just a moment...</h1>' });
	              $.ajax({
                      type: 'POST',
                      url: 'registrationLoginCheck.php',
                      data: $(this).serialize(),
                      dataType: 'json',
                      success: function (data) {
                              console.log(data);
                              if(data['s'] === 's'){
                                $("#alertDiv").removeClass("alert-error").addClass("alert-success").html("<i class = \"fa fa-info-circle info\"></i> Thank you for registering for UCBMUN XIX. We look forward to seeing you in February.").show();                          	  	                                                                                                  
                              	//$("#info_content2").html("<div class=\"alert-success\"><i class = \"fa fa-info-circle info\"></i> Thank you for registering for UCBMUN XIX. We look forward to seeing you in February.</div>");
                              	}
                              else if(data['e']){
                            	  $("#alertDiv").removeClass("alert-success").addClass("alert-error").html("<i class = \"fa fa-exclamation-triangle info\"></i> "+data['e']).show();
                            	 // $("#info_content2").prepend("<div class=\"alert-error\" style=\"text-align:center\"><i class = \"fa fa-info-circle info\"></i>"+" "+data['e']+"</div>");
                            	  $("#recaptcha_reload").click();
                              }
                              $.unblockUI();
                              $("html, body").animate({ scrollTop: 0 }, "slow");
                              setTimeout(function(){
									$("#alertDiv").fadeOut("slow");
									if(data['s'])
									window.location.href="index.php"
                              },5000);                                                                                           
                      }
              		});
	              e.preventDefault();
	           });
	        });
    	</script>
    	<?php include 'footer.php';?>
    </body>
</html>
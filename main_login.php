<?php
	session_start(); 
?>
<html>
	<head>
		<meta charset="utf-8">
        <title>UCBMUN</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="css/committee_pages.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
        <script src = "js/script.js"></script>        
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
	</head>
<body>
	<div id = "wrapper">
        <?php include 'menu.php'; ?>
        <div id = "echr_page2">
            <div id = "echr_content">  							             	
				<div id = "info_header">Log In</div> 
		<div id = "info_content_container">
		<?php
					        if(isset($_SESSION['username'])){
					          echo   
					          '<script type="text/javascript">
        							$("#info_content_container").css("width","55%");
        							$("#info_header").text("");
        						</script>';
        						echo '<div class = "alert-error"> 
			            			<i class = "fa fa-exclamation-triangle info"></i>
			                		You are already logged in!<br/>
        							Nothing to see here - Watch this instead.
        							</div>
        							<iframe width="100%" height="450" src="//www.youtube.com/embed/2mVnXU_KN68" frameborder="0" allowfullscreen></iframe>			                
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
			<div id="alertDiv" style="display:none;">
			</div>	      				
			<div id = "info_content">
				<div style="text-align:center;">
						<form id="loginForm">
						  <div class="control-group">
						    <!--<label class="control-label" for="inputName">Username</label>-->
						    <div class="controls">
						      	<input type="text" id="inputName" name="myusername" placeholder="Username" class = "login-input">
						    </div>
						  </div>
						  <div class="control-group">
						    <!--<label class="control-label" for="inputPassword">Password</label>-->
						    <div class="controls" id = "pass">
							    <input type="password" id="inputPassword" name="mypassword" placeholder="Password" class = "login-input">
						    </div>
						  </div>
						  <div class="control-group">
						    <div>
						      <input type="submit" class="btn" id="submitForm" value="Sign in"/>
						    </div>
						  </div>
						</form>

				</div>
			</div>
		</div>	
			</div>
		</div> 
	</div>
				<!-- JAVASCRIPT -->
				<script src="http://code.jquery.com/jquery.js"></script>
			    <script src="js/bootstrap.min.js"></script>
				<script type="text/javascript" src= "js/jquery-blockui.js"></script>
        <script type="text/javascript" src= "js/jquery-ui.min.js"></script>
        <script type="text/javascript">
        	$(document).ready(function () {
        		var tooltips = $( "[title]" ).tooltip({
  	  		      position: {
  	  		        my: "left top",
  	  		        at: "right+5 top-5"
  	  		      }
  	  		    });
        		$("#loginForm").submit(function(e) {
			    	var username = $("#inputName").val();
			    	var password = $("#inputPassword").val();
				    if(!username.match(/\S/)) {
				        alert ('Your username can not be empty!');
				        return false;
				    } else if (!password.match(/\S/)) {
				        alert ('Your password can not be empty!');
				        return false;
				    }        	                	                	               
  	            $.blockUI({ message: '<h1><img src="assets/spinner.gif" /> Just a moment...</h1>' });
        		$.ajax({
                    type: 'POST',
                    url: 'checklogin.php',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (data) {
                            console.log(data);
                            if(data['s']){
                              window.location.href = "delegationHome.php";                          	  	                                                                                                  
                            	//$("#info_content2").html("<div class=\"alert-success\"><i class = \"fa fa-info-circle info\"></i> Thank you for registering for UCBMUN XIX. We look forward to seeing you in February.</div>");
                            	}
                            else if(data['e']){                                
                          	  $("#alertDiv").removeClass("alert-success").addClass("alert-error").html("<i class = \"fa fa-exclamation-triangle info\"></i> "+data['e']).show();                          	 
                            }
                            $.unblockUI();
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            setTimeout(function(){
									$("#alertDiv").fadeOut("slow");									
                            },10000);                                                                                           
                    }
            		});
	              e.preventDefault();
        		});
        	});	
        </script>
	<?php include 'footer.php';?>			
</body>
</html>
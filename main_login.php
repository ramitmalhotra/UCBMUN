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
				<?php
					        if(isset($_SESSION['username'])){
					          echo   
					          '<p id = "loggedin"> 
			            			<i class = "fa fa-info-circle info"></i>
			                		You are already logged in.<br/>
        							Nothing to see here <br />
					                Watch this instead. <br />
        							<iframe width="560" height="315" src="//www.youtube.com/embed/2mVnXU_KN68" frameborder="0" allowfullscreen></iframe>			                
			             		</p>';					                  					         
					          die();
					        }
					      ?>
				<?php
          			 if (isset($_GET['e'])) {
           				$errorString = " Incorrect Username or Password";
                		echo '<div id="loggedin"><i class = "fa fa-info-circle info"></i>'.$errorString.'</div>';
            			}   
	         	?>
			             	
			       	<div id = "info_header">Log In</div> 
		<div id = "info_content_container">
			<div id = "info_content">
				<div>
					<center>
						<form method ="post" action="checklogin.php" id="loginForm">
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
						      <button type="submit" class="btn" id="submitForm">Sign in</button>
						    </div>
						  </div>
						</form>
					</center>
				</div>
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
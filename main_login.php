<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Log In | UCBMUN XVIII</title>
   	<?php include("head.php"); ?>
</head>
<body>
	<?php include("menu.php"); ?>
    <div class="mainDiv">
      <?php
        if(session_is_registered(username)){
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
      <center>
        <h1 style="color:#ffffff"> Log In </h1>      
      </center>
    </div>  	
	<div class="span4 offset4" style="margin-top:100px">
		<center>
			<?php
	           if (isset($_GET['e'])) {
	           		$errorString = "Incorrect Username or Password";
	                echo "<div class=\"alert alert-error\" style=\"margin-left:10px\">".$errorString."</div>";
	            }   
         	?>  
			<form class="form-horizontal" method ="post" action="checklogin.php" id="loginForm"style="margin-left:-110px">
			  <div class="control-group">
			    <!--<label class="control-label" for="inputName">Username</label>-->
			    <div class="controls">
			      <input type="text" id="inputName" name="myusername" placeholder="Username">
			    </div>
			  </div>
			  <div class="control-group">
			    <!--<label class="control-label" for="inputPassword">Password</label>-->
			    <div class="controls">
			      <input type="password" id="inputPassword" name="mypassword" placeholder="Password">
			    </div>
			  </div>
			  <div class="control-group">
			    <div class="controls">
			      <button type="submit" class="btn" id="submitForm">Sign in</button>
			    </div>
			  </div>
			</form>
		</center>
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
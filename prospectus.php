<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Delegate Prospectus | UCBMUN XVIII</title>
    <?php include("head.php"); ?>

  </head>

  <body>
    <?php include('menu.php'); ?>
    <div class="mainDiv">
        <center>
            <h1 style="color:#ffffff"> Delegate Prospectus </h1>
        </center>
    </div>    
    <div class="well span9 offset1 primaryWell"  style="margin-left:200px">
        <center>
        <object data="prospectus.pdf" type="application/pdf" width="810" height="1090">
          <p> Prospectus<a href="prospectus.pdf"></a></p>
        </object>
    </center>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
  </body>
</html>

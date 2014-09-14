<?php
session_start();
if(!session_is_registered(username)){
  header("location:main_login.php");
}
$host="localhost"; // Host name 
$user="ucbmunor_login"; // Mysql username 
$password="mahith"; // Mysql password 
$db_name="ucbmunor_login"; // Database name 
$tbl_name="registration"; // Table name  change to registration

// Connect to server and select databse.
mysql_connect("$host", "$user", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$username = $_SESSION[username];
$sql = sprintf("SELECT `size`, `amountPaid`, `proofofpayment`, `registrationDate`,`university` FROM $tbl_name WHERE username='%s'",mysql_real_escape_string($username));
$result = mysql_query($sql);
if (!$result) {
  die("Query failed");
}
$row = mysql_fetch_array($result, MYSQL_ASSOC);
$size = $row['size'];
$amountPaid = $row['amountPaid'];
$date = $row['registrationDate'];
$university = $row['university'];
$proof = $row['proofofpayment'];
$category = getCategory($date);

function getCategory ($date) {
  $mdy = explode("-", $date);
  $month = $mdy[0];
  $day = $mdy[1];
  $year = $mdy[2];
  if ($year == '2015' && $month != 1 && $day != '1') return 2;
  if ($year == '2015') return 1;
  if ($month == '12') return 1;  
  if (in_array($month, array('8','9','10'))) {
    return 0;
  }
  if ($day > 15) {
    return 1;
  }
  return 0;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Delegation Information| UCBMUN XVIII</title>
    <?php include("head.php"); ?>

  </head>

  <body>
    <?php include("menu.php"); ?> 
    <div class="mainDiv">
      <center>
        <h1 style="color:#ffffff"> Delegation Home </h1>
        <?php echo"<h3 style='color:#ffffff'>".$university."</h3>"?>
        
      </center>
    </div>    
    <div class="well span10 offset1" style="margin-top:20px">
      <div class="tabbable">
        <!-- Tabs -->
        <ul class="nav nav-pills">
          <li class="active"><a href="#tab1" data-toggle="tab">Financial Information</a></li>
          <li><a href="#tab2" data-toggle="tab">Delegate Development Program</a></li>
          <!---<li><a href="#tab3" data-toggle="tab">Delegation Information</a></li>-->
          <li><a href="#tab4" data-toggle="tab">Position Papers</a></li>
          <li><a href="#tab5" data-toggle="tab">Office Hours</a></li>  
        </ul>
        
        <div class="tab-content">
          <!-- Tab 1 -->
          <div class="tab-pane active" id="tab1">
            <div class="span6 offset1">
              <table class="table table-striped">
                <tbody>
                  <tr align="center">
                    <td><center> Number of Delegates Registered </center></td>
                    <?php echo"<td>".$size."</td>"; ?>
                  </tr>
                  <tr align="center">
                    <td><center> Date of Registration</center></td>
                    <?php echo"<td>".$date."</td>"; ?>
                  </tr>
                  <tr align="center">
                    <td><center> Per Delegate Fee </center></td>
                    <?php 
                      $fee = 94;
                      if ($category == '0') {
                        $fee = 74;
                      } elseif ($category == '1') {
                        $fee = 84;
                      };
                    echo "<td>$".$fee."</td>";
                    ?>
                  </tr>
                  <tr align="center">
                    <td><center> Total Delegates Fee</center></td>
                    <?php
                      $totalDelegateFee = $fee*$size;
                      echo "<td>$".$totalDelegateFee."</td>";
                    ?>
                  </tr>
                  <tr align="center">
                    <td><center> Delegation Fee </center></td>
                    <?php
                      $delegationFee = 89;
                      if ($category != '2') {
                        $delegationFee = 79;
                      }
                      echo "<td>$".$delegationFee."</td>";
                    ?>
                  </tr>
                  <tr align="center">
                    <td><center> Faculty Advisor Fee </center></td>
                    <td> &#36;0 </td>
                  </tr>
                  <tr align="center">
                    <td><center> Total Amount Due </center></td>
                    <?php 
                     $totalAmt = $totalDelegateFee + $delegationFee;
                     echo "<td>$".$totalAmt."</td>"; ?>
                  </tr>
                  <tr align="center">
                    <td><center> Total Amount Paid </center></td>
                    <?php 
                    echo "<td>$".$amountPaid."</td>"; ?>
                  </tr>
                  
                  <?php
                   $balance = $totalAmt - $amountPaid;
                   $class = "'success'";
                   if ($balance > 0) {
                      $class = "error";
                   };
                   echo "<tr align='center'class=".$class.">";
                   ?>
                    <td><center> Outstanding Balance </center></td>
                    <?php 
                    if ($balance < 0) {
                      echo "<td>-$".abs($balance)."</td>"; 
                    } else {
                      echo "<td>$".$balance."</td>"; 
                    }
                      ?>
                  </tr>
                  <?php
                   $balance = $totalAmt - $amountPaid;
                   $class = "'success'";
                   if ($proof == 0) {
                      $class = "error";
                   };
                   echo "<tr align='center'class=".$class.">";
                   ?>
                    <td><center> Proof Of Payment </center></td>
                    <?php 
                    if ($proof == 0) {
                      echo "<td> Pending </td>"; 
                    } else {
                      echo "<td> Received </td>"; 
                    }
                    ?>
                    </tr>                                                                                                                                                              
                </tbody>
              </table>
            </div>
            <!--
            <div class="row">
              <div class="span8">
                <p> <center>You have an outstanding balance of X dollars...</center></p>
              </div>
          </div>
        -->
          </div>

          <!-- Tab 2 -->
          <div class="tab-pane" id="tab2">
            <?php
              /* Proof of Payment has not been received */ 
                echo '<center>';
                echo '<iframe src="//player.vimeo.com/video/77835825" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
                echo '<iframe src="//player.vimeo.com/video/77758827" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
                echo '<iframe src="//player.vimeo.com/video/87298607" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
                echo '<iframe src="//player.vimeo.com/video/87297900" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
                echo '<iframe src="//player.vimeo.com/video/87298606" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
                echo '<iframe src="//player.vimeo.com/video/84903604" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';               
                echo '<iframe src="//player.vimeo.com/video/84904224" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';               
                echo '</center>';
              ?>
          </div>  

          <!-- Tab 3 -->
          <div class="tab-pane" id="tab3">
            <p>
               You will be able to view your delegation assignments here. 
            </p>
            <p>
                More information regarding the same will be posted in the future.
            </p>
          </div>

          <!-- Tab 4 -->
          <div class="tab-pane" id="tab4">
            <p>Position papers serve an important purpose at UCBMUN. First, it encourages delegates to thoroughly research and plan out their positions on topics that will be covered throughout the conference. Additionally, they provide a good barometer for our chairs and crisis staff to judge pre-conference preparation, a component of our awards. Therefore each delegate, or double delegate team, must submit a position paper if their committee requires one in order to receive an award. There are a number of different circumstances depending on the committees and we have therefore laid it out as clearly as possible. Your delegates should submit their position papers to the email addresses on each committee page, by Wednesday March 5th, at 7pm PST.</p>
            <p>Crisis Committees excluding Ad-Hoc and UNSC: A single page position paper for each delegate describing their understanding of their characters and their specific and committee plans for the conference.</p>
            <p>Ad-Hoc: Due to the nature of the Ad-Hoc committee, position papers will not be required.</p>
            <p>UNSC: A single page position paper for each delegation on the topic from the background guide they most want to discuss.</p>
            <p>JCC: A position paper is not required for any delegates in these committees. </p>
            <p>Specialized Bodies and General Assembly*: Each delegation, whether single delegate or double delegation, should submit a position paper that spends one page per topic, discussing the history of their country on the topic, the stance of their country, and their goals for the conference and the work product it will generate (be it a resolution, working paper, or judgment). The Nuclear Security Summit’s update paper clarifies the specific topics of debate.</p>
            <p>*General Assembly: The Eleventh Emergency Special General Assembly Session to discuss ethnic violence in Myanmar will encompass two subtopics – the ethnic violence occurring against the Kachins, and the ethnic violence occurring against the Rohingya. Though these are both part of one topic, delegates will be required to submit position papers of 2 pages (one page for each subtopic).</p>
          </div>                    
         <!-- Tab 5 -->
          <div class="tab-pane" id="tab5">
            <center>
              <iframe src="https://www.google.com/calendar/embed?src=tj53m5e962jb1j1je37fm8um0c%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </center>
          </div>                    
        </div>
      </div>
   </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
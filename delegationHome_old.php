<?php
	session_start();
	if(!isset($_SESSION['username'])){
  		header("location:main_login.php");
	}
	$host="localhost"; // Host name 
	$user="ucbmunor"; // Mysql username 
	$password="Ucbmunsec2014!"; // Mysql password 
	$db_name="ucbmunor_login"; // Database name 
	$tbl_name="registration2014"; // Table name  change to registration

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
  		if ($year == '2015') return 1;
  		if ($month == '12' && $day == '1') return 0;  
  		if (in_array($month, array('9','10','11'))) {
    		return 0;
  		}
  		return 1;
	}
?>
<html lang="en">
    <head>
        <title>UCBMUN</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="css/sponsors.css">
        <link rel="stylesheet" href="css/committee_pages.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/delegation.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">        
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script src = "js/script.js"></script>
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
    </head>
    <body>
    <div id = "wrapper">
        <?php include 'menu.php'; ?>
        <div id = "echr_page2">
            <div id = "echr_content">  
                <div id  ="info_header">
                    <?php
                    	echo $university;
                    ?>
                </div> 
                <div id = "info_content_container">
                    <div id = "info_content">   
                        <div class="well span10 offset1">
                            <div class="tabbable">
                            <!-- Tabs -->
                                <div class="tab-content">
                                    <!-- Tab 1 -->
                                    <div class="tab-pane active" id="tab1">
                                        <div class="span6 offset1">
                                            <table class="table table-striped">
                                                <tbody>
                                                        <tr >
                                                            <td class = "desc">Number of Delegates Registered</td>
                                                            <td><?php echo $size; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class = "desc">Date of Registration</td>
                                                            <!--Deleted PHP-->
                                                            <td><?php echo $date; ?></td>
                                                        </tr>
                                                        <tr >
                                                            <td class = "desc">Per Delegate Fee</td>
                                                            <?php
	                                                            $fee = 90;
                      											if ($category == '0') {
                        											$fee = 80;
                      												} 
																elseif ($category == '1') {
                        											$fee = 90;
                      											}; 
																echo'<td>$'.$fee.'</td>'; 
															?>
                                                        </tr>
                                                        <tr >
                                                            <td class = "desc">Total Delegates Fee</td>
                                                            <?php
                      											$totalDelegateFee = $fee*$size;
                      											echo "<td>$".$totalDelegateFee."</td>";
                    										?>
                                                        </tr>
                                                        <tr >
                                                            <td class = "desc">Delegation Fee</td>
                                                            <?php
                      											$delegationFee = 95;
                      											if ($category != '1') {
                        											$delegationFee = 85;
                      											}
                      											echo "<td>$".$delegationFee."</td>";
                    										?>
                                                        </tr>
                                                        <tr >
                                                            <td class = "desc">Faculty Advisor Fee</td>
                                                            <td> &#36;0 </td>
                                                        </tr>
                                                        <tr >
                                                            <td class = "desc">Total Amount Due</td>
                                                             <?php 
                     											$totalAmt = $totalDelegateFee + $delegationFee;
                     											echo "<td>$".$totalAmt."</td>"; 
                     										?>
                                                        </tr>
                                                        <tr >
                                                            <td class = "desc">Total Amount Paid</td>
                                                            <?php 
                    											echo "<td>$".$amountPaid."</td>"; 
                    										?>
                                                        </tr>
                                                        <?php
                   											$balance = $totalAmt - $amountPaid;
                   												$class = "'success'";
                   											if ($balance > 0) {
                      											$class = "error";
                   											};
															echo '<tr class=".$class.">';
														?>
                                                            <td class = "desc">Outstanding Balance</td>
                                                            <?php 
                    											if ($balance < 0) {
                      												echo "<td>-$".abs($balance)."</td>"; 
                    											} 
																else {
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
                                                        <tr class=".$class.">
                                                            <td class = "desc">Proof Of Payment</td>
                                                            <?php 
                    											if ($proof == 0) {
                      												echo "<td> Pending </td>"; 
                    											} 
																else {
                      												echo "<td> Received </td>"; 
                    											}
                    										?>
                                                        </tr>                                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab 2 -->
                <div id = "info_content_container"  class = "changewidth">
            		<div id = "info_content"> 
                		<div id = "subheader">
                			Delegate Resources
                		</div> 
                		<div class="tab-pane" id="tab2">
                			<p>Additional resources will be added to this page shortly.</p>
				               <!--<?php
				              /* Proof of Payment has not been received */ 
				                /*echo '<center>';
				                echo '<iframe src="//player.vimeo.com/video/77835825" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
				                echo '<iframe src="//player.vimeo.com/video/77758827" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
				                echo '<iframe src="//player.vimeo.com/video/87298607" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
				                echo '<iframe src="//player.vimeo.com/video/87297900" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
				                echo '<iframe src="//player.vimeo.com/video/87298606" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
				                echo '<iframe src="//player.vimeo.com/video/84903604" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';               
				                echo '<iframe src="//player.vimeo.com/video/84904224" width="430" height="281" style="margin-right:15px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';               
				                echo '</center>';*/
				              ?>-->
                		</div>
                	</div>
                </div>
                
                <!-- Tab 3 -->
                <div id = "info_content_container"  class = "changewidth">
                    <div id = "info_content"> 
                        <div id = "subheader">
                            Delegation Assignments
                        </div>
          				<div class="tab-pane" id="tab3">
		            		<p>
		               			You will be able to view your delegation assignments here. 
		            		</p>
		            		<p>
		                		More information regarding the same will be posted in the future.
		            		</p>
          				</div>
          			</div>
          		</div>  
                  <!-- Tab 4 -->
                <div id = "info_content_container"  class = "changewidth">
                    <div id = "info_content"> 
                        <div id = "subheader">
                            Position Papers
                        </div>  
                        <div class="tab-pane" id="tab4">
                           <!-- <p>Position papers serve an important purpose at UCBMUN. First, it encourages delegates to thoroughly research and plan out their positions on topics that will be covered throughout the conference. Additionally, they provide a good barometer for our chairs and crisis staff to judge pre-conference preparation, a component of our awards. Therefore each delegate, or double delegate team, must submit a position paper if their committee requires one in order to receive an award. There are a number of different circumstances depending on the committees and we have therefore laid it out as clearly as possible. Your delegates should submit their position papers to the email addresses on each committee page, by Wednesday March 5th, at 7pm PST.</p>
                            <p><b>Crisis Committees excluding Ad-Hoc and UNSC:</b> A single page position paper for each delegate describing their understanding of their characters and their specific and committee plans for the conference.</p>
                            <p><b>Ad-Hoc:</b> Due to the nature of the Ad-Hoc committee, position papers will not be required.</p>
                            <p><b>UNSC:</b> A single page position paper for each delegation on the topic from the background guide they most want to discuss.</p>
                            <p><b>JCC:</b> A position paper is not required for any delegates in these committees. </p>
                            <p><b>Specialized Bodies and General Assembly*:</b> Each delegation, whether single delegate or double delegation, should submit a position paper that spends one page per topic, discussing the history of their country on the topic, the stance of their country, and their goals for the conference and the work product it will generate (be it a resolution, working paper, or judgment). The Nuclear Security Summit’s update paper clarifies the specific topics of debate.</p>
                            <p><b>*General Assembly:</b> The Eleventh Emergency Special General Assembly Session to discuss ethnic violence in Myanmar will encompass two subtopics – the ethnic violence occurring against the Kachins, and the ethnic violence occurring against the Rohingya. Though these are both part of one topic, delegates will be required to submit position papers of 2 pages (one page for each subtopic).</p>-->
                            <p>Position paper policies will be released shortly. 
                          </div>
                        </div>
                    </div>                    
                 <!-- Tab 5 -->
                 <!-- <div class="tab-pane" id="tab5">               
                      <iframe src="https://www.google.com/calendar/embed?src=tj53m5e962jb1j1je37fm8um0c%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>                 
                  </div>-->                    
                </div>
              </div>
           </div>
           </div>
           </div>
   </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
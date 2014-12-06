<?php
	session_start();
?>
<!DOCTYPE html>
    <head>
        <title>UCBMUN</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />     
        <link rel="stylesheet" href="css/committee_pages.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/fees.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png">                 
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>        
    </head>
    <body>
        <div id = "wrapper">
            <?php include 'menu.php'; ?>
            <div id = "echr_page2">
                <div id = "echr_content">  
                    <div id = "info_content_container">
                        <div id = "header">
                            Conference Fee Structure
                        </div>
                        <div id = "info_content2">
                            <div id = "info_text">   
                                <table style="width:100%">
                                    <tr>
                                        <th></th>
                                        <th>Early</th>
                                        <th>Regular</th> 
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sept 15 - Dec 1</td>
                                        <td>Dec 2 - Feb 15</td>
                                    </tr>
                                    <tr>
                                        <td>Delegation Fee</td>
                                        <td>$85</td>
                                        <td>$95</td> 
                                        
                                    </tr>
                                    <tr>
                                        <td>Per Delegate</td>
                                        <td>$80</td> 
                                        <td>$90</td>
                                    </tr>
                                    <tr>
                                        <td>Per Faculty Advisor</td>
                                        <td>$0 (Yay)</td> 
                                        <td>$0 (Yay)</td>
                                    </tr>
                                </table>
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
	                                        </div>
	                                    </div>   
                        </div>
                        <div class = "clear">
                        </div>                                             
                    </div>
                   	<div style="margin: 0 auto; width:835px;margin-top: 3em;background: white; padding: 2em">
                   		<p id = "subheader"><a href="assets/prospectus.pdf">Prospectus</a></p>
        				<object data="assets/prospectus.pdf" type="application/pdf" width="828" height="1060">          					
        				</object>
    				</div>
                </div>
            </div>
        </div>
        <!-- Le JS for no blocking -->
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script src = "js/script.js"></script>
        <script type="text/javascript" src= "js/smoothscroll.js"></script>
        <?php include 'footer.php';?>
    </body>
</html>
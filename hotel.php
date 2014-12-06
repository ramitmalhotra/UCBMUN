<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Hotel | UCBMUN XVIII</title>
    <?php include("head.php"); ?>


</head>
<body>
	<?php include("menu.php"); ?>
  <div class="mainDiv">
    <center>
      <h1 style="color:#ffffff"> Conference Venue </h1>
    </center>
  </div>  
    <div class="mainDiv span11 offset1">
        <div class='wrapper'>  
            <img src='img/hilton.jpg' class="img-polaroid"/>  
            <div class='description'>  
                <p class='description_content'>Welcome to the Hilton in the Financial District!</p>  
            </div>  
        </div>  
    </div>
    <div class="well span9 offset1" style="margin-top:15px; margin-left:150px">
      <p>
        UCBMUN XVIII will be hosted at the Hilton San Francisco Financial District. 
        This hotel venue sits at the crossroads of three of the most well known neighborhoods 
        in San Francisco: Chinatown, Russian Hill, and the Financial District. Their central 
        location allows delegates to get a feel for the entire city. Food and nightlife abound 
        around the Hilton.
      </p>
      <p>
        UCBMUN has secured a special group rate at the Hilton for accodomations. To make reservations, please visit the <a href="http://www.hilton.com/en/hi/groups/personalized/S/SFOFDHF-UCB-20150226/index.jhtml?WT.mc_id=POG" target="_blank">online Hilton page</a> or call the 
        Hilton toll-free at 1-800-424-8292. Be sure to identify yourself as part of UC Berkeley Model 
        United Nations.
      </p>
    </div>
    <div class="well span10 offset1" style="margin-top:15px;">
        <h3><center> Directions to the Hilton </center></h3>
        <h4 class="muted"><center> Address: 750 Kearny St, San Franciso, CA, 94108 </center></h4>
    <div class="accordion" id="accordion2">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            From San Francisco International Airport
          </a>
        </div>
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                <ol>
                    <li>From SFO, board BART. The BART station at SFO is located in the International Terminal. 
                        There is a free AirTrain to ferry you from the terminals to the BART station. </li>
                    <li> Take BART from SFO to <b>Montgomery St</b> Station </li>
                    <li> Exiting from Montgomery St. station, walk North on Montgomery St for 3-4 blocks </li>
                    <li> Take a left onto California St and walk a block. </li>
                    <li> Take a right onto Kearny St and walk 4-5 blocks north. The hotel should be on your right. </li>
                </ol>
                <p class="text-warning"> Cost: $8.25 One-Way </p>
              </div>
            </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            From Oakland International Airport
          </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse">
          <div class="accordion-inner">
            <ol>
                <li> From Oakland Airport, board a AirBART shuttle that will take you from the airport to Coliseum/Oakland Aiport BART Station. </li>
                <li> Take BART from Colisuem/Oakland Airport Station to <b>Montgomery St</b> Station </li>
                <li> Exiting from Montgomery St. station, walk North on Montgomery St for 3-4 blocks </li>
                <li> Take a left onto California St and walk a block. </li>
                <li> Take a right onto Kearny St and walk 4-5 blocks north. The hotel should be on your right. </li>
            </ol> 
            <p class="text-warning"> Cost: $6.85 One-Way </p>         
         </div>
        </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
            From I-5 North
          </a>
        </div>
        <div id="collapseThree" class="accordion-body collapse">
          <div class="accordion-inner">
            <ol>
                <li> From I-5 North, continue onto I-580 West. </li>
                <li> Follow signs onto Tracy/San Francisco. Stay on I-580 West and follow signs for Oakland/San Francisco </li>
                <li> Take the I-80 West exit toward San Francisco</li>
                <li> Exit onto Fremont St. </li>
                <li> Continue onto Front St</li>
                <li> Turn Left onto Pine St. </li>
                <li> Turn right onto Kearny St. The Hotel will be on the right</li>
            </ol>            
          </div>
        </div>        
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
            By Rail
          </a>
        </div>
        <div id="collapseFour" class="accordion-body collapse">
          <div class="accordion-inner">
          <p>
            Rail is a very convenient way to reach the Bay Area and a viable option for California residents 
            looking to avoid steep gas and parking prices. San Francisco is served by BART, Amtrak and CalTrain rail 
            agencies and one needs to either transfer to the CalTrain or BART from the Amtrak, or take 
            Amtrak’s buses to reach Downtown San Francisco.
            If one takes BART, all they need to do is step down at the Montgomery St. Station and walk a few blocks to
            arrive at the hotel.
          </p>           
          </div>
        </div>        
      </div>      
      <!--
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            By Rail
          </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse">
          <div class="accordion-inner">
            Anim pariatur cliche...
          </div>
        </div>
      </div>            
    </div>
-->
    </div>
  </div>
  <div class="well span5 offset3">
    <div style="width:465px;height:350px">
      <iframe width="465" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=750%2BKearny%2BSt%2BSan%2BFrancisco%2C%2BCA(Hilton+Financial+District)&ie=UTF8&z=14&t=m&iwloc=addr&output=embed">
      </iframe><br><table width="465" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td align="left"><small>
          <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=750%2BKearny%2BSt%2BSan%2BFrancisco%2C%2BCA(Hilton+Financial+District)&ie=UTF8&z=14&t=m&iwloc=addr">View Larger Map</a>
        </small>
      </td>
    </tr>
  </table>
</div>
</div>

    <!-- JAVASCRIPT -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/secretariat.js"></script>
    <?php include 'footer.php';?>
</body>
</html>    
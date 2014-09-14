    

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="pull-left logobar">
              <a href="index.php"><img class = "icon" src="img/brightlogo.png" /></a>
            </div>
            <a class="brand" href="index.php"> &nbspUCBMUN XVIII | March 6-9, 2014</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="divider-vertical" />
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Conference <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="hotel.php">Conference Venue</a></li>
                    <li><a href="exploresf.php">Explore SF</a></li>
                    <li><a href="socials.php">Programming Events</a></li>
                    <li><a href="rules.php">Rules and Procedures</a></li>
                    <li><a href="schedule.php">Schedule</a></li>
                    <li><a href="secretariat.php">Secretariat</a></li>
                    <li><a href="letter.php">Welcome Letter</a></li>
<!--                     <li><a href="prospectus.php">Delegate Prospectus</a></li>  -->       
                    <!--<li><a href="ddp.php">Delegate Development Program </a></li> -->                                           
                  </ul>
                </li>                  
                <!--Menu Item #1-->
   <!--              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="fees.php">Fees and Timeline</a></li>
                    <?php
                      if(!session_is_registered(username)){
                        echo '<li><a href="registration1.php">Register </a></li>';
                      }else {
                        echo '<li><a href="delegationHome.php">Delegation Home</a></li>';
                      }
                    ?>                    
                  </ul>
                </li> -->
                <!--Menu Item #2-->  
                <li><a href="committees.php">Committees </a></li>                               
                <!--
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Committees <b class="caret"></b></a>
                  
                  <ul class="dropdown-menu">                  
                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="http://www.google.com">Specialized Bodies and General Assemblies</a>
                      <ul class="dropdown-menu">
                        <li><a href="committee0.php"> European Court of Human Rights </a></li>
                        <li><a href="committee1.php"> UN General Assembly - 11th Emergency Session </a></li>
                        <li><a href="committee2.php"> Nuclear Safety Summit of 2014 </a></li>
                        <li><a href="#"> Department of Peacekeeping Operations </a></li>
                      </ul>
                    </li>
                  
                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Crisis Committees</a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> UN Security Council </a></li>
                        <li><a href="#"> Pinochet's Chile </a></li>
                        <li><a href="#"> Chevron Executive Board</a></li>
                        <li><a href="#"> Sri Lanka: 2006 </a></li>
                        <li><a href="#"> Ad-Hoc </a></li>
                      </ul>
                    </li>
                    
                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Joint Crisis Committees</a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> Central Intelligence Agency </a></li>
                        <li><a href="#"> Ministry of State Security</a></li>
                        <li><a href="#"> Mossad </a></li>
                        <li><a href="#"> VEVAK </a></li>
                      </ul>
                    </li>  
                  </ul>
                </li>
                -->                
                <!--Menu Item #3-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sponsors <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="howtosponsor.php">How to Sponsor</a></li>
                    <li><a href="sponsorlist.php">Our Sponsors</a></li>
                  </ul>
                </li> 
               
                <!--Menu Item #4-->
                <!--
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logistics <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="exploresf.php">Explore SF</a></li>
                    <li><a href="schedule.php">Schedule</a></li>
                  </ul>
                </li>
              -->
                <!--Menu Item #5-->                
                <li><a href="contact.php">Contact Us</a></li>            
	
              </ul>

              <div class="pull-right iconbar">
                <?php
                  if(!session_is_registered(username)){
                    echo '<a href="main_login.php" class="menuItem">Log In </a>';
                  }else {
                    echo '<a href="logout.php" class="menuItem">Sign Out </a>';
                  }
                  ?>
                <a href="https://twitter.com/ucbmun"><img class = "icon" src="img/twitter.png" /></a>
                <a href="https://www.facebook.com/UCBMUN"><img class = "icon" src="img/facebook.png" /></a>
              </div>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


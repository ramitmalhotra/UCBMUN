<div id = "sponsors_nav">
                    <div id = "landing_nav_content">
                        <a target = "_blank" onclick= "javascript:document.location.href='index.php'">
                            <div id = "landing_nav_logo">
                                <img src = "assets/ucbmunlogo.png" class = "img_scaled" id = "logo">
                            </div>
                        </a>
                        <div id = "landing_nav_item_container">
                            <a target = "_blank" onclick= "javascript:document.location.href='index.php'">
                                <div class = "landing_nav_item">
                                    Home
                                </div>
                            </a>
                            <div class = "landing_nav_item" id = "conference_nav">
                                <div id = "conference_drop_container">
                                    <a target = "_blank" onclick= "javascript:document.location.href='venue.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Venue
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='fees.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Fee Information
                                            </div>
                                        </div>
                                    </a>
                                    <!--
                                    <a target = "_blank" onclick= "javascript:document.location.href='events.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Events
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='schedule.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Schedule
                                            </div>
                                        </div>
                                    </a>
                                    -->
                                    <a target = "_blank" onclick= "javascript:document.location.href='secretariat.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Secretariat
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='exploresf.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Explore SF!
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href='letter.php'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Welcome Letter
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                Conference <i class = "fa fa-caret-down caret"></i>
                            </div>
                            <a target = "_blank" onclick= "javascript:document.location.href='committees.php'">
                                <div class = "landing_nav_item">
                                    Committees
                                </div>
                            </a>
                            <!--
                            <a target = "_blank" onclick= "javascript:document.location.href='sponsors.php'"><div class = "landing_nav_item">
                                Sponsors
                            </div></a>
                            -->
                            <a target = "_blank" onclick= "javascript:document.location.href='contact.php'">
                                <div class = "landing_nav_item">
                                    Contact
                                </div>
                            </a>
                            <?php 
                            	if(isset($_SESSION['username'])){
								echo '<div class = "landing_nav_item" id = "user_nav">
                                <div id = "user_drop_container">
                                    <a target = "_blank" onclick= "javascript:document.location.href=\'delegationHome.php\'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                My Home
                                            </div>
                                        </div>
                                    </a>
                                    <a target = "_blank" onclick= "javascript:document.location.href=\'logout.php\'">
                                        <div class = "drop_item_container">
                                            <div class = "drop_item">
                                                Logout
                                            </div>
                                        </div>
                                    </a>                                    
                                </div>'.$_SESSION['user'].'
                                 <i class = "fa fa-caret-down caret"></i>
                            </div>';
							}			
                            ?>
                        </div>
                        <div class = "clear">
                        </div>
                    </div>
                </div>
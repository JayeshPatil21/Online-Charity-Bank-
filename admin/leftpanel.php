<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span> 
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="../plugins/images/user.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> Account<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="settings.php"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="functions/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                            <?php
                                  if ($AT=="Admin")
                                  {
                            ?>
                    <!-- Dashboard Menu-->
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.php" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </a>
                    </li>
                    <!-- Donate Menu -->
                    <li> <a href="Donate.php" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe00b"></i> <span class="hide-menu"> Donate </a>
                    </li>
                    <!-- user donation history maneu -->
                    <li> <a href="UserDonationList.php" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe00d"></i> <span class="hide-menu"> User Donation History </a>
                    </li>
                    <!-- Donation Setting Menu -->
               

                    <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Donation Setting<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="AllPost.php">All Posts</a></li>
                            <li><a href="new-post.php">Create Post</a></li>
                            <li><a href="DonationDEL.php" class="waves-effect">Update And Delete</a>
                            </li>
                        </ul>
                    </li>
                   <!-- User Setting -->
                   <li><a href="users.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">User Setting</span></a>
                    </li>
                    <?php }?>
                    <?php if($AT!="Admin"){?>
                        <!-- Donate Menu -->
                        <li> <a href="Donate.php" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe00b"></i> <span class="hide-menu"> Donate </a>
                        </li>
                        <!-- user donation history maneu -->
                        <li> <a href="UserDonationList.php" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe00d"></i> <span class="hide-menu"> User Donation History </a>
                        </li>
                                          
    
                    
                        <?php }?>
                       
                        <li><a href="certificat.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Certificate</span></a></li>


                    <li><a href="functions/logout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                   
                </ul>
            </div>
        </div>
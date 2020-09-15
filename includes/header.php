<?php error_reporting(0);?>

                <header class="navbar navbar-default navbar-static-top">
                    <!--start NAVBAR HEADER-->
                    <div class="navbar-header">
                        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg btn btn-navbar sidebar-toogle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a href="#" class="navbar-brand">
                            <h2 style="padding-top:20%; color:#37627b">Life Care</h2>
                        </a>
                        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a href=".navbar-collapse" class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="ti-view-grid"></i>
                        </a>
                    </div>
                    <!--end NAVBAR HEADER-->
                    <!--NAVBAR COLLAPSE-->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-right">
                            <li style="padding-top:2%">
                                <h2>Life Care Management</h2>
                            </li>
                            <!--  USER OPTIONS DROPDOWN -->
                            <li class="dropdown current-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/images/avatar-1.jpg" alt="John Doe">
                                    <span class="username">Admin
                                        <i class="ti-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-dark">
                                    <li>
                                        <a href="change-password.php">
                                            Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout.php">
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!--MENU TOGGLER FOR MOBILE DEVICES -->
                        <div class="close-handle visible-xs-block menu-toggler" data-toogle="collapse" href=".navbar-collapse">
                            <div class="arrow-left"></div>
                            <div class="arrow-right"></div>
                        </div>
                        
                    </div>

                </header>
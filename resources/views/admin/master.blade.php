
<!DOCTYPE html>
{{ asset('')}}<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Welcome to Fit2Go Admin Dashboard</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />
    <!-- Date picker -->
    <link href="vendors/air-datepicker-master/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="vendors/jquery-circliful/css/jquery.circliful.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="vendors/jquery-plugin-circliful-master/css/jquery.circliful.css"> -->
    <link type="text/css" href="vendors/progressbar/css/bootstrap-progressbar.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet">
    <link type="text/css" href="vendors/select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link type="text/css" href="css/custom_css/calendar_custom.css" rel="stylesheet">
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="vendors/nvd3chart/nv.d3.min.css">
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/admin_dashboard.css" rel="stylesheet">
    <!-- end of page level css -->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top">
            <a class='logo' href='/fitness/'>
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="img/logo.png" alt="image not found">
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw fa-envelope-o black"></i>
                            <span class="label label-success">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages table-striped">
                            <li class="dropdown-title">New Messages</li>
                            <li>
                                <a href="" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar7.jpg">
                                    <div class="message-body"><strong>Ernest Kerry</strong>
                                        <br> Can we Meet?
                                        <br>
                                        <small>Just Now</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar.jpg">
                                    <div class="message-body"><strong>John</strong>
                                        <br> Dont forgot to call...
                                        <br>
                                        <small>5 minutes ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar5.jpg">
                                    <div class="message-body">
                                        <strong>Wilton Zeph</strong>
                                        <br> If there is anything else &hellip;
                                        <br>
                                        <small>14/10/2014 1:31 pm</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar1.jpg">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br> Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar.jpg">
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br> Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All messages</li>
                        </ul>
                    </li>
                    <!--tasks-->
                    <li class="dropdown tasks-menu hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-edit black"></i>
                            <span class="label label-primary">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You Have 4 Tasks</li>
                            <li>
                                <a href="" class="message striped-col">
                                Design some buttons
                                <small class="pull-right">20%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-primary" style="width: 20%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </li>
                            <li>
                                <a href="" class="message">
                                Create a nice theme
                                <small class="pull-right">40%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-success" style="width: 40%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </li>
                            <li>
                                <a href="" class="message striped-col">
                                Some task I need to do
                                <small class="pull-right">60%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </li>
                            <li>
                                <a href="" class="message">
                                Make beautiful transitions
                                <small class="pull-right">80%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-warning" style="width: 80%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </li>
                            <li class="dropdown-footer">View All Tasks</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle toggle-right">
                            <i class="fa fa-fw fa-comments-o black1"></i>
                            <span class="label label-danger">0</span>
                        </a>
                    </li>
                    <!-- Notifications: style can be found in dropdown-->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-bell-o black1"></i>
                            <span class="label label-warning">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You have 9 notifications</li>
                            <li>
                                <a href="" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-users info"></i>
                                    <div class="message-body">
                                        <strong>John Doe</strong>
                                        <br> 5 members joined today
                                        <br>
                                        <span class="noti-date">Just now</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message icon-not">
                                    <i class="fa fa-fw fa-users warning"></i>
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br> likes a photo of you
                                        <br>
                                        <span class="noti-date">5 min</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-user danger"></i>
                                    <div class="message-body">
                                        <strong>John</strong>
                                        <br> Dont forgot to call...
                                        <br>
                                        <span class="noti-date">11 min</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message icon-not">
                                    <i class="fa fa-fw fa-info-circle dange"></i>
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br> Very long description here...
                                        <br>
                                        <span class="noti-date">1 Hour</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-thumbs-o-up success"></i>
                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong>
                                        <br> 2 members joined today
                                        <br>
                                        <span class="noti-date">3 Days</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All Notifications</li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                            <img src="img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                            <div class="riot">
                                <div>
                                    Natali
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                                <p>Nataliapery</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="pad-3">
                                <a href="#">
                                    <i class="fa fa-fw fa-user"></i> My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-gear"></i> Account Settings
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#">
                                        <i class="fa fa-fw fa-lock"></i> Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href='/fitness/login'>
                                        <i class="fa fa-fw fa-sign-out"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading">Nataliapery</h4>
                                <span class="text-default">Admin</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li class="active" id="active">
                            <a href='/fitness/'>
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href='/fitness/admin_clubinfo'>
                                <i class="text-success menu-icon fa fa-fw fa-info-circle"></i>
                                <span class="mm-text">Club Info</span>
                            </a>
                        </li>
                        <li>
                            <a href='/fitness/packages'>
                                <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                <span class="mm-text">Packages</span>
                            </a>
                        </li>
                        <li>
                            <a href='/fitness/personal_training'>
                                <i class="text-success menu-icon fa fa-life-ring fa-info-circle"></i>
                                <span class="mm-text">Personal Training</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                                <span class="mm-text">News</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/fitness/news'>
                                        <i class="text-primary menu-icon fa fa-inbox"></i> News
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/admin_addnews'>
                                        <i class="menu-icon text-success fa fa-pencil"></i> Add News
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-danger menu-icon fa fa-fw fa-calendar"></i>
                                <span class="mm-text">Events</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/fitness/events_list'>
                                        <i class="text-primary menu-icon fa fa-fw fa-list"></i> Events List
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/event_item'>
                                        <i class="text-info menu-icon fa fa-fw fa-fast-forward"></i> Event Item
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-warning menu-icon fa fa-fw fa-graduation-cap"></i>
                                <span class="mm-text">Course Schedule</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/fitness/admin_courseschedule'>
                                        <i class="text-primary fa fa-fw fa-th"></i> Course Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/courses'>
                                        <i class="text-success fa fa-fw fa-indent"></i> Courses
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/admin_rooms'>
                                        <i class="text-info fa fa-fw fa-star"></i> Rooms
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/admin_trainers'>
                                        <i class="text-danger fa fa-fw fa-paw"></i> Trainers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Users</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/fitness/admin_userlist'>
                                        <i class="text-primary fa fa-fw fa-users"></i> Users List
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/admin_userprofile'>
                                        <i class="text-success fa fa-fw fa-user"></i> User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/add_users'>
                                        <i class="text-info fa fa-fw fa-user"></i> Add Users
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/admin_userpayment'>
                                        <i class="text-danger fa fa-fw fa-money"></i> Payments
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='/fitness/admin_coupon'>
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Coupons</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                <span class="mm-text">Gallery</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/fitness/add_gallery'>
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/gallery'>
                                        <i class="text-success fa fa-fw fa-file-image-o"></i> Gallery
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='/fitness/admin_timings'>
                                <i class="text-info menu-icon fa fa-fw fa-clock-o"></i>
                                <span class="mm-text ">Class Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href='/fitness/admin_login'>
                                <i class="text-danger menu-icon fa fa-sign-in"></i>
                                <span class="mm-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href='/fitness/404'>
                                <i class="text-warning menu-icon fa fa-anchor"></i>
                                <span class="mm-text">404</span>
                            </a>
                        </li>
                        <li>
                            <a href='/fitness/blank'>
                                <i class="text-default menu-icon fa fa-file-o"></i>
                                <span class="mm-text">Blank</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-primary menu-icon fa fa-sitemap"></i>
                                <span class="mm-text">Menu Levels</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-danger fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-question-circle"></i>
                                <span class="mm-text">FAQ</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/fitness/faq'>
                                        <i class="text-primary fa fa-fw fa-question-circle"></i> FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href='/fitness/add_faq'>
                                        <i class="text-success fa fa-fw fa-question"></i> Add Faq
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <!--section ends-->
            <div class="container-fluid">
                <div class="row bg-color">
                    <div class="col-lg-4">
                        <div class="box-model">
                            <h4>Quick Stats</h4>
                            <div class="row">
                                <div class="col-lg-6 col-xs-6 text-center">
                                    <p class="income">Monthly Income</p>
                                    <div id="myStat2" data-dimension="210" data-width="20" data-text="70%" data-fontsize="20" data-percent="70" data-fgcolor="#33a4d8" data-bgcolor="#f7f7f7"></div>
                                </div>
                                <div class="col-lg-6 col-xs-6 text-center">
                                    <p class="income">Yearly Income</p>
                                    <div id="myStat3" data-dimension="210" data-width="20" data-text="85%" data-fontsize="20" data-percent="85" data-fgcolor="#65a800" data-bgcolor="#f7f7f7"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-xs-12">
                                    <div class="amount">
                                        <p>Pending Amount <span class="pull-right">%</span><span id="pending_amount" class="pull-right">30</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-primary"></div>
                                        </div>
                                        <p>Pending Users <span class="pull-right">%</span><span id="fifty" class="pull-right">50</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-model">
                            <h4>Recent Users</h4>
                            <div class="newstick">
                                <div class="recent">
                                    <div class="row">
                                        <img src="img/admin/user1.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='/fitness/admin_userprofile'>Adam B. Engles </a>
                                    </h5>
                                        <small>Yoga<span class="pull-right">
                               25 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row bg-default">
                                        <img src="img/admin/user2.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='/fitness/admin_userprofile'>Barbara A. Egan </a>
                                    </h5>
                                        <small>Aerobics<span class="pull-right">
                                23 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row">
                                        <img src="img/admin/user3.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='/fitness/admin_userprofile'>Caroline G. Turner </a>
                                    </h5>
                                        <small>Power Yoga<span class="pull-right">
                                 19 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row bg-default">
                                        <img src="img/admin/user4.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='/fitness/admin_userprofile'>Kevin S. McCabe </a>
                                    </h5>
                                        <small>Fitness<span class="pull-right">
                                15 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row">
                                        <img src="img/admin/user5.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='/fitness/admin_userprofile'>Richard S. Jensen </a>
                                    </h5>
                                        <small>Fitness<span class="pull-right">
                                15 / 08 / 2016</span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-model">
                            <h4>Users</h4>
                            <div class="row">
                                <div class=" col-lg-12 col-xs-12">
                                    <div class="registered bg-primary">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>REGISTERED USERS</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                                <h3 id="userscount"></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="registered bg-success">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>THIS MONTH</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                                <h3 id="myTargetElement4.2"></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="registered bg-warning">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>LAST MONTH</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                                <h3 id="myTargetElement4.1"></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-model">
                            <div class="row">
                                <div class=" col-lg-12 col-xs-12">
                                    <div class="example">
                                        <div class="example--label"></div>
                                        <div class="example-content">
                                            <div class="list-inline">
                                                <div>
                                                    <div id="custom-cells"></div>
                                                </div>
                                                <div class="calender-content-style" id="custom-cells-events"><strong class="text-primary"></strong>
                                                    <p class="light-color"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-model">
                                    <h4>Growth Analytics</h4>
                                    <div id='chart'>
                                        <svg></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box-model">
                                    <h4>User Growth</h4>
                                    <div id="chart2">
                                        <svg></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box-model">
                                    <h4>Trainers</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered trainer">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th>Sl.No</th>
                                                    <th>Course</th>
                                                    <th>Personal Trainers</th>
                                                    <th>General Trainers</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Yoga</td>
                                                    <td>09</td>
                                                    <td>08</td>
                                                    <td>17</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Aerobics</td>
                                                    <td>12</td>
                                                    <td>10</td>
                                                    <td>22</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Fitness</td>
                                                    <td>14</td>
                                                    <td>12</td>
                                                    <td>26</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Body Building</td>
                                                    <td>11</td>
                                                    <td>09</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Zumba</td>
                                                    <td>15</td>
                                                    <td>12</td>
                                                    <td>27</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Flexibility</td>
                                                    <td>07</td>
                                                    <td>05</td>
                                                    <td>12</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-model event">
                                    <h4 class="">Events</h4>
                                    <div class="events_hover">
                                        <a href='/fitness/event_item'>
                                            <div class="row">
                                                <img src="img/admin/event1.png" class="recent-user-img" alt="image not found">
                                                <h5>One Week Yoga Special Training </h5>
                                                <small>03 / 09 / 2016 - 09 / 09 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                                <span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='/fitness/event_item'>
                                            <div class="row">
                                                <img src="img/admin/event2.png" class="recent-user-img" alt="image not found">
                                                <h5> Personal Training happy week</h5>
                                                <small>03 / 09 / 2016 - 09 / 09 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                                <span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='/fitness/event_item'>
                                            <div class="row">
                                                <img src="img/admin/event3.png" class="recent-user-img" alt="image not found">
                                                <h5> 5k Marthon </h5>
                                                <small>25 / 08 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                                <span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='/fitness/event_item'>
                                            <div class="row">
                                                <img src="img/admin/event4.png" class="recent-user-img" alt="image not found">
                                                <h5>Soul Searching</h5>
                                                <small>18 / 08 / 2016 - 20 / 08 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span><span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='/fitness/event_item'>
                                            <div class="row">
                                                <img src="img/admin/event5.png" class="recent-user-img" alt="image not found">
                                                <h5>XT Series Championship</h5>
                                                <small>15 / 07 / 2016- 17 / 07 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span><span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success add_event" data-toggle="modal" data-target="#myModal">Add Event</button>
                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">
                                <i class="fa fa-plus"></i> Create Event</h4>
                                        </div>
                                        <form role="form" name="eventform" id="eventform">
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <label for="new-event" class="mar-top">Event Name</label>
                                                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                                                </div>
                                                <label for="event_url" class="mar-top">Event URL</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pull-right" id="event_url" placeholder="Enter The URL related to event" />
                                                </div>
                                                <label for="event_img" class="mar-top">Event Image URL</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pull-right" id="event_img" placeholder="Enter The URL related to event image" />
                                                </div>
                                                <div class="input-group">
                                                    <label for="eventstartdate" class="mar-top">Date Range</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="eventstartdate" placeholder="Start Date">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="eventenddate" placeholder="End Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-3 col-md-offset-3">
                                                        <button type="button" class="btn btn-success btn-block pull-left" id="add-new-event">
                                                            <i class="fa fa-plus"></i> Add
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="reset" class="btn btn-danger btn-block pull-right" id="close_calendar_event">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading text-center">
                                        <h2 class="panel-title social"><i class="fa fa-facebook"></i> Facebook</h2>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h1 id="fb"></h1>
                                        <p>LIKES</p>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading text-center">
                                        <h2 class="panel-title social"><i class="fa fa-twitter"></i> Twitter</h2>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h1 id="tw"></h1>
                                        <p>FOLLOWERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#right -->
            <!-- /.content -->
        </aside>
    </div>
    <!-- global js -->
    <script src="{{ asset('admin/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/custom_js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/custom_js/metisMenu.js') }}" type="text/javascript"></script>    
    <script src="{{ asset('admin/js/custom_js/backstretch.js') }}"></script>
    <!-- end of global level js -->
    <script src="{{ asset('admin/vendors/jquery-circliful/js/jquery.circliful.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/progressbar/bootstrap-progressbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/countUp/countUp.js" type="text/javascrip') }}t"></script>    
    <script src="{{ asset('admin/vendors/moment/min/moment.min.js') }}" type="text/javascript"></script>
    <!-- date picker -->
    <script src="{{ asset('admin/vendors/air-datepicker-master/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/air-datepicker-master/dist/js/datepicker.en.js') }}"></script>
    <!-- date picker end -->
    <script src="{{ asset('admin/vendors/sweetalert/dist/sweetalert2.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/fullcalendar/fullcalendar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/d3-chart/d3.v3.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/nvd3chart/nv.d3.min.js')}}" type="text/javascript"></script>    
    <script type="text/javascript" src="{{ asset('admin/vendors/jquery-easy-ticker-master/jquery.easy-ticker.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/inputmask/inputmask/inputmask.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/inputmask/inputmask/jquery.inputmask.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/inputmask/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/custom_js/admin_index.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->
</body>

</html>

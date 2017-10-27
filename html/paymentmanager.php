<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Payroll <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
    
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important"></span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue"></p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/Admin-logo.jpg">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Accounts</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="addaccount.php">Add Account</a></li>                          
                          <li><a class="" href="deleteaccount.php">Delete Account</a></li>
                      </ul>
                  </li> 
                  <!--      
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Elements</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                    -->
                  <li>
                      <a class="" href="employeemanager.php">
                          <i class="icon_genius"></i>
                          <span>Employee Manager</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="paymentmanager.php">
                          <i class="icon_piechart"></i>
                          <span>Payment Manager</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="sub-menu">
                      <a href="onlinepayment.php" class="">
                          <i class="icon_table"></i>
                          <span>Payment Info</span>
                          
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="adminaccount.php" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Admin Account</span>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Payment Manager</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Payment Manager</li>                          
                    </ol>
                </div>
            </div>

            <font size=5>Select Department:</font>
            <form>
            <select name="Department">
            <option value="dept1">dept1</option>
            <option value="dept2">dept2</option>
            <option value="dept3">dept3</option>
            <option value="dept4">dept4</option>
            </select>
            <br><br>
            </form>

            <font size=5>Select Location:</font>
            <form>
            <select name="City">
            <option value="city1">city1</option>
            <option value="city2">city2</option>
            <option value="city3">city3</option>
            <option value="city4">city4</option>
            </select>
            <br><br>
            </form>

            <br>
            <form action="/action_page.php">
            <font size=5>Name:</font><br>
            <input type="text" name="firstname">
            <br><br>
            <font size=5>Employee ID:</font><br>
            <input type="text" name="lastname">
            <br><br>
            </form> 

            <br><br>
            <a class="btn btn-primary btn-lg" href="" title="Bootstrap 3 themes generator">Search</a>
            <br><br>
            <div class="row">
                  <div class="col-sm-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Basic Table
                          </header>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>Employee ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                  <th>Total Salary</th>
                                  <th>Update</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>50,000</td>
                                  <td><form action="updatepayment.php">
                                  <input type="submit" value="update" />
                                  </form></td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                      <br>
            <a class="btn btn-primary btn-lg" href="" title="Bootstrap 3 themes generator">Done</a>
                  </div>
        </section>
      </section>    
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
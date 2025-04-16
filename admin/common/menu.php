<?php
session_start();
$title="";
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>BHUB</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="../common/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<style>
	.custom-sidebar-color {
    background-color: #b5b2ca !important;
}
	</style>
	

</head>
<body>


<div class="wrapper">

	<div class="sidebar custom-sidebar-color" data-image="../assets/img/sidebar-.jpg">
		<div class="sidebar-wrapper">
			<div class="logo">
				<!-- <img src="../common/logo.png" width="212px"> -->
				<h3> BHUB </h3>
			</div>

			<ul class="nav">
				<li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
					<a href="../dashboard/dashboard.php">
						<i class="pe-7s-graph"></i>
						<p>Home</p>
					</a>
				</li>
				
				<li class="<?php echo ($_SERVER['PHP_SELF'] === '/book_quest/admin/books/select.php') ? 'active' : ''; ?>">
					<a href="../books/select.php">
						<i class="pe-7s-note2"></i>
						<p>Books</p>
					</a>
				</li>
				<?php
				if($_SESSION['user']=='admin')
				{
				?>
				<li class="<?php echo ($_SERVER['PHP_SELF'] === '/book_quest/admin/payments/select.php') ? 'active' : ''; ?>">
					<a href="../payments/select.php">
						<i class="pe-7s-news-paper"></i>
						<p>Payments</p>
					</a>
				</li>
				<?php
				}
				?>
				
				<li>
					<a href="../../logout.php">
						<i class="pe-7s-power"></i>
						<p>Log Out</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

    <div class="main-panel">
    
    
    
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <br>
                    <?php //echo $_SESSION['company_name']; ?>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a >
								<p class=""><?php echo $_SESSION['user'] ?> Portal	</p>
                            </a>
                        </li>
                        <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>-->
                    <!--    <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>-->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      
                       
                        <li>
                            <a>
                               <i class="fa fa-user"></i> Admin
								
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
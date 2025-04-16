<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Amrita Faculty Evaluation Portal</title>

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

</head>
<style>
@media (max-width:767px){
	.mhide
	{
	display:none;	
	}
}
.bg{
	background-color:#c12046;
}
.cc{
	font-family: sans-serif;
    color: white;
    float: right;
}
</style>
<body  >

<div class="wrapper">
<div class="col-lg-12 bg">
<h3 class="cc"> Amrita Faculty Evaluation Portal</h3>
</div>
<div class="col-md-6 mhide" data-color="blue">
<center> <br><br><br><br><br><br><br><br><br><br>
<img src="amrita1.png" >
</center>
    	
    </div>
    
    
<div class="col-md-6" style="background: #FFF; height: 80%;">

    <br><br><br><br><br><br>
	
    <form action="redirect.php" method="post">

        <div class="col-md-1 mhide" style="height: 100%;"></div>

        <div class="col-md-10" style="background: #FFF; border: 1px solid #d8cece; opacity: 0.95; border-radius:12px;">
            <?php
			error_reporting(0);
			if($_REQUEST['a']=="1")
			{
				echo"<br><div class='alert alert-danger' style='border-radius: 6px;'>
				<center><b>Incorrect Username or Password!<b></center>
			</div>";
			}
			?>
			<h2 style="font-family: sans-serif; margin-left: 14px;">Login</h2>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="UserName" placeholder="Email">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="Password">
                </div>
            </div>
			
			<div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login Type</label>
                    <select name="type" class="form-control" required>
						<option value="">-select-</option>
						<option value="admin">Admin</option>
						<option value="faculty">Faculty</option>
						<option value="student">Student</option>
					</select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-6" style="float: right;">
                        <div class="form-group">
                            <input type="submit" value="Sign In" name="login" class="form-control btn-success" style="background: #474ca6; color: #fff;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="col-lg-12">
	<center>
	<img src="Amrita-University.png" width="130px">
	<p style="font-size:12px;">Copyright © 2023. All Rights Reserved.</p>
	</center>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	

</html>

<?php
include("../common/menu.php");
	
?>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
</style>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}


#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}
.table
{
margin-bottom:10px;
background:#E6F4FF;	
}
.sep
{
height:30px;
background:#666;	
}

h4{
	    margin: 10px 0 15px;
}

.cc {
    display: flex;
    align-items: center;
    border: 1px solid #e5e5e5;
    border-radius: 6px;
    padding: 10px;
    flex-direction: column; /* Stack items vertically */
}

.text-icon-container {
    display: flex;
    justify-content: space-between;
    width: 100%; /* Ensure the text and icon span the full width */
}

h3, h4 {
    margin: 0; /* Optional: Remove default margins */
}

i.pe-7s-next-2 {
    font-size: 24px; /* Adjust the icon size as needed */
}

.img_card {
    text-align: center;
  }

  .img_card img {
    width: 100px; /* Set the width of the image */
    height: 100px; /* Set the height of the image */
    border-radius: 50%; /* Make the image round */
    margin: 0 auto; /* Center the image horizontally */
  }

  .img_card h1 {
    margin: 15px 0; /* Add some space between the image and the name */
  }


</style>
 



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <!-- Your card header content -->
                    </div>
                    <div class="content all-icons">
                        <div class="row">
							<?php
							if($_SESSION['user']=='admin')
							{
							?>
							<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../user/select.php">
                                    <div class="font-icon-detail">
                                        <i class="pe-7s-users"></i>
                                        <input type="text" value="Users" readonly>
                                    </div>
                                </a>
                            </div>
							<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../author/select.php">
                                    <div class="font-icon-detail">
                                        <i class="pe-7s-users"></i>
                                        <input type="text" value="Authors" readonly>
                                    </div>
                                </a>
                            </div>
							<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../payments/select.php">
                                    <div class="font-icon-detail">
                                        <i class="pe-7s-cash"></i>
                                        <input type="text" value="Payments" readonly>
                                    </div>
                                </a>
                            </div>
							<?php
							}
							?>
							<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../books/select.php">
                                    <div class="font-icon-detail">
                                        <i class="pe-7s-notebook"></i>
                                        <input type="text" value="Books" readonly>
                                    </div>
                                </a>
                            </div>
							
							
							
							
							
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <footer class="footer">
		  <div class="container-fluid">
			<br>
			<nav class="row">
			  
			  
			</nav>
			<p class="copyright pull-right">
			  <!-- Your copyright information can go here -->
			</p>
		  </div>
		</footer>




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

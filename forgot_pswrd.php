<?php
include('header.php');
?>
    <!-- Contact Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Our Office</h4>
                                <p class="m-0"><a href="https://maps.app.goo.gl/MHhuRHLptAhGN3aq7" class="text-white">123 Street, New York, USA</a></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Email Us</h4>
                                 <p class="m-0"><a href="mailto:info@homecraft.com" class="text-white">info@homecraft.com</a></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4">
                            <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Call Us</h4>
                                <p class="m-0"><a href="tel:+012 345 6789" class="text-white">+012 345 6789</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="POST" >
                            <div class="control-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Valid Mail" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
							<br>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit">Submit</button>
                            </div>
                        </form> <br>
						<center>Already have an account? <a href="login.php">Login Now</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
	<?php
	  include("connection.php");
	  include('connection.php');
		if(isset($_POST['submit']))
		{
			
			$email=$_POST['email'];
			$sel="select * from user where email='$_POST[email]'";
			$result = mysqli_query($con,$sel) or die(mysql_error());
			$row=mysqli_fetch_array($result);
			
			$subject="Welcome To BookQuest";
			$title="Your Password";
			$msg="Greetings from BookQuest. \n Your Email id is: $row[email] \n Your password is: $row[password]";
			include('mail.php');
		}
	  ?>

<?php
include('footer.php');
?>
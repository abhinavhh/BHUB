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
                                <p class="m-0"><a href="https://maps.app.goo.gl/MHhuRHLptAhGN3aq7">123 Street, New York, USA</a></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Email Us</h4>
                                 <p class="m-0"><a href="mailto:info@homecraft.com">info@homecraft.com</a></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4">
                            <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Call Us</h4>
                                <p class="m-0"><a href="tel:+012 345 6789">+012 345 6789</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="POST" >
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <select name="gender" required class="form-control 	">
									<option value="">--select gender--</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <textarea class="form-control p-4" name="address" rows="2" placeholder="Your Address"></textarea>
								<p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input type="number" class="form-control p-4" name="pin" pattern="[0-9]{6}" title="Invalid pincode" autocomplete="off" placeholder="Your Pincode" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control p-4" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" autocomplete="off" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="phone" placeholder="Phone" pattern="[0-9]{10}" title="Invalid phone number" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input type="password" class="form-control p-4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" placeholder="Password" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
							<br>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit">Register</button>
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
	  if(isset($_POST['submit']))
	  {
		  $name=$_POST['name'];
		  $gender=$_POST['gender'];
		  $address=$_POST['address'];
		  $pin=$_POST['pin'];
		  $email=$_POST['email'];
		  $phone=$_POST['phone'];
		  $password=$_POST['password'];
		  
		  $ins="INSERT INTO `user`(`name`, `gender`, `address`, `pincode`, `email`, `contact_no`, `password`) 
		  values('$name','$gender','$address','$pin','$email','$phone','$password')";
		  echo $ins;
		  $res=mysqli_query($con,$ins);
		  if($res)
		  {
		  echo '<script>alert("Succesfully Registered!")
			  window.location="login.php";
			  </script>';
		  }
		  
	  }
	  ?>

<?php
include('footer.php');
?>
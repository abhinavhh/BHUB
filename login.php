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
                                <p class="m-0 text-white">123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Email Us</h4>
                                <p class="m-0 text-white">info@example.com</p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4">
                            <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Call Us</h4>
                                <p class="m-0 text-white">+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
						<?php
						error_reporting(0);
						if($_REQUEST['st']=="fail")
						{
							echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<center><b>Incorrect Username or Password!<b></center>
						</div>";
						}
						?>
                        <form method="POST" action="redirect.php">
                            <div class="control-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control p-4" name="password"  placeholder="Password" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <select class="form-control" style="height: 47px;" name="type">
                                        <option selected>Select type</option>
                                        <option value="admin">Admin</option>
                                        <option value="author">Author</option>
                                        <option value="user">User</option>
										
                                 </select>
                                <p class="help-block text-danger"></p>
                            </div>
							<a href="forgot_pswrd.php" style="float:right">Forgot password?</a><br>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="login">Login</button>
                            </div>
                        </form><br> 	
						<center>Don't have an account? <a href="register.php">Register Now</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php
include('footer.php');
?>
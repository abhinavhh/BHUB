<?php
include('header.php');
include('connection.php');
session_start();

$amount=$_REQUEST['amt'];
?>
	
		    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="text-primary font-weight-normal text-uppercase mb-3">Payment</h1>
                </div>
            </div>
			
			
            <div class="row pb-3">
                
				<div class="col-lg-9 col-md-6 col-12">
							<hr>
							<h4>Payment details</h4>
							<form method="POST" enctype="multipart/formdata">
								<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">Payable Amount</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
										<input type="text" name="ammt" class="form-control" id="exampleInputuname" value="<?php echo $amount; ?>" placeholder="Amount" readonly> 
									</div>
								</div><br>
								<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">CARD TYPE</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
										<select class="form-control" name="card" required>
											<option value="">-- select --</option>
											<option value="credit">Credit</option>
											<option value="debit">Debit</option>
										</select>
									</div>
								</div><br>
								
								<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">CARD NUMBER</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
										<input type="text" name="num" class="form-control" id="exampleInputuname" pattern="[0-9]{16}" placeholder="Card Number" required> 
									</div>
								</div><br>
								<div class="row">
									<div class="col-7">
										<div class="form-group">
											<label class="form-label">EXPIRATION DATE</label>
											<input type="month" name="mm" class="form-control" name="Expiry" placeholder="MM / YY" required=""> 
										</div>
									</div><br>
									<div class="col-5 pull-right">
										<div class="form-group">
											<label class="form-label">CVV CODE</label>
											<input name="cvv" type="password"class="form-control" name="CVC" placeholder="CVV" pattern="[0-9]{3}" required> 
										</div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label class="form-label">NAME OF CARD</label>
											<input type="text" name="holder" class="form-control" required name="nameCard" placeholder="NAME AND SURNAME"> 
										</div>
									</div>
								</div><br>
								<input type="submit" name="submit" value="Make Payment" class="btn btn-success">
							</form>
							
							<?php
								if(isset($_POST['submit']))
								{
									$card=$_POST['card'];
									$holder=$_POST['holder'];
									$num=$_POST['num'];
									$mm=$_POST['mm'];
									$cvv=$_POST['cvv'];
									$delivery=$_POST['delivery'];
									
									date_default_timezone_set('Asia/Kolkata');
									$currentTime = date( 'Y-m-d h:i:s');
									
									//echo $sid;
									
									$ins="INSERT INTO `payment`(`user_id`, `book_id`, `amount`, `card_type`, `card_name`, `card_no`, `payment_date`, `payment_status`,book_status) 
									values('$_SESSION[uid]','$_REQUEST[id]','$_POST[ammt]','$card','$holder','$num','$currentTime','completed','purchased')";
									echo $ins;
									
									if(mysqli_query($con,$ins))
									{
										//mysqli_query($con,"UPDATE `sales_child` SET `delivery_status`='$delivery' WHERE `om_id`='$_REQUEST[oid]'");
										
										//$query= "UPDATE sales_master SET status='Completed' WHERE c_id='$_SESSION[uid]' and status='cart'";
										mysqli_query($con,$query);
										echo '<script>alert("Payment Successful & boook purchased!")
											window.location="books.php"
										  </script>'; 
									}
									
								}
						   ?>
						</div>
				
            </div>
        </div>
    </div>
    <!-- Blog End -->
	
	
	

    <?php
include('footer.php');
?>
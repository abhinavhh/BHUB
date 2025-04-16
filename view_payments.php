<?php
include('header.php');
include('connection.php');
session_start();
?>

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <br><br>
			<div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="text-primary font-weight-normal text-uppercase mb-3">Payment History</h1>
                </div>
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
									<th>ID</th>
									<th>Book Name</th>
									<th>Amount</th>
									<th>Card Type</th>
									<th>Card Name</th>
									<th>Card Number</th>
									<th>Payment Date</th>
									<th>Payment Status</th>
									<th>Book Status</th>
								</tr>
                            </thead>
						
							
							
							
                            <tbody>
							
						   <?php
							$sel2="SELECT * FROM `payment` where user_id='$_SESSION[uid]'";
							//echo $sel2;
							$res2=mysqli_query($con,$sel2);
							$i=1;
							if($res2)
							{
								if (mysqli_num_rows($res2) == 0){
									echo "<tr>
											<td> <h3>No payments!!!.</h3></td>
										  </tr>";
								}
								else 
								{
							while($row2=mysqli_fetch_array($res2))
							{
								$sql=mysqli_query($con,"SELECT * FROM `books` WHERE `id`='$row2[book_id]'");
								$row=mysqli_fetch_array($sql)

						   ?>	
                                <tr>
									<td><?php echo $i; ?></td>
								    <td><?php echo $row['title']?></td>
								    <td><?php echo $row2['amount']?></td>
									<td><?php echo $row2['card_type']?></td>
									<td><?php echo $row2['card_name']?></td>
									<td><?php echo $row2['card_no']?></td>
									<td><?php echo $row2['payment_date']?></td>
									<td><?php echo $row2['payment_status']?></td>
									<td><?php echo $row2['book_status']?></td>
									<td><a href="review.php?id=<?php echo $row2['book_id']; ?>">review</a></td>
								</tr>
							<?php
							$i++;
							}
							}}
							?>	
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Cart -->
	


	
	
  <?php
include('footer.php');
?>
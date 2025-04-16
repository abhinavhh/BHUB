<?php
include('header.php');
include('connection.php');
session_start();

$sel="select * from books where id='$_REQUEST[id]'";
$res=mysqli_query($con,$sel);
$row= mysqli_fetch_array($res);

$sel1=mysqli_query($con,"select * from author where id='$row[author]'");
$cc=mysqli_fetch_array($sel1);


?>


<?php

		if(isset($_POST['submit']))
			{
				//error_reporting(0);
				session_start();
				//$date=date("Y-m-d");

				if ($_SESSION['uid']=='')
				{
					echo "<script >alert(\"Please Signin first\");
					window.location.replace(\"../login/index.php\");</script>";
				}
				else
				{
					$query6="SELECT * FROM sales_master WHERE c_id='$_SESSION[uid]' and status='cart' ";

					//echo $query6;
					$result6=mysqli_query($con,$query6);


					$row6 = mysqli_fetch_array( $result6);
					$count=mysqli_num_rows($result6);
						
						//echo $query6;
						//echo"count".$count;

					if($count==1)

					{
						$query7="INSERT INTO sales_child(item_id,om_id,order_qty,price,user_id) VALUES('$_REQUEST[id]','$row6[id]','$_POST[quantity]','$row[price]','$_SESSION[uid]')";
					 //echo $query7;
					 mysqli_query($con,$query7);
					 

					 mysqli_query($con,"UPDATE books SET quantity=quantity-$_POST[quantity] WHERE id='$_REQUEST[id]'");
					 
						header("location:cart.php");
					}
					else
					{

					$ddate=date('Y-m-d');
						
					$query8="INSERT INTO sales_master(c_id,date,status) VALUES('$_SESSION[uid]','$ddate','cart')";
					//echo $query8;

					if($result8=mysqli_query($con,$query8))
					{
						$oid=mysqli_insert_id($con);
						$query9="INSERT INTO sales_child(item_id,om_id,order_qty,price,user_id) 
					VALUES('$_REQUEST[id]','$oid','$_POST[quantity]','$row[price]','$_SESSION[uid]')";
					 $result9=mysqli_query($con,$query9);
					 
					 mysqli_query($con,"UPDATE books SET quantity=quantity-$_POST[quantity] WHERE id='$_REQUEST[id]'");
						
						echo "<script>
						window.location.replace(\"cart.php\");</script>";
					}
					else
					{
						echo "Error : ".mysqli_error($con);
					}

					}


				}


			}
?>



	    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="text-primary font-weight-normal text-uppercase mb-3">Book Details</h1>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="admin/books/uploads/<?php echo $row['photo'];?>" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="admin/books/uploads/<?php echo $row['photo'];?>" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="admin/books/uploads/<?php echo $row['photo'];?>" alt="Third slide"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?php echo $row['title'];?></h2>
                        <h4>Author:  <?php echo $cc['name'];?></h4>
                        <h4>Price: ₹ <?php echo $row['price'];?></h4>
						<h4>Available Quantity: <?php echo $row['quantity'];?></h4>
						<h4>Short Description:</h4>
						<p><?php echo $row['description'];?></p>
						<?php

						if ($row['category'] == 'paid') {
							
							$book_id = $row['id'];
							$user_id = $_SESSION['uid']; 

							$query = "SELECT * FROM payment WHERE user_id = $user_id AND book_id = $book_id";
							//echo $query;
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0) {
							?>
							<a href="view_pdf.php?id=<?php echo $row['id'];?>" target="_blank" class="btn btn-success">Read Book</a>
							<?php
							} else {
							?>
							<a href="payment.php?id=<?php echo $row['id'];?>&amt=<?php echo $row['price'];?>" class="btn btn-danger">Purchase Book</a>
							<?php
							}
						} else {
							?>
							<a href="view_pdf.php?id=<?php echo $row['id'];?>" target="_blank" class="btn btn-success">Read Book</a>
							<?php
						}
						?>
						<br><br>
						<h3 class="mb-4 section-title">Recommended Books</h3>

						
                    </div>
                </div>
				<br>
				<br>
				<div class="mb-5" style="    margin-top: 50px;">
                    <h3 class="mb-4 section-title">User Reviews</h3>
                    <?php
					$select="select * from reviews where book_id='$_REQUEST[id]'";
					$abc=mysqli_query($con,$select);
					while($rew=mysqli_fetch_array($abc))
					{
						$a="select * from user where id='$rew[user_id]'";
						$aa=mysqli_query($con,$a);
						$aaa=mysqli_fetch_array($aa);
						
					
					?>
					
					<div class="media mb-4">
                        <div class="media-body">
                            <h6><?php echo $aaa['name']; ?><small> | <i><?php echo $rew['date']; ?></i></small></h6>
                            <p><?php echo $rew['review']; ?></p>
                            
                        </div>
                    </div>
					<?php
					}
					?>
					
                </div>
				
				
				
				
				
            </div>
        </div>
    </div>
    <!-- Blog End -->
	
	
	    <!-- Detail Start 
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-12">
                
              
                
				
				<br>
				<div class="mb-5">
                    <h3 class="mb-4 section-title">User Reviews</h3>
                    <?php
					$select="select * from reviews where product_id='$_REQUEST[id]'";
					$abc=mysqli_query($con,$select);
					while($rew=mysqli_fetch_array($abc))
					{
						$a="select * from user where id='$rew[user_id]'";
						$aa=mysqli_query($con,$a);
						$aaa=mysqli_fetch_array($aa);
						
					
					?>
					
					<div class="media mb-4">
                        <div class="media-body">
                            <h6><?php echo $aaa['name']; ?><small> | <i><?php echo $rew['date']; ?></i></small></h6>
                            <p><?php echo $rew['review']; ?></p>
                            
                        </div>
                    </div>
					<?php
					}
					?>
					
                </div>
				
				
            </div>

        </div>
    </div>
    Detail End -->

    

    <?php
include('footer.php');
?>
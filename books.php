<?php
include('header.php');
include("connection.php");
?>




    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="text-primary font-weight-normal text-uppercase mb-3">Books</h1>
                </div>
            </div>
			
			<form class="form-inline" method="POST" enctype="multipart/form-data">
			  <div class="form-group mx-sm-3 mb-2">
				<label for="inputPassword2" class="sr-only">Password</label>
				<input type="text" class="form-control" name="product" placeholder="search books" style="width: 949px;">
			  </div>
			  <button type="submit" name="search" class="btn btn-primary mb-2">Submit</button>
			</form>
			<br><br>
            <div class="row pb-3">
                <?php
				if(isset($_POST['search']))
				{
					$product=$_POST['product'];
					$sel="select * from books where title like '%$product%'";
					//echo $sel;
				}
				else
				{
				$sel="select * from books ";
				
				}
				$res=mysqli_query($con,$sel);
				while ($row=mysqli_fetch_array($res)) 
				 {

				?>
				<div class="col-md-3 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" style="width:253px; height:233px;" src="admin/books/uploads/<?php echo $row['photo']; ?>" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
								<a class="btn btn-primary" href="detail.php?id=<?php echo $row['id']?>"><i class="fa fa-eye"></i></a> &nbsp;
								
								<?php

								if ($row['category'] == 'paid') {
									
									$book_id = $row['id'];
									$user_id = $_SESSION['uid']; 

									$query = "SELECT * FROM payment WHERE user_id = $user_id AND book_id = $book_id";
									//echo $query;
									$result = mysqli_query($con, $query);

									if (mysqli_num_rows($result) > 0) {
									?>
									<a class="btn btn-success" href=""><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
									<?php
									} else {
									?>
									<a class="btn btn-danger" href=""><i class="fa fa-lock" aria-hidden="true"></i></a>
									<?php
									}
								} else {
									?>
									<a class="btn btn-success" href=""><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
									<?php
								}
								?>
								
								
								
								
                                
                            </div>
							<h6 class="m-0 ml-3 text-truncate"><?php echo $row['title']; ?></h6>
                            <p><b>Category :</b>  <?php echo $row['category']; ?></p>
                        </div>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->


<?php
include('footer.php');
?>
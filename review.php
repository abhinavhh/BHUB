<?php
include('header.php');
include('connection.php');
session_start();



?>



	    <!-- Blog Start -->
    
	
	    <!-- Detail Start -->s
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-12">
                
              
                <div class="bg-light p-5">
                    <h3 class="mb-4 section-title">add review</h3>
                    <form method="POST">

                        <div class="form-group">
                            <label for="message">review *</label>
                            <textarea id="message" cols="30" rows="5" name="review" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="add review" name="addreview" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
				<br>
				<br>
				
				
				
            </div>

        </div>
    </div>
    <!-- Detail End -->
<?php
if(isset($_POST['addreview']))
{
	$review=$_POST['review'];
	$date=date('Y-m-d');
	$ins="insert into reviews(user_id,book_id,review,date)values('$_SESSION[uid]','$_REQUEST[id]','$review','$date')";
	$rev=mysqli_query($con,$ins);
	if($rev)
	{
		 echo '<script>alert("Review added successfully!");
      window.location="view_payments.php";
      </script>';

	}
}	
?>
	
	
    

    <?php
include('footer.php');
?>
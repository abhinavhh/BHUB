<?php
include("table.php");
include("../header_inner.php");

$del_id=0;
$i=0;
?>


	<link rel="stylesheet" type="text/css" href="datatables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<script type="text/javascript" src="datatables.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>

<style>
.hiddentd
{
display:inline-block;
    width:180px;
    white-space: nowrap;
    overflow:hidden !important;
   
}
.card-img-top{
	   width: 200px;
    height: 200px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
	margin: 17px 42px 2rem 39px;
}
h5.user-name{
}
</style>

<?php
include("../connection.php");

$id=$_SESSION['uid'];
$result =mysqli_query($con,"SELECT * FROM $table where id='$id'") or die(mysql_error());
$row= mysqli_fetch_array($result);

$r1=mysqli_query($con,"SELECT * FROM `class` WHERE ID='$row[class]'");
$c1=mysqli_fetch_array($r1);

$r2=mysqli_query($con,"SELECT * FROM `semester` WHERE ID='$row[sem]'");
$c2=mysqli_fetch_array($r2);

$r3=mysqli_query($con,"SELECT * FROM `academic_year` WHERE ID='$row[year]'");
$c3=mysqli_fetch_array($r3);

?>


<div class="">

<div class="clearfix"></div>

		<div class="col-lg-3">
			<div class="card" style="width: 28rem;">
			  <img class="card-img-top" src="uploads/<?php echo $row['image']; ?>" alt="Card image cap">
			  <center>
				<h3 class="user-name"><?php echo $row['name']; ?></h3>
				<h5><?php echo $row['email']; ?></h5>
			  </center>
			  <br>
			</div>
		</div>	
		<div class="col-lg-9">	
		<form action='update.php?id=<?php echo $id ?>' method='POST'>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Name</label>
			  <input type="text" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Name">
			</div>
			<div class="form-group col-md-6">
			  <label for="inputPassword4">Email</label>
			  <input type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Phone</label>
			  <input type="text" class="form-control" value="<?php echo $row['phone']; ?>" placeholder="Phone">
			</div>
			<div class="form-group col-md-6">
			  <label for="inputPassword4">Password</label>
			  <input type="text" class="form-control" value="<?php echo $row['password']; ?>" placeholder="Password">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Class</label>
			  <input type="text" class="form-control" value="<?php echo $c1['class']; ?>"  placeholder="Class">
			</div>
			<div class="form-group col-md-6">
			  <label for="inputPassword4">Semester</label>
			  <input type="text" class="form-control" value="<?php echo $c2['semester']; ?>" placeholder="Semester">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Year</label>
			  <input type="text" class="form-control" value="<?php echo $c3['year']; ?>" placeholder="Year">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-12" style="margin-left: 0px;;">
			  <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Update</button>
			</div>
		  </div>
		  
		</form>
		</div>	
		




<div class="clearfix"></div>
	
</div> 
    <?php
	
//	include("../footer_inner.php");
	?>
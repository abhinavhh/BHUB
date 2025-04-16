<?php
include("table.php");
include("../header_inner.php");

$del_id=0;
$i=0;
?>


		<link rel="stylesheet" type="text/css" href="datatables.min.css">
 
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
</style>

<div class="">
<center><h1>Purchase Report</h1></center>
<div class="clearfix"></div>

<form class="form-inline" method="post">
<div class="form-group">
    <label >From:</label>
    <input type="date" class="form-control" id="date" name="d1" max="<?php echo $date;?>">
  </div>
  <div class="form-group">
    <label >TO:</label>
    <input type="date" class="form-control" id="date" name="d2" max="<?php echo $date;?>">
  </div>
  <input type="submit" class="btn btn-danger" name="submit">
</form>
<br>
</div>

<div class="">
<?php

	//echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><form action='form.php' method='post'><input type='submit' name='view' value='Add New' class='form-control btn-danger'></form></div>";
	
?>
<div class="clearfix"></div>
<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0"  role="grid" aria-describedby="example_info" >

       
        
            
          <?php
	
		  include("../connection.php");
	
	
	
	
	
	
	
	
if(isset($_REQUEST['del_id']))
{
$del_id=$_REQUEST['del_id'];
mysqli_query($con,"delete from $table where id='$del_id'");
//if($del_id!="")
}
	?>
    <script>


function rem()
{
if(confirm('Are you sure you want to delete this record?')){
return true;
}
else
{
return false;
}
}


function rem2()
{
if(confirm('Are you sure you want to deactive this record?')){
return true;
}
else
{
return false;
}
}
</script>
    
	
		<tr>
			<th>#</th>
			<th>User Name</th>
			<th>Order id</th>
			<th>Date</th>
			<th>Book Name</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		<?php
			if(isset($_REQUEST['d1']))
			{
				$result = mysqli_query($con,"SELECT * FROM `sales_child` LEFT JOIN sales_master on sales_child.om_id = sales_master.id where status='Completed' and (date BETWEEN '$_REQUEST[d1]' AND '$_REQUEST[d2]')"); 
			}
			else{
			$result = mysqli_query($con,"SELECT * FROM `sales_child` LEFT JOIN sales_master on sales_child.om_id = sales_master.id where status='Completed'");
			}
			
			$i=1;
			while($row2=mysqli_fetch_array($result))
			{
				$sel=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$row2[c_id]'");
				$row=mysqli_fetch_array($sel);
				
				$sel1=mysqli_query($con,"SELECT * FROM `books` WHERE `id`='$row2[item_id]'");
				$row1=mysqli_fetch_array($sel1);
				
				
				
		?>
			<tr>
			   <td><?php echo $i; ?></td>
					
			   <td><?php echo $row['name']?></td>
			   
			   <td><?php echo $row2['om_id']?></td>
			   
			   <td><?php echo $row2['date']?></td>
			   
			   <td><?php echo $row1['title']?></td>
				
			   <td ><?php echo $row2['order_qty']?></td>
				
				<td><?php echo $row2['price']?></td>
				
			</tr>
		<?php
			$i++;
			}
		?>
        </tbody>
    </table>
			
		



<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

<div class="clearfix"></div>
	
    </div> 
    <?php
	
//	include("../footer_inner.php");
	?>
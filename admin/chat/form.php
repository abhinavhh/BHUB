
<?php
include("../header_inner.php");
include("table.php");

$k=0;
if($_REQUEST['a']==1)
{
	echo "<script>
		alert('data inserted!');
		window.location='select.php';
	</script>";
}
?><!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
<!--<style>
div
{
text-transform:capitalize;
margin-bottom:5px;	
}

</style>-->
<?php

include("data_validation.php");
include("../connection.php");

$g=0;

$result = mysqli_query($con,"SHOW FIELDS FROM $table");

$i = 0;

echo "<div class='col-sm-12'>";
echo "<h2>$title</h2>";
echo "<form action='insert.php' method='post' enctype='multipart/form-data' name='register_form' id='register_form'>";
while ($row = mysqli_fetch_array($result))
 {

  $name=$row['Field'];
  $type=$row['Type'];
  $type = explode("(", $type);
  $type_only=$type[0];
$i++;

$g++;


//echo " <div ><div >";



if($i==1 )
{
	
	//echo "<td>Male <input type='radio' name='$name'> </td>";
	
}

elseif($i==68)
{
	$dateT=date("Y-m-d H:i:s");
	echo "<input type='hidden' name='$name' value='$_SESSION[userid]' class='form-control' >";
}

elseif($i==60)
{
	$dateT=date("Y-m-d H:i:s");
	echo "<input type='hidden' name='$name' value='$dateT' class='form-control' >";
}

   elseif($i==30)
  {
	  echo "<div class='col-md-10'>
              <div class='form-group'>
			  <label>".str_replace('_', ' ', $name)."</label>";
	           $sql2 = "select *  from class";
		       $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
               echo "<select name='$name' class='form-control'>";
    
				while($row2 =mysqli_fetch_array($result2))
				{
					
					echo "<option value='$row2[id]'>$row2[class]</option>";
				}
	          echo "</select>";
	          echo "</div>
              </div>";
  }
   elseif($i==30)
  {
	  echo "<div class='col-md-10'>
              <div class='form-group'>
			  <label>".str_replace('_', ' ', $name)."</label>";
	           $sql2 = "select *  from semester";
		       $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
               echo "<select name='$name' class='form-control'>";
    
				while($row2 =mysqli_fetch_array($result2))
				{
					
					echo "<option value='$row2[id]'>$row2[semester]</option>";
				}
	          echo "</select>";
	          echo "</div>
              </div>";
  }
 elseif($i==8 )
  {
	  echo "<div class='col-md-10'>
                <div class='form-group'>
				<label>".str_replace('_', ' ', $name)."</label>";
				echo "<select name='$name' class='form-control'>";
				echo "<option value='active'>active</option>";
				echo "<option value='deactive'>deactive</option>";
				echo "</select>";
	  echo "</div>
            </div>";
	
      
    
  }

 elseif($i==30 )
  {
	  echo "
	  
	  
	  <div class='col-md-10'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  
	  $sql2 = "select *  from station ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
echo "<select name='$name' class='form-control'>";
    
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[station]'>$row2[station]</option>";
	}
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
      
    
  }
  
 elseif($i==70)
  {
	  echo "<div class='col-md-10'>
              <div class='form-group'>
			  <label>".str_replace('_', ' ', $name)."</label>";
	           $sql2 = "select *  from academic_year where status='active'";
		       $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
               echo "<select name='$name' class='form-control'>";
    
				while($row2 =mysqli_fetch_array($result2))
				{
					
					echo "<option value='$row2[year]'>$row2[year]</option>";
				}
	          echo "</select>";
	          echo "</div>
              </div>";
  }
  
   elseif($i==8)
  {
	  echo "<div class='col-md-10'>
              <div class='form-group'>
			  <label>".str_replace('_', ' ', $name)."</label>";
	           $sql2 = "select *  from class where status='active'";
		       $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
               echo "<select name='$name' class='form-control'>";
    
				while($row2 =mysqli_fetch_array($result2))
				{
					
					echo "<option value='$row2[class]'>$row2[class]</option>";
				}
	          echo "</select>";
	          echo "</div>
              </div>";
  }



else
{

  if($type_only=="varchar" || $type_only=="int" || $type_only=="int" || $type_only=="tinyint" )
  {
	  echo "
	  
	  
	  <div class='col-md-10'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label><input type='text' name='$name'class='form-control' > </div>
                                        </div>";
	
      
    
  }
  
  
   if($type_only=="date" )
  {
	  $date=date("Y-m-d");
	  echo "
	  
	  
	  
	  <div class='col-md-10'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='date' name='$name'  class='form-control' value='$date'></div></div>";
	  
	  ?>
	  
	    <script type="text/javascript">
$(function() {
	$('#t<?php echo $k;?>').datepick();
	
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
      <?php
	  $k++;
  }
  
  
  if($type_only=="tinytext" )
  {
	  echo "
	  
	  	  
	  <div class='col-md-10'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='file' name='$name' class='form-control'></div></div>";
  }
  if($type_only=="text" )
  {
	  echo "<div class='col-md-10'>
                                            <div class='form-group'><label>
											
											 ".str_replace('_', ' ', $name)."</label>
											
											<textarea name='$name'  class='form-control' rows='8'></textarea>
											</div>
											</div>";
  }
  
  
  

}
  


//echo "</div></div><br>";

  
 
 
 
 
 
  
}



echo "
<div class='col-md-12'>
                              <div class='col-md-3'>              <div class='form-group'>
											<input type='submit' value='Submit' name='submit' class='form-control btn-success'>";



echo "</form>";



echo "
</div></div><div class='col-md-3'>   <div class='form-group'>
<form action='select.php' method='post'><input type='submit' name='view' value='View All' class='form-control btn-danger'></form></div></div>
<div class='clearfix'></div>

</div>
";



mysqli_free_result($result);










echo "</div>



<div class='clearfix'></div>


";






mysqli_close($con);

include("../footer_inner.php");

?>
   <div id="sample">
 <!-- <script type="text/javascript" src="nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>-->
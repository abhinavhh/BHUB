<?php
include("../connection.php");
include("table.php");
$result = mysqli_query($con,"SHOW FIELDS FROM $table");
$i = 0;
while ($row = mysqli_fetch_array($result))
 {
 // echo $row['Field'] . ' ' . $row['Type']."<br>";
  $name=$row['Field'];
  //echo $name."<br>";
  $post_values[]=addslashes($_POST[$name]);
  $field_name[]=$name;
  $data_type[]=$row['Type'];
 // echo $post_values[$i];
  $i++;
 }
$j=$i;
//echo "<br>";
for($k=0;$k<$i;$k++)
{
	if($fields=="")
	$fields=$field_name[$k];
	else
	$fields=$fields.",".$field_name[$k];
	
	
	$type=$data_type[$k];
	//$data_type[$k];
	$type = explode("(", $type);
  $type_only=$type[0];
	


  if($type_only=='tinytext')
  {
	
$sql3 = "select * from rate where start_point='$_POST[start_location]' and end_point='$_POST[end_location]' ";
   //echo $sql3;
	$result3 = mysqli_query($con, $sql3) or die("Error in Selecting" . mysqli_error($con)); 
	 $row3 =mysqli_fetch_array($result3);
	 $target_path2=$row3['amount'];




	if($datas=="")
	{
	$datas="'".$target_path2."'";
	//echo $field_name[$k];
	}
	else
	{
	$datas=$datas.",'".$target_path2."'";
//	echo $field_name[$k];
	}
	
  }
  
  
  else
	 {
	if($datas=="")
	$datas="'".$post_values[$k]."'";
	else
	$datas=$datas.",'".$post_values[$k]."'";
	
  }
}
//echo $datas;
	
$sql3 = "select * from rate where start_point='$_POST[start_location]' and end_point='$_POST[end_location]' ";
   //echo $sql3;
	$result3 = mysqli_query($con, $sql3) or die("Error in Selecting" . mysqli_error($con)); 
	 $row3 =mysqli_fetch_array($result3);
	 $am=$row3['amount'];
mysqli_query($con,"INSERT INTO $table($fields) VALUES ($datas)") or die("error".mysql_error());


//header("location:form.php?a=1");
?>

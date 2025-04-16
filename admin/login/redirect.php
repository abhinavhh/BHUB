
<?php
session_start();
include('../db/connectionI.php');

if (isset($_POST['login']))
{	
$username=$_POST['UserName']; 
$password=$_POST['Password']; 

	
	if($_POST['type']=="admin"){
		
	if($username=="admin@gmail.com" && $password=="admin")
	{
		$_SESSION['type']='admin';
		$_SESSION['name']='Administrator';
		header("location:../dashboard/dashboard.php");
	}
	else{
		
		header("location:login.php?a=1");
		
	}	
	}
	elseif($_POST['type']=="faculty"){
		
	$sel="SELECT * FROM faculty WHERE email='$username' and password='$password'";
	echo $sel;
	$result = mysqli_query($con,$sel) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	
	if($rows==1)
	{	
		$_SESSION['type']='faculty';
		$_SESSION['uid']=$row['id'];
		$_SESSION['name']=$row['name'];
		header("location:../dashboard/dashboard.php");
		
	}
	else{
		
		header("location:login.php?a=1");
		
	}	
	}elseif($_POST['type']=="student"){
		
	$sel1="SELECT * FROM student WHERE email='$username' and password='$password'";
	echo $sel1;
	$result1 = mysqli_query($con,$sel1);
	$rows1 = mysqli_num_rows($result1);
	$row1=mysqli_fetch_array($result1);
	
	if($rows1==1)
	{	
		$_SESSION['type']='student';
		$_SESSION['uid']=$row1['id'];
		$_SESSION['name']=$row1['name'];
		$_SESSION['class']=$row1['class'];
		header("location:../dashboard/dashboard.php");
		
	}
	else{
		
		header("location:login.php?a=1");
		
	}
	}
	
}
else{

	header("location:login.php?a=1");
}
?>
 
 





<?php
session_start();
include('connection.php');

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 


if(isset($_POST['login']))
{

if($myusername=="admin@gmail.com" and $mypassword=="admin")
{
		$_SESSION['user']="admin";
		header("location:admin/dashboard/dashboard.php");
}
else{
	if($_POST['type']=='user')
	{
		$sel="SELECT * FROM user WHERE email='$myusername' and password='$mypassword'";
		echo $sel;
		$result = mysqli_query($con,$sel) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		
		if($rows>0)
		{	
			$_SESSION['user']='user';
			$_SESSION['uid']=$row['id'];
			$_SESSION['name']=$row['name'];
			header("location:index1.php");
			
		}
		else{
			header("location:login.php?st=fail");
		}
	}
	elseif($_POST['type']=='author')
	{
		$sel="SELECT * FROM author WHERE email='$myusername' and password='$mypassword'";
		echo $sel;
		$result = mysqli_query($con,$sel) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		
		if($rows>0)
		{	
			$_SESSION['user']='author';
			$_SESSION['uid']=$row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['name']=$row['email'];
			header("location:admin/dashboard/dashboard.php");
			
		}
		else{
			
			header("location:login.php?st=fail");
		}
	}
	else
	{
			
			header("location:login.php?st=fail");
	}
}

}

?>
 
 




<?php
include('connection.php');
if(isset($_REQUEST['id']))
{
$id=$_REQUEST['id'];
$sel=mysqli_query($con,"select * from books where id='$id'");
$cc=mysqli_fetch_array($sel);

// Assuming $pdfFilePath contains the path to the PDF file
$pdfFilePath = "admin/books/uploads/" . $cc['document'];

// Set the appropriate headers for PDF content
header('Content-type: application/pdf');

// Open the PDF file
readfile($pdfFilePath);
}
?>

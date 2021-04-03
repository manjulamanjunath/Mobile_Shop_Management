<?php


$B_id=$_POST['B_id'];
$C_id=$_POST['C_id'];
$Price=$_POST['Price'];
$Mode_Of_Payment=$_POST['Mode_Of_Payment'];


$connection = mysqli_connect('localhost','root','');
if(!$connection)
{
	die("database connection failed".mysqli_error($connection));
}
$select_db=mysqli_select_db($connection,'newdb');
if(!$select_db)
{
	die("database selection failed".mysqli_error($connection));
}

$query="INSERT INTO bill(B_id,C_id,Price,Mode_Of_Payment) VALUES ('$B_id','$C_id','$Price','$Mode_Of_Payment')";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
 	echo " Bill Generated Successfully ";

?>

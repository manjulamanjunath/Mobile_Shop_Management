<?php


$M_id=$_POST['M_id'];
$M_Name=$_POST['M_Name'];
$Model=$_POST['Model'];
$Price=$_POST['Price'];
$Quantity_Available=$_POST['Quantity_Available'];


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

$query="INSERT INTO Mobile_Stock(M_id,M_Name,Model,Price,Quantity_Available) VALUES ('$M_id','$M_Name','$Model','$Price','$Quantity_Available')";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
 	echo " Added Successfully ";

?>

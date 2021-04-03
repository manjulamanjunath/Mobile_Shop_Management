
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

$query="UPDATE  Mobile_Stock  SET Quantity_Available='$Quantity_Available', M_Name='$M_Name', Model='$Model',Price='$Price'  WHERE M_id='$M_id' ";
	if($connection->query($query)==TRUE)
	{
	 	echo "record updated successfully";
	}
	else
	{
		echo "error updating record:" .$connection->error;
	}
	$connection->close();

?>

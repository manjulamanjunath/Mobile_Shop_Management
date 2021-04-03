<?php
include_once("db_connect.php");
$query="CALL Get_All_Mobile_Stock";
$result=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<title>ss
  <head>Fetch data from data base</head>
</title>

<body>
  <table align="center" border="1px" style="width:600px; line-height:40px;">
    <tr>
      <th colspan="5"><h2>Stock Details</h2></th>
    </tr>
    <tr>
      <th>M_id</th>
      <th>M_Name</th>
      <th>Model</th>
      <th>Price</th>
      <th>Quantity_Available</th>
    </tr>
    <?php
while($rows=mysqli_fetch_assoc($result))
{
     ?>
     <tr>
       <td><?php echo $rows['M_id']; ?></td>
       <td><?php echo $rows['M_Name']; ?></td>
       <td><?php echo $rows['Model']; ?></td>
       <td><?php echo $rows['Price']; ?></td>
       <td><?php echo $rows['Quantity_Available']; ?></td>
     </tr>
     <?php
}
      ?>
    </table>
  </body>
  </html>

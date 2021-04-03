<?php
include_once("db_connect.php");
$query="select * from Employee";
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
      <th colspan="4"><h2>Employee Details</h2></th>
    </tr>
    <tr>
      <th>E_id</th>
      <th>E_Name</th>
      <th>Address</th>
      <th>Phone_No</th>
    </tr>
    <?php
while($rows=mysqli_fetch_assoc($result))
{
     ?>
     <tr>
       <td><?php echo $rows['E_id']; ?></td>
       <td><?php echo $rows['E_Name']; ?></td>
       <td><?php echo $rows['Address']; ?></td>
       <td><?php echo $rows['Phone_No']; ?></td>
     </tr>
     <?php
}
      ?>
    </table>
  </body>
  </html>

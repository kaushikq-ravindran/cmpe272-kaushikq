<?php
include("config.php");
$query = $connect->query("SELECT * FROM sql-fruits");
?>

<table border="1">
  <tr>
    <td>No</td>
    <td>Fruit Name</td>
  </tr>
  <?php
  $no = 1;
  while($row = $query-> fetch_assoc()){
    echo = "<tr>
      <td>$no</td>
      <td{$row['name']}></td>
    </tr>";
    $no++;
   }  
   ?>
</table>

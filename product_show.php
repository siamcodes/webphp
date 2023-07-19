<link rel="stylesheet" href="./styles.css" />
 <h1 class="text-center"> แสดงสินค้า </h1> 
<div class="center">
<?php
   include "connect.php";
   $sql = "SELECT * FROM tbl_product";
   $result = mysqli_query($conn, $sql);
?>

<table class="table">
  <tr>
    <th width="30%"> ชื่อสินค้า </th>
    <th width="5%"> ราคา </th>
    <th width="5%"> จำนวนในคลัง </th>
    <th width="50%"> รายละเอียดสินค้า </th>
    <th width="5%"> Edit </th>
    <th width="5%"> Delete </th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo"$row[name]"; ?> </td>
        <td><?php echo"$row[price]"; ?> </td>
        <td><?php echo"$row[stock] "; ?> </td>
        <td><?php echo"$row[description]"; ?> </td>
        <td><?php echo"<a href='product_edit.php?id=$row[id]'> แก้ไข </a>"; ?></td>
        <td><?php echo"<a href='product_del.php?id=$row[id]'> ลบ </a>" ?></td>
    </tr>
<?php
  }
?>

</table>

<?php
} else {
  echo "0 results";
}
mysqli_close($conn);
?>

</div>
<link rel="stylesheet" href="styles.css" />
<?php
   include "connect.php";

   $sql = "SELECT * FROM tbl_member";
   $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>
<table class="table">
  <tr>
    <th> ชื่อ - นามสกุล </th>
    <th> อีเมล </th>
    <th> เบอร์โทร </th>
    <th> ที่อยู่ </th>
    <th> รูป </th>
    <th> Edit </th>
    <th> Delete </th>
  </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
  <tr>
      <td><?php echo"$row[firstname] $row[lastname]"; ?> </td>
      <td><?php echo"$row[email]"; ?> </td>
      <td><?php echo"$row[phone]"; ?> </td>
      <td><?php echo"$row[address]"; ?> </td>
      <td><img src="./images/<?php echo $row[photo] ?>" width="200px" />  </td>
      <td><?php echo"<a href='member_edit.php?id=$row[id]'> Edit </a> "; ?> </td>
      <td><?php echo"<a href='member_del.php?id=$row[id]'> Delete </a> "; ?> </td>
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
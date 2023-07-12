<?php
include "connect.php";

$sql = "INSERT INTO tbl_product (name, price, stock, description)
VALUES ('$_POST[name]', '$_POST[price]', '$_POST[stock]', '$_POST[description]')";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเสร็จแล้ว";
  header( "location: product_show.php" );
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
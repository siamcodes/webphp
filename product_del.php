<?php
 include "connect.php";

 $sql= "DELETE FROM tbl_product WHERE id='$_GET[id]' ";

 if (mysqli_query($conn, $sql)) {
    echo "ลบข้อมูลเรียบร้อยครับ";
    $message = "wrong answer";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("location: product_show.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>
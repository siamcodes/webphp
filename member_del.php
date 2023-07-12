<?php
 include "connect.php";

 $sql= "DELETE FROM tbl_member WHERE id='$_GET[id]' ";

 if (mysqli_query($conn, $sql)) {
    echo "ลบข้อมูลเรียบร้อยครับ";
    header("location: member_show.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>
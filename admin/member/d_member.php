<?php
require('../../dbconnect.php');
session_start();
if($_SESSION['m_email'] == 'admin@admin') {
  $id=$_GET["id"];
  //echo $id;
  $sql="DELETE FROM `member` WHERE `member`.`m_id` = $id";
  //echo $sql;
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "ลบข้อมูลสำเร็จ";
    header('location:s_member.php');
  }else{
    echo "เกิดข้อผิดพลาด";
  }    
  $conn -> close();
} else { header("Location: ../../index.php"); }
?>

        

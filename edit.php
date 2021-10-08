<?php
$delete_Number=$_GET['delete_Number'];//รับค่าGET ที่ส่งมาจากไฟล์ show
require_once("connection.php");//เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล
$sql="DELETE FROM student WHERE Number ='$delete_Number'";//คำสั่งลบข้อมูล
$result = mysql_query($sql);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";//javascript แจ้ง alert ข้อความ
    echo "<meta http-equiv ='refresh'content='0;URL=index2.php'>";// คำสั่งให้ refreshหน้าไปหน้าที่เราต้องการ
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";//javascript แจ้ง alert ข้อความ และคำสั่งให้ refresh หน้าเดิมถ้าลบข้อความไม่สำเร็จ
}    
?>
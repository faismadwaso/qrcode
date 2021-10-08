<?php
    require("connection.php");
?>


<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>จัดการข้อมูลพิพิธภัณฑ์</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css2/aos.css">

  
  
<style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  color: #5e5d52;
}

a {
  color: #337aa8;
}
a:hover, a:focus {
  color: #57b846;
}

.container {
  margin: 5% 3%;
}
@media (min-width: 48em) {
  .container {
    margin: 2%;
  }
}
@media (min-width: 75em) {
  .container {
    margin: 2em auto;
    max-width: 75em;
  }
}

.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
  border-spacing: 0;
}
@media (min-width: 48em) {
  .responsive-table {
    font-size: .9em;
  }
}
@media (min-width: 62em) {
  .responsive-table {
    font-size: 1em;
  }
}
.responsive-table thead {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  /* IE6, IE7 */
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
@media (min-width: 48em) {
  .responsive-table thead {
    position: relative;
    clip: auto;
    height: auto;
    width: auto;
    overflow: auto;
  }
}
.responsive-table thead th {
  background-color: black;
  border: 1px solid black;
  font-weight: normal;
  text-align: center;
  color: white;
}
.responsive-table thead th:first-of-type {
  text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
  display: block;
  padding: 0;
  text-align: left;
  white-space: normal;
}
@media (min-width: 48em) {
  .responsive-table tr {
    display: table-row;
  }
}
.responsive-table th,
.responsive-table td {
  padding: .5em;
  vertical-align: middle;
}
@media (min-width: 30em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
}
@media (min-width: 48em) {
  .responsive-table th,
  .responsive-table td {
    display: table-cell;
    padding: .5em;
  }
}
@media (min-width: 62em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
}
@media (min-width: 75em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em;
  }
}
.responsive-table caption {
  margin-bottom: 1em;
  font-size: 1em;
  font-weight: bold;
  text-align: center;
}
@media (min-width: 48em) {
  .responsive-table caption {
    font-size: 1.5em;
  }
}
.responsive-table tfoot {
  font-size: .8em;
  font-style: italic;
}
@media (min-width: 62em) {
  .responsive-table tfoot {
    font-size: .9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody {
    display: table-row-group;
  }
}
.responsive-table tbody tr {
  margin-bottom: 1em;
}
@media (min-width: 48em) {
  .responsive-table tbody tr {
    display: table-row;
    border-width: 1px;
  }
}
.responsive-table tbody tr:last-of-type {
  margin-bottom: 0;
}
@media (min-width: 48em) {
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: rgba(94, 93, 82, 0.1);
  }
}
.responsive-table tbody th[scope="row"] {
  background-color: #1d96b2;
  color: white;
}
@media (min-width: 30em) {
  .responsive-table tbody th[scope="row"] {
    border-left: 1px solid #1d96b2;
    border-bottom: 1px solid #1d96b2;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody th[scope="row"] {
    background-color: transparent;
    color: #5e5d52;
    text-align: left;
  }
}
.responsive-table tbody td {
  text-align: right;
}
@media (min-width: 48em) {
  .responsive-table tbody td {
    border-left: 1px solid #1d96b2;
    border-bottom: 1px solid #1d96b2;
    text-align: center;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td:last-of-type {
    border-right: 1px solid #1d96b2;
  }
}
.responsive-table tbody td[data-type=currency] {
  text-align: right;
}
.responsive-table tbody td[data-title]:before {
  content: attr(data-title);
  float: left;
  font-size: .8em;
  color: rgba(94, 93, 82, 0.75);
}
@media (min-width: 30em) {
  .responsive-table tbody td[data-title]:before {
    font-size: .9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td[data-title]:before {
    content: none;
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div class="container">
  <table class="responsive-table">
    <caption>จัดการข้อมูลพิพิธภัณฑ์</caption>

   

    <thead>
    

      <tr>
      
        <th scope="col">ลำดับ</th>
        <th scope="col">ชื่อ</th>
        <th scope="col">ประวัติความเป็นมา</th>
        <th scope="col">หมวดหมู่</th>
        <th scope="col">รูปภาพ</th>
        <th scope="col">วีดีโอ</th>
        <th scope="col">เพิ่มลิงค์</th>
        <th scope="col">แสดง</th>
        <th scope="col">แก้ไข</th>
        <th scope="col">ลบ</th>
      </tr>
      
    </thead>
    <tfoot>

    </tfoot>
    <tbody>
      <?php
               //ดึงข้อมูลมา
               $sql ="SELECT * FROM qrcode";
                //ดึงข้อมูลมาใส่แยกกัน
               $result = mysqli_query($conn,$sql);
               $i =1;

               if(mysqli_num_rows($result) > 0){
                        //บรรทัดนี้สำคัญ 
                while($row = mysqli_fetch_assoc($result)){
                    echo"<tr>";
                    
      
                   
                        echo"<td>".$i."</td>";
                        echo"<td>".$row['Username']."</td>";
                        echo"<td>".$row['Story']."</td>";
                        echo"<td>".$row['Category']."</td>";
                        echo"<td>".$row['File_photo']."</td>";
                        echo"<td>".$row['File_video']."</td>";
                        
                        echo "<td><a class='fa fa-link'  href='createlink.php'></a></td>";
                        echo "<td><a class='fa fa-address-card'  href='show-qrcode.php?id=" . $row['id'] . "'></a></td>";
                        echo "<td><a class='fa fa-pencil-square-o'  href='edit_form.php?id=" . $row['id'] . "'></a></td>";
                        
              
                        echo"<td><a  class='fa fa-trash-o' href='data1.php?delete_id=".$row['id']."'
                         
                         onclick='return confirm(\"คุณต้องการลบขอความหรือไม\")'></a>

                         </td>";
                
                    echo"</tr>";

                    $i++;
                }

            }else{
                echo "EMPTY DATA";
            }     
            
             ?>

    </tbody>
  </table>
</div>

  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



 <!--------------------------------------------------------------- -->

ิ<br>

<center>
<button type="button" class="btn btn-light"><a href="gg2.php">เพิ่มข้อมูล</button>
</center>

 <br>
<center>
  <button type="button" class="btn btn-light"><a href="index3.php">ย้อนกลับ</button>
</center>
<br>

</body>

</html>
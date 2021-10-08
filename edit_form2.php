<?php
require("connection.php");

if(isset($_GET['id'])){

$id = $_GET['id'];

    $sql = "SELECT * FROM qrcode WHERE id = $id";
     
       $row = mysqli_query($conn,$sql);

       $result = mysqli_fetch_assoc($row);

       if(!$result){

         echo "Error:". $sql . "<br>" . mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
   <title>Edit Personal information</title>

</head>
   <body>
   <center>
   <form action="data1.php" method="post">

     <fieldset>
       <legend> Personal information:</legend>

       <lable>ชื่อ - นามสกุล :</lable><br>
       <input type="text" name="edit_Username" required value="<?php echo $result['Username']?>"><br>
<br>
<br>

       <lable>ประวัติคงามเป็นมา : </lable><br>
       <textarea name="edit_Story" rows="5" cols="30" required><?php echo $result['Story']?></textarea><br>
<br>
<br>
<br>
       <lable>หมวดหมู่ : </lable><br>
            <input type="text" name="edit_Category" value="<?php echo $result['Category']?>"><br>
<br>
<br>

       <lable>รูปภาพ : </lable><br>
            <input type="text" name="edit_File_photo" value="<?php echo $result['File_photo']?>"><br><br>
<br>
<br>

       <lable>วีดีโอ :</lable><br>
            <input type="text" name="edit_File_video" required value="<?php echo $result['File_video']?>"><br>




            <input type="hidden" name="edit_form_id2" value="<?php echo $result['id']?>">

            <input type="submit" value="save">
    
      </fieldset>
      </center>
    </form>

    </body>
</html>
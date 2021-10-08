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

<!DOCTYPE html >
<head>
	<title>Edit Personal information</title>
</head>
<body>
<html lang="en-US">
	<head>
	<title>Quick Response (QR) Code Generator</title>
	<link rel="icon" href="img/favicon.ico" type="image/png">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	</head>
	<form action="data2.php"method="post">
	<h3><strong> แก้ไขข้อมูลพิพิธภัณฑ์</strong></h3>
	<div class="input-field " style="width:600px; height:600px;">

	<div class="w3-half w3-margin-bottom">
						<label>ชื่อ</label>
						<input class="form-control" style="width:17em;" type="text"  name="edit_Username"  required value="<?php echo $result['Username']?>">
					</div>
  <br>
					<div class="w3-half w3-margin-bottom">
						<label>ประวัติความเป็นมา</label>
						<input class="form-control" style="width:35em;" type="text"  name="edit_Story"  required value="<?php echo $result['Story']?>">
					</div>

			


	<br>
	<lable>หมวดหมู่: </lable><br>
	<select name="edit_Category" class="form-control"   required value="<?php echo $result['Category']?>" >
                    <option value="เลือก" selected="selected">- เลือก -</option>
                    <option value="สถูปจำลองดินเผา">สถูปจำลองดินเผา</option>
                    <option value="สถูปจำลองดินทราย">สถูปจำลองดินทราย</option>
                    <option value="หลังคาคลุมโบราณ">หลังคาคลุมโบราณ</option>
                    <option value="ของกะจุ๊กกะจื๊ก">ของกะจุ๊กกะจื๊ก</option>
    </select>
    <br>

    <div class="form-group">
                        <label><i class="fa fa-file-o"></i>รูปภาพ</label>
	                    <input type="file"name="edit_File_photo" required value="<?php echo $result['File_photo']?>">
						<br>
                    </div>
   
					<div class="form-group">
                        <label><i class="fa fa-file-o"></i>วีดีโอ</label>
	                    <input type="file"name="edit_File_video" required value="<?php echo $result['fileToUpload']?>"><br>
                    </div>


	<input type="hidden" name="edit_form_id2" value="<?php echo $result['id']?>">
	<input type="submit" value="save">

					
</fieldset>
</form>
</body>
</html>
<style type="text/css">
html {
background-image: url('uu.jpg');
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style>
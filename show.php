<?php
require("connection.php");
include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromUsername($Username) {
	$find = '@';
	$pos = strpos($Username, $find);
	$username = substr($Username, 0, $pos);
	return $Username;
}

if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$Username = $_POST['Username'];
	$Story =  $_POST['Story'];
    $Category = $_POST['Category'];
	$File_photo = $_POST['File_photo'];
    $File_video = $_POST['File_video'];
	$filename = getUsernameFromUsername($Username);
	$codeContents = 'ชื่อ:'.$Username.
	                'ประวัติความเป็นมา:'.($Story).
					'หมวดหมู่:'.($Category).
					'รูปภาพ:'.($File_photo).
                    'วีดีโอ:'.($File_video);
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
	$sql = "INSERT INTO qrcode (Number,Username,Story,Category,File_photo,File_video)
	       VALUES (null,'$Username','$Story','$Category','$File_photo','$File_video')";
           if(mysqli_query($conn,$sql)) {
      
	  
		} else {
			echo "Error:".$sql."<br>".mysqli_error($conn);
		}  
	 }
	 
	 
			 //save edit data
			 if(isset($_POST['edit_form1_Number'])){
				$Username = $_POST['edit_Username'];
		
				$Story = $_POST['edit_Story'];
				
				$Category = $_POST['edit_Category'];
		
				$File_photo = $_POST['edit_File_photo'];
		
				$File_video = $_POST['edit_File_video'];
		
				$Number=$_POST['edit_form1_Number'];
		
				$sql = "UPDATE qrcode SET Username='$Username',Story='$Story',Category='$Category',File_photo='$File_phpto',File_video='$File_video' WHERE Number=$Number";
				if (mysqli_query($conn, $sql)){
					echo "New record updated successfully";
					echo "<br><a href='select_motorcar.php'>กลับสู่หน้าแรก</a>";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
			}
	 
		 //delete data
		 if(isset($_GET['delete_Number'])){
			 $Number = $_GET['delete_Number'];
			 // sql to deleta a record
			 $sql = "DELETE FROM student WHERE Number= $Number";
			 if (mysqli_query($conn, $sql)) {
				 echo"Record deleted successfully";
				 echo"<br><a href='index2.php'>Bact To All Employees Page</a>";
			 } else {
				 echo "Error daleting record: " . mysqli_error($conn);
			 }
		 }
?>
<body background=".jpg" style="width:100%;" >
<html lang="en-US">
	<head>
	<title>Quick Response (QR) Code Generator</title>
	<link rel="icon" href="img/favicon.ico" type="image/png">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	</head>
			
			<div class="input-field " style="width:600px; height:600px;">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
	
					<div class="w3-half w3-margin-bottom">
						<label>ชื่อ</label>
						<input type="Username" class="form-control" name="Username" style="width:17em;" value="<?php echo @$Username; ?>" required />
					</div>
					<br>
					<div class="w3-half w3-margin-bottom">
						<label>ประวัติความเป็นมา</label>
					
						<textarea type="Story" class="form-control" name="Story"  cols="30" rows="10" value="<?php echo @$Story; ?>" required  ></textarea>
					</div>
					<br>
					<div class="w3-half w3-margin-bottom">
						<label>หมวดหมู่</label>
						<div class="col-sm-12">
                <select name="time" class="form-control">
                    <option value="เลือก" selected="selected">- เลือก -</option>
                    <option value="สถูปจำลองดินเผา"required >สถูปจำลองดินเผา</option>
                    <option value="สถูปจำลองดินทราย"required >สถูปจำลองดินทราย</option>
                    <option value="หลังคาคลุมโบราณ"required >หลังคาคลุมโบราณ</option>
                    <option value="ของกะจุ๊กกะจื๊ก"required >ของกะจุ๊กกะจื๊ก</option>
                </select>
				<br>
					</div>
					<div class="form-group">
                        <label><i class="fa fa-file-o"></i>รูปภาพ</label>
	                    <input type="file"name="File_photo" required value="<?php
	                    echo $result['fileToUpload']?>">
                    </div>
					<br>
					<div class="form-group">
                        <label><i class="fa fa-file-o"></i>วีดีโอ</label>
	                    <input type="file"name="File_video" required value="<?php
	                    echo $result['fileToUpload']?>">
                    </div>
					<br>
					 <div class="form-group">
                    </div>
					 <div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
					</div>
				
					 <div class="form-group">
                    </div>
					
					<a href="index3.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>หน้าหลัก</a>
                    <br><br>

		</div>
		<?php
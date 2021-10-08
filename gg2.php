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
	$codeContents = 'ชื่อ:'.$Username;
	                'ประวัติความเป็นมา:'.($Story).
					'หมวดหมู่:'.($Category).
					'รูปภาพ:'.($File_photo).
                    'วีดีโอ:'.($File_video);
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
	$sql = "INSERT INTO qrcode (id,Username,Story,Category,File_photo,File_video)
	       VALUES (null,'$Username','$Story','$Category','img/$File_photo','$File_video')";
           if(mysqli_query($conn,$sql)) {
				
			} else {
             echo "Error:".$sql."<br>".mysqli_error($conn);
         }  
	 }
?>


<body background="fa1.jpg" style="width:100%;" >
<html lang="en-US">
	<head>
	<title>Quick Response (QR) Code Generator</title>
	<link rel="icon" href="img/favicon.ico" type="image/png">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	</head>
			<h3><strong> กรอกข้อมูลพิพิธภัณฑ์ </strong></h3>
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
                <select name="Category" class="form-control"  >
                    <option value="เลือก" selected="selected">- เลือก -</option>
                    <option value="สถูปจำลองดินเผา" >สถูปจำลองดินเผา</option>
                    <option value="สถูปจำลองดินทราย" >สถูปจำลองดินทราย</option>
                    <option value="หลังคาคลุมโบราณ" >หลังคาคลุมโบราณ</option>
                    <option value="ของกะจุ๊กกะจื๊ก" >ของกะจุ๊กกะจื๊ก</option>


                </select>

				<br>
					</div>
					<div class="form-group">
                        <label><i class="fa fa-file-o"></i>รูปภาพ</label>
	                    <input type="file"name="File_photo" multiple required value="<?php
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
						 <a href="qrcord-get.php">
						 <input type="submit" name="submit" class="btn btn-primary submitBtn"  href='qrcord-get.php'style="width:20em; margin:0;" />
						 </a>
					
					</div>
					</div>
                    
				
					 <div class="form-group">
                    </div>
					
					<a href="index3.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>หน้าหลัก</a>
		</div>
		<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<div class="qr-field" style=" width:450px;  height:350px;">
				<h2 style="text-align:center">QR Code พิพิธภัณฑ์ </h2>
				<Center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a><br>
			</div>
			<div class = "dllink" style="text-align:center;margin:-100px 0px 100px 0px;">
	</body>
</html>

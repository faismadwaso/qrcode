<?php
require("connection.php");
include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromUsername($qrcode_link) {
	$find = '@';
	$pos = strpos($qrcode_link, $find);
	$qrcode_link = substr($qrcode_link, 0, $pos);
	return $qrcode_link;
}

if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$qrcode_url = $_POST['qrcode_url'];
	$filename = getUsernameFromUsername($qrcode_url);
	$codeContents = 'ชื่อ:'.$qrcode_url;
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
	$sql = "INSERT INTO qrcode_link (qrcode_id,qrcode_url)
	       VALUES (null,'$qrcode_url')";
           if(mysqli_query($conn,$sql)) {
				
			} else {
             echo "Error:".$sql."<br>".mysqli_error($conn);
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
			<h3><strong> -</strong></h3>
			<div class="input-field " style="width:600px; height:600px;">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
	
					<div class="w3-half w3-margin-bottom">
						<label>ที่อยู่ url</label>
						<input type="text" class="form-control" name="qrcode_url" style="width:17em;" value="<?php echo @$qrcode_url; ?>" required />
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
					
					<a href="index3.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>ย้อนกลับ</a>
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
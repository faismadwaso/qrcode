<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content w3-indigo " style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left " style="z-index:3;width:350px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="" style="width:45%;" class="w3-round"><br><br>
       <h1>You are Member</h1>
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
        <img src="" style="width:45%;" class="w3-round"><br><br>
</center>   
  </div>
  <div class="w3-bar-block ">
    <a href ="qrcord.php"a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw w3-margin-right"></i>ลงทะเบียนสำหรับนักศึกษา</a>
    <a href ="qrcord1.php"a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ลงทะเบียนสำหรับบุคลากร</a>
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>ออกจากระบบ</a>
  </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">


  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <img heigth="650" width="1205" src="car1.jpg"><br>
</head>
    
</body>
</html>


<?php } ?>
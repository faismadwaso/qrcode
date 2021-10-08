<?php
   require("connection.php");
   //add new data form to mysql
   if(isset($_POST['Username'])){
	   $Username = $_POST['Username'];
	   $Email = $_POST['Email'];
	   $Password = $_POST['Password'];
	   $Confirmpassword = $_POST['Confirmpassword'];
	   $sql = "INSERT INTO member (UserID,Username,Email,Password,Confirmpassword)
	   VALUES (null,'$Username','$Email','$Password','$Confirmpassword')";
	   if(mysqli_query($conn,$sql)) {
	  echo"<h3><left>New record created successfully</left></h3>";
	  echo"<br><h3><left><a href='login.php'>Enter login</h3></left></a>";
	  
   } else {
	   echo "Error:".$sql."<br>".mysqli_error($conn);
   }  
}
?>
<?php
		//save edit data
		if(isset($_POST['edit_form_id'])){
        $Username = $_POST['edit_Username'];
		$Story = $_POST['edit_Story'];
		$Category = $_POST['edit_Category'];
		$File_photo = $_POST['edit_File_photo'];
		$File_video = $_POST['edit_File_video'];
		$Id = $_POST['edit_form_id'];
		$sql = "UPDATE qrcode SET 
			Username='$Username', 
			Story='$Story',
			 Category='$Category', 
			 File_photo='$File_photo', 
			 File_video='$File_video'
	  WHERE id=$id";
		if (mysqli_query($conn, $sql)){
			echo "New record updated successfully";
			echo "<br><a href='index.php'>กลับสู่หน้าแรก</a>";
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
}

	//delete data
	if(isset($_GET['delete_id'])){
		$id = $_GET['delete_id'];
		// sql to deleta a record
		$sql = "DELETE FROM qrcode WHERE Id= '$id'";
		if (mysqli_query($conn, $sql)) {
			echo"Record deleted successfully";
			echo"<br><a href='qrcord-get.php'>กลับสู่หน้าแรก</a>";
		} else {
			echo "Error daleting record: " . mysqli_error($conn);
		}
	}

	//save edit data

    if(isset($_POST['edit_form_id2'])){

        $Username =$_POST['edit_Username'];

        $Story =$_POST['edit_Story'];

        $Category =$_POST['edit_Category'];

        $File_photo =$_POST['edit_File_photo'];

		$File_video =$_POST['edit_File_video'];

        $id = $_POST['edit_form_id2'];

        
        $sql ="UPDATE qrcode SET Username='$Username', Story='$Story',
               Category ='$Category',File_photo='$File_photo',File_video='$File_video' WHERE id=$id";

        if (mysqli_query($conn,$sql)){

            echo "Record updated successfully";

            echo "<br><a href='qrcord-get.php'>Bact To All user Page</a>";

        }else{
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
	?>
?>
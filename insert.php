	<?php
	//error_reporting(0);
 // include database connection file
		require_once("db.php");
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		
		$add = $_POST['add'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$type = $_POST['type'];
		$state = $_POST['state'];
		$city = implode(',',$_POST['city']);
		
		//image upload just 3 line code
		$file_name = $_FILES['image']['name'];
		$file_tmp_name = $_FILES['image']['tmp_name'];
		$target_dir = "F:/xampp/htdocs/simple-php-crud-master/";
		move_uploaded_file($file_tmp_name,$target_dir.$file_name);
	
		
				
		// Insert user data into table
		$insert = "INSERT INTO emp(address,email,type,city,state,pass,image) VALUES('$add','$email','$type','$city','$state','$pass','$file_name')";		
		$result = mysqli_query($conn,$insert);
		
		if($result){
			// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
		}
		
	}
	?>
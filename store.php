<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
	
</head>
<style>
</style>
<body>
	<center>
		

		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => sample1
		$conn = mysqli_connect("localhost", "root", "", "sample1");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$uname = $_REQUEST['uname'];
		$password= $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO profile1 VALUES ('$fname',
			'$lname','$email','$phone','$uname','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1 class='site-header__title' data-lead-id='site-header-title'>WELCOME!</h1>"."<br>"
				."<p class='main-content__body' data-lead-id='main-content-body'>$fname $lname</p>"."<br>"."<p class='main-content__body' data-lead-id='main-content-body'>You have registered successfully!!!</p>"."<br>"
				. "<p class='main-content__body' data-lead-id='main-content-body'>Continue now by signing in</p>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		
	</center>
</body>

</html>
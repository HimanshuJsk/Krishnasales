<?php
	include 'connect.php';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobileno = $_POST['mobileno'];
	
		// Check if the email already exists in the database
		$check_email_query = "SELECT * FROM signup WHERE email='$email'";
		$check_email_result = mysqli_query($con, $check_email_query);
		if(mysqli_num_rows($check_email_result) > 0) {
			// Email already exists, display an error message
			echo "<script>alert('Email address already exists. Please use a different email.')</script>";
		} else {
			// Email is unique, proceed with insertion
			$sql = "INSERT INTO signup (name, username, email, password, mobileno)
					VALUES ('$name', '$username', '$email', '$password', '$mobileno')";
			$result = mysqli_query($con, $sql);
			if($result){
				echo "<script>alert('Sign-Up Successful')</script>";
			} else {
				echo "<script>alert('Sign-Up Failed')</script>";
			}
		}
	}
?>
<html>
<head>
	<title>Sign-up form</title>
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="img/nav/KLOGO.png">
	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		function validateform() {
			var name = document.signupform.name.value;
			var username = document.signupform.username.value;
			var email = document.signupform.email.value;
			var password = document.signupform.password.value;
			var mobileno = document.signupform.mobileno.value;
			if (name == null || name == "") {
				alert("Name can't be blank");
				return false;
			}
			else if (username == null || username == "") {
				alert("Username can't be blank");
				return false;
			}
			else if (email == null || email == "") {
				alert("E-mail can't be blank");
				return false;
			}
			else if (password.length < 6) {
				alert("Password must be at least 6 characters long.");
				return false;
			}
			else if (mobileno.length != 10) {
				alert("mobile number should be of 10 digits!");
				return false;
			}
		}
	</script>
</head>
<style>
	body {
		color: black;
		font-size: 15px;
	}
</style>

<body>
	<div class="container">

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="signupform" method="post" onsubmit="return validateform()">
			<h2><u>Sign-up form</u></h2>
			<br>
			Name:
			<input type="text" placeholder="Name" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
			<br><br>
			Username:
			<input type="text" placeholder="Username" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
			<br><br>
			E-mail:
			<input type="email" placeholder="abc@gmail.com" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
			<br><br>
			Password:
			<input type="password" placeholder="* * * * * *" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']); ?>">
			<br><br>
			Mobile No:
			<input type="tel" placeholder="00000 00000" name="mobileno" value="<?php if(isset($_POST['mobileno'])) echo htmlspecialchars($_POST['mobileno']); ?>">
			<br><br>

			<button class="btn btn-primary" type="submit" value="submit" name="submit">Sign up</button>
			<button class="btn btn-danger" type="reset" value="reset" name="reset">Reset</button><br><br>
			<p>Already a member? <a href="login.php">Login</a></p>
		</form>
		
	</div>
</body>

</html>
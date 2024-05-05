<?php
	// Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define your admin credentials
        $admin_username = "krishna";
        $admin_password = "kss";

        // Get the form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Check if the entered credentials match the admin credentials
        if ($username == $admin_username && $password == $admin_password) {
            // Redirect to the admin dashboard or perform other actions
            header("Location: admin.php");
            exit();
        } else {
            $error_message = "Invalid username or password";
        }
    }
?>
<html>
<head>
	<title>Admin Login form</title>
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="img/nav/KLOGO.png">
	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
	body {
		color: black;
		font-size: 15px;
	}

	.formerror {
		color: red;
	}
</style>

<body>
	<script>alert("login first to access all pages")</script>
	<div class="container">
		<div class="form-area">
            <?php
                // Display error message if login fails
                if (isset($error_message)) {
                    echo "<p style='color: red;'>$error_message</p>";
                }
            ?>
			<form method="post" name="loginform" onsubmit="return validateform()">
				<h2><u>Admin Login form</u></h2>
				<br>
				Username:
				<input type="text" placeholder="Username" name="username" required>
				<br>
				<br>
				Password:
				<input type="password" placeholder="* * * * * *" name="password" required>
				<br>
				<br>
				<a class="text-dark" href="#">Forget password?</a>
				<br>
				<br>
				<button class="btn btn-primary" type="submit" value="submit" name="submit">
					Login</button>
				<button class="btn btn-danger" type="reset" value="reset">Reset</button>
			</form>
		</div>
	</div>
</body>

</html>
<?php
	include 'connect.php';
	$id=$_GET['updateid'];
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mobileno=$_POST['mobileno'];

		$sql="update `signup` set id=$id,name='$name',username='$username',email='$email',password='$password',
		mobileno='$mobileno' where id=$id";
		$result=mysqli_query($con,$sql);
		if($result){
			echo"<script> alert('Data Update Successfully')</script>";
		}else{
			die(mysqli_error($con));
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
    <form name="signupform" method="post" onsubmit="return validateform()">
        <h2><u>Update User</u></h2>
        <br>
        <?php
            // Fetch existing data from the database based on the provided $id
            $query = "SELECT * FROM signup WHERE id=$id";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            // Pre-fill form fields with existing data
            $name = $row['name'];
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
            $mobileno = $row['mobileno'];
        ?>
        Name:
        <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>">
        <br><br>
        Username:
        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
        <br><br>
        E-mail:
        <input type="email" placeholder="abc@gmail.com" name="email" value="<?php echo $email; ?>">
        <br><br>
        Password:
        <input type="password" placeholder="* * * * * *" name="password" value="<?php echo $password; ?>">
        <br><br>
        Mobile No:
        <input type="tel" placeholder="00000 00000" name="mobileno" value="<?php echo $mobileno; ?>">
        <br><br>
        <button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
        <button class="btn btn-danger" type="reset" value="reset" name="reset">Reset</button>
    </form>
</div>

</body>

</html>
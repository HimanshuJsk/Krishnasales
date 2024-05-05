<?php
	include 'connect.php';
	$id=$_GET['updateid'];
	
	// Fetch data from the database based on the id
	$sql = "SELECT * FROM `contact` WHERE id=$id";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);

	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$mobileno=$_POST['mobileno'];
		$data=$_POST['data'];
		$alldata=implode(",",$data);
		$complaint=$_POST['complaint'];

		// Update the data in the database
		$sql="UPDATE `contact` SET email='$email',mobileno='$mobileno',
		checkboxdata='$alldata',complaint='$complaint' WHERE id=$id";
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
	<title>Contact Us</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<!-- Font-awesome -->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="img/nav/KLOGO.png">
	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		function validateform() {
			var email = document.contactform.email.value;
			var mobileno = document.contactform.mobileno.value;
			var complaint = document.contactform.complaint.value;

			if (email == null || email == "") {
				alert("E-mail can't be blank");
				return false;
			}
			else if (mobileno.length != 10) {
				alert("Mobile number should be of 10 digits!");
				return false;
			}
			else if (complaint == null || complaint == "") {
				alert("Complaint No can't be blank");
				return false;
			}
		}  
	</script>
</head>
<body>
	<div class="container">
		<form method="post" name="contactform" onsubmit="return validateform()">
			<h2><u>Contact us</u></h2>
			<br>
			E-mail:
			<input type="email" placeholder="E-mail" name="email" value="<?php echo $row['email']; ?>">
			<br><br>
			Mobile No:
			<input type="number" placeholder="Mobile No" name="mobileno" value="<?php echo $row['mobileno']; ?>">
			<br><br>
			<input type="checkbox" name="data[]" value="Waterfilter" <?php if(in_array("Waterfilter", explode(",", $row['checkboxdata']))) echo "checked"; ?>>Water filter<br>
			<input type="checkbox" name="data[]" value="Gasgeyser" <?php if(in_array("Gasgeyser", explode(",", $row['checkboxdata']))) echo "checked"; ?>>Gas geyser<br>
			<input type="checkbox" name="data[]" value="Gharghanti" <?php if(in_array("Gharghanti", explode(",", $row['checkboxdata']))) echo "checked"; ?>>Gharghanti<br><br>
			Enter Your Complaint:
			<textarea type="text" placeholder="Complaint" name="complaint"><?php echo $row['complaint']; ?></textarea>
			<br><br>
			<input type="checkbox"> Remember me
			<br><br>
			<button class="btn btn-primary" type="submit" name="submit" value="submit">Update</button>
		</form>
	</div><br>
</body>
</html>

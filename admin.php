<?php
	include 'connect.php';
?>
<html>
<head>
	<title>Admin Site</title>
	<!--Css-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css"
	  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<!-- Font-awesome -->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<!--Favicon-->
	  <link rel="icon" type="image/x-icon" href="img/nav/KLOGO.png">
	<!--Script-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container">
  <!--start sign-up form--> 
  <h1 style="margin-top:25px;">Sign-Up Form</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Userame</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
            <th scope="col">Mobile no</th>
            <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $sql="select * from `signup`";
            $result=mysqli_query($con,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $username=$row['username'];
                $email=$row['email'];
                $password=$row['password'];
                $mobileno=$row['mobileno'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$username.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>'.$mobileno.'</td>
                <td>
                  <button class="btn btn-primary"><a href="updatesign.php?updateid='.$id.'" class="text-light" style="text-decoration:none;">Update</a></button>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration:none;">Delete</a></button>
                </td>
                </tr>';
              }
            }
          ?>
        </tbody>
    </table>
    <!--end sign-up form-->
    <!--start contact us form--> 
    <h1 style="margin-top:25px;">Contact us Form</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile no</th>
            <th scope="col">Checkbox data</th>
            <th scope="col">Complaint</th>
            <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $sql="select * from `contact`";
            $result=mysqli_query($con,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $email=$row['email'];
                $mobileno=$row['mobileno'];
		            $alldata=$row['checkboxdata'];
                $complaint=$row['complaint'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$email.'</td>
                <td>'.$mobileno.'</td>
                <td>'.$alldata.'</td>
                <td>'.$complaint.'</td>
                <td>
                  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration:none;">Update</a></button>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration:none;">Delete</a></button>
                </td>
                </tr>';
              }
            }
          ?>
        </tbody>
    </table>
    <!--end contact us form--> 
  </div>
</body>

</html>
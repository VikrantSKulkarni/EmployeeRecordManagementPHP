<?php
   include("database.php");
   include("base.php");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body><br><br><br><br>
<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card  bg-light">
  			  <div class="card-body">
    			<h4 class="card-title text-center">Register </h4>
    			<p class="card-text">
    				<form class="form-group" action="register.php" method="post"> 
    					<label for="name">Enter Your Name :</label>
    					<input class="form-control" type="text" placeholder="Your Name " name="txtName">
    					
    					<label for="email">Enter Your Email :</label>
    					<input class="form-control" type="text" placeholder="Your Name " name="txtEmail">
    					
    					<label for="DOB">Enter Your BirthDate :</label>
    					<input class="form-control" type="date" placeholder="Your Name " name="txtDOB">
    					
    					<label class="form-label" for="gender">Gender :</label><br>
    					<input class="form-check-input" type="radio" name="gender" value="Male">Male 
    					<input class="form-check-input" type="radio" name="gender" value="Female">FeMale <br>
    					
    					<label for="password">Enter Your Password :</label>
    					<input class="form-control" type="password" placeholder="Your Password " name="txtPassword">
    					
    					<input class="my-4 btn btn-primary" type="submit" name="submit" /> 
    				</form>
                    Already Registered ? <a href="login.php">click here</a>
    			</p>
    		  </div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$Name = $_POST['txtName'];
	$Email = $_POST['txtEmail'];
	$BDate = $_POST['txtDOB'];
	$Gender = $_POST['gender'];
	$Password = $_POST['txtPassword'];
$sql = "INSERT INTO users (u_name,u_email,u_dob,gender,password)
VALUES ('$Name', '$Email', '$BDate','$Gender','$Password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

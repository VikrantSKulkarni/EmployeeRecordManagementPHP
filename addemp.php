<?php
ob_start();
session_start();
include("database.php");
include("base.php");
include("navbar.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<style>
	body{
		overflow-x:hidden;
	}
</style>

<title>Add Employee</title>
</head>
<body> <br><br>
		<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card  bg-light">
  			  <div class="card-body">
    			<h4 class="card-title text-center">Add Employee Data </h4>
    			<p class="card-text">
    				<form class="form-group" action="" method="post"> 
    					<label for="name">Enter Employee Name :</label>
    					<input class="form-control" type="text" placeholder="Employee Name" name="txtEName">
    					
    					<label for="email">Enter Employee Email :</label>
    					<input class="form-control" type="email" placeholder="Employee Email " name="txtEEmail">
    					
    					
    					<label class="form-label" for="gender">Gender :</label><br>
    					<input class="form-check-input" type="radio" name="gender" value="Male">Male 
    					<input class="form-check-input" type="radio" name="gender" value="Female">FeMale <br>
    					
    					<label for="email">Enter Employee Mobile :</label>
    					<input class="form-control" type="number" placeholder="Employee Mobile" name="txtEMobile">
    					
    					<label for="email">Enter Employee Address :</label>
    					<input class="form-control" type="text" placeholder="Employee Address" name="txtEAddress">
    					
    					<label for="password">Enter Employee Qualification :</label>
    					<input class="form-control" type="text" placeholder="Employee Qualification" name="txtEQualification">
    					
    					<button class="my-4 btn btn-primary" name="submit" type="submit" > Submit </button>
    				</form>
    			</p>
    		  </div>
			</div>
		</div>
	</div>
	
	<br><br><br>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$Name = $_POST['txtEName'];
	$Email = $_POST['txtEEmail'];
	$Gender = $_POST['gender'];
	$Mobile = $_POST['txtEMobile'];
    $address = $_POST['txtEAddress'];
   $qualification = $_POST['txtEQualification'];
$sql = "INSERT INTO employees(emp_name,emp_email,gender,mobile,address,qualification)
VALUES ('$Name', '$Email','$Gender',$Mobile,'$address','$qualification')";

if ($conn->query($sql) === TRUE) {
    header("Location:http://localhost:8080/EmployeeRecord/");
    echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
ob_end_flush();
?>

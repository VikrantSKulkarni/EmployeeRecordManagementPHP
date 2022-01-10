<?php
 include("database.php");
 include("base.php");

$eid = $_GET["emp_id"];
$sql = "SELECT emp_name,emp_email,gender,mobile,address,qualification FROM employees where e_id='$eid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo $row["emp_name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body><br><br>
<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card  bg-light">
  			  <div class="card-body">
    			<h4 class="card-title text-center">Update Employee Data </h4>
    			<p class="card-text">
    				<form class="form-group" action="" method="post"> 
                        <input type="text" name="edit_id" value="<?php echo $eid;?>">
    					<label for="name">Enter Employee Name :</label>
    					<input class="form-control" value="<?php echo $row["emp_name"]; ?>" type="text" placeholder="Employee Name" name="txtEName">
    					
    					<label for="email">Enter Employee Email :</label>
    					<input class="form-control" type="email" value="<?php echo $row["emp_email"]; ?>" placeholder="Employee Email " name="txtEEmail">
    					
    					<label class="form-label" for="gender">Gender :</label><br>
    					<input class="form-control" value="<?php echo $row["gender"]; ?>" type="text" name="gender">
    					    					
    					<label for="email">Enter Employee Mobile :</label>
    					<input class="form-control" type="number" placeholder="Employee Mobile" value="<?php echo $row["mobile"]; ?>" name="txtEMobile">
    					
    					<label for="email">Enter Employee Address :</label>
    					<input class="form-control" type="text" placeholder="Employee Address" value="<?php echo $row["address"]; ?>" name="txtEAddress">
    					
    					<label for="password">Enter Employee Qualification :</label>
    					<input class="form-control" type="text" placeholder="Employee Qualification" value="<?php echo $row["qualification"]; ?>" name="txtEQualification">
    					
    					<button class="my-4 btn btn-success" name="submit" type="submit" > Save </button>
    				</form>
    			</p>
    		  </div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
    }
}
?>
<?php
if(isset($_POST['submit'])){
	$Name = $_POST['txtEName'];
	$Email = $_POST['txtEEmail'];
	$Gender = $_POST['gender'];
	$Mobile = $_POST['txtEMobile'];
    $address = $_POST['txtEAddress'];
   $qualification = $_POST['txtEQualification'];
   $emp_id = $_POST['edit_id'];
$sql = "UPDATE employees SET emp_name='$Name',emp_email='$Email',gender='$Gender',mobile='$Mobile',address='$address',qualification='$qualification' WHERE e_id='$eid'";

if ($conn->query($sql) === TRUE) {
   header("Location:http://localhost:8080/EmployeeRecord/");
    echo "record Updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
ob_end_flush();
?>

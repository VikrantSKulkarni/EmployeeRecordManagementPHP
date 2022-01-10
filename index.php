<?php
session_start();
include("database.php");
include("base.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
  include("navbar.php");
  include("database.php");
  ?>
<div class="row justify-content-center">
  <div class="col-md-8">
    <h1>Employee Record In Our Company </h1><br>
<table class="table table-striped">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Qualification</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
<?php
$sql = "SELECT e_id,emp_name,emp_email,gender,mobile,address,qualification FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["emp_name"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   ?>
   <tr>
   <td><?php echo $row["emp_name"];?></td>
   <td><?php echo $row["emp_email"];?></td>
   <td><?php echo $row["gender"];?></td>
   <td><?php echo $row["mobile"];?></td>
   <td><?php echo $row["address"];?></td>
   <td><?php echo $row["qualification"];?></td>
   <td><a href='delete.php?emp_id=<?php echo $row["e_id"]; ?>'>Delete</a></td>
   <td><a href='edit.php?emp_id=<?php echo $row["e_id"]; ?>'>Update</a></td>
 </tr>
 <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</tr>
</table>
</div>
</div>
</body>
</html>
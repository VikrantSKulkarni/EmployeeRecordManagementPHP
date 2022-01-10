<?php
 include("database.php");
 include("base.php");

$eid = $_GET["emp_id"];
$sql = "DELETE FROM employees WHERE e_id='$eid'";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>
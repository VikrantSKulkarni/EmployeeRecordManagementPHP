
<?php
session_start();
   include("database.php");
   include("base.php");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body><br><br><br><br>
<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card  bg-light">
  			  <div class="card-body">
    			<h4 class="card-title text-center">Login </h4>
    			<p class="card-text">
    				<form class="form-group" action="" method="post"> 
    					
    					<label for="email">Enter Your Email :</label>
    					<input class="form-control" type="text" placeholder="Your Email " name="txtEmail">
    					<label for="password">Enter Your Password:</label>
    					<input class="form-control" type="password" placeholder="Your Password " name="txtPassword">
    					
    					<button class="my-4 btn btn-primary" name="submit" type="submit" >Login </button>
    				</form>
    			</p>
    		  </div>
			</div>
		</div>
	</div>

   
    
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $email=$_POST['txtEmail'];
        $upass=$_POST['txtPassword'];
        
        if($email=='admin@gmail.com' and $upass=='admin'){
            header("Location:index.php");
            $_SESSION['user']=$email;
        }else{
            echo"You Don't have permision to access this page!";
        }
    }
    
?>
<?php
/*
if(isset($_POST['submit'])){
	$Email = $_POST['txtEmail'];
	$Password = $_POST['txtPassword'];
$sql = "SELECT emp_email,password FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
	if($row==null) {
  	header("Location:login.php");
}else{
	header("Location:index.php");
}
$conn->close();
}
?>*/

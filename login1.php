<?php
session_start(); 

// if ((isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
// 	header("Location: admin.php");
// 	exit();
// }

// 	if (isset($_GET['access'])) {
// 		$alert_user = true;
// 	}

require 'includes/snippet.php';
require 'includes/db-inc.php';
//include "includes/header.php";
// Error check

// 					echo"<br>";
// 					echo mysqli_errno($conn);

if(isset($_POST['submit'])){
$username = sanitize(trim($_POST['username']));
$password = sanitize(trim($_POST['password']));

$sql_admin = "SELECT * from admin where username = '$username' and  password = '$password' ";
$query = mysqli_query($conn, $sql_admin);
// echo mysqli_error($conn);
if(mysqli_num_rows($query) > 0){
		
			while($row = mysqli_fetch_assoc($query)){
				$_SESSION['auth'] = true;
				$_SESSION['admin'] = $row['username'];		
				}
				if ($_SESSION['auth'] === true) {
			header("Location: admin.php");
			exit();
				}
}
	else{
		$sql_stud = "SELECT * from students where username='$username' and password = '$password'";
			$query = mysqli_query($conn, $sql_stud);
			$row = mysqli_fetch_assoc($query);
			if(mysqli_num_rows($query) > 0){
				$_SESSION['student-username'] = $row['username'];
				$_SESSION['student-name'] = $row['name'];
				$_SESSION['student-roll'] = $row['roll_no'];
					header("Location:studentportal.php");		
				}
				else {
					echo"<div class='alert alert-success alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true' style='background-color: white; border: rgb(1, 139, 139); color:rgb(1, 139, 139)'>&times;</button>
					<strong style='text-align: center'> Wrong Username and Password.</strong>
				</div><br>";
				}		
		}
}
if(isset($_POST['submit'])){
$u_name = sanitize(trim($_POST['username']));
$pass = sanitize(trim($_POST['password']));

$sql_librarian = "SELECT * from librarian where username = '$u_name' and  password = '$pass' ";
$query1 = mysqli_query($conn, $sql_librarian);
// echo mysqli_error($conn);
if(mysqli_num_rows($query1) > 0){
	
		while($row = mysqli_fetch_assoc($query1)){
			$_SESSION['auth'] = true;
			$_SESSION['librarian'] = $row['username'];		
			}
			if ($_SESSION['auth'] === true) {
		header("Location:index_lib.php");
		exit();
			}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login1.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<title>Library Management System</title>
</head>
<body style="background-color: rgb(1, 139, 139);">
<div class="container1" id="container">
	<div class="form-container1 log-in-container1">
	<form class="form-horizontal" role="form" method="post" action="login1.php" enctype="multipart/form-data">
			<h1 style="color:black;">Login</h1>
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button name="submit" style="background-color: rgb(1, 139, 139); border: rgb(1, 139, 139); color:white">Log In</button>
		</form>
	</div>
	<div class="overlay-container1">
		<div class="overlay">
			<div class="overlay-panel overlay-right" style="background-color: rgb(1, 139, 139);">
				<h1>Library Management System</h1>
				<p>"If you don’t like to read, you haven’t found the right book." </p>
			</div>
		</div>
	</div>
</div>
<?php if (isset($alert_user)) { ?>
<script type="text/javascript">
	swal("Oops...", "You are not allowed to view this page directly...!", "error");
</script>
<?php } ?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"> </script> 
</body>
</html>
<?php 
session_start();
// session_destroy();
// if (!(isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
// 	header("Location: admin.php?access=false");
// 	exit();
// }
// else {
// 
// }
if (isset($_SESSION['admin'])) {
     $admin = $_SESSION['admin'];
}

if (isset($_SESSION['librarian'])) {
     $librarian = $_SESSION['librarian'];
   
}

if (isset($_SESSION['student-name'])) {
    $student = $_SESSION['student-name'];
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="nav1111.css" />
<title>navbar</title>
</head>
<body>
<nav class="navbar">
<!-- LOGO -->
<div class="logo">Library Management System</div>
<!-- NAVIGATION MENU -->
<ul class="nav-links">
<!-- NAVIGATION MENUS -->
<div class="menu">
<?php if(isset($admin)) { ?>  
    <li><a href="admin.php">Home</a></li>
    <li><a href="admin_profile.php">Profile</a></li>
    <li><a href="bookstable.php">Books</a></li>
    <li><a href="librarian.php">Librarian</a></li>
    <!-- <li><a href="viewstudents_admin.php">Students</a></li> -->
    <li><a href="logout.php">Logout</a></li>
<?php } ?>
<?php if(isset($librarian)) { ?> 
    <li><a href="index_lib.php">Home</a></li>
    <li><a href="profile_lib.php">View Profile</a></li>
    <li><a href="logout.php">Logout</a></li>
<?php } ?>
<?php if(isset($student)) { ?>  
    <li><a href="studentportal.php">Home</a></li>
    <li><a href="profile.php">View Profile</a></li>
    <li><a href="borrow-student.php">Total Books</a></li>
    <li><a href="borrow-student.php">Borrowed Books</a></li>
    <li><a href="fine-student.php">Fines</a></li>
    <li><a href="logout.php">Logout</a></li>
<?php } ?>
</div>
</ul>
</nav>
</body>
</html>
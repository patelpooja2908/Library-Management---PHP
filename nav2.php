<?php 
require 'includes/db-inc.php';
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
    <li ><a href="studentportal.php">Home</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="borrow-student.php">Total Books</a></li>
    <li><a href="totalborrowed-students.php">Borrowed Books</a></li>
    <li><a href="fine-student.php">Fines</a></li>
    <li><a href="logout.php">Logout</a></li>
</div>
</ul>
</nav>
</body>
</html>
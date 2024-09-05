<?php
require 'includes/db-inc.php';
session_start();
$student_name = $_SESSION['student-username'];
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="flickity/flickity.css">
<link rel="stylesheet" href="nav1111.css" />
<script type="text/javascript" src="flickity/flickity.js"></script>
<title>Library Management Home Page</title> 
<style>

.wrapper>div {
border:2px solid Chartreuse;
float:left;
width:230px;
height:250px;
margin:0 11px;
position:relative;
}

.wrapper {
margin:0 auto;
/* width:831px; */
width:1010px;

}
</style> 
</head> 
<body translate="no">
<!-- <?php //include "nav3.php"; ?> -->
<nav class="navbar">
<!-- LOGO -->
<!-- <div class="logo">Library Management System</div> -->
<div class="logo" style="margin: auto;
  width: 60%;
  padding: 10px;
  text-align: center;">
  Library Management System
</div>
<!-- NAVIGATION MENU -->
<ul class="nav-links">
<!-- NAVIGATION MENUS -->
<div class="menu">
    <li><a href="logout.php">Logout</a></li>

</div>
</ul>
</nav>
<!-- navbar ends --> 
<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:10px">
    <h4 class="center-block"><strong>Welcome</strong><span>
    <?php echo $student_name; ?></span></h4>
</div>

<div class="wrapper"> 
<div>
    <a href="profile.php" style="text-decoration: none">
        <img src="img/profile-removebg-preview.png" alt="heyy">
    <b><center>View Profile</center></b></a>
</div> 
<div>
    <a href="borrow-student.php" style="text-decoration: none">
        <img src="img/books1-removebg-preview.png" alt="helloo">
    <b><center>Total Books</center></b></a>
</div> 
<div>
    <a href="totalborrowed-students.php" style="text-decoration: none">
        <img src="img/borrow_book-removebg-preview.png" alt="helloo">
    <b><center>Borrowed Books</center></b></a>
</div>
<div>
    <a href="fine-student.php" style="text-decoration: none">
        <img src="img/penalty-removebg-preview.png" alt="helloo">
    <b><center>Fines</center></b></a>
</div>
</div> 
</div>
</body>
</html>
<?php
//$admin = $_SESSION['admin'];
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php";
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
<title>Library Management Main Page</title> 
<style>

.wrapper>div {
border:2px solid Chartreuse;
float:left;
width:238px;
height:250px;
margin:0 11px;
position:relative;
}

.wrapper {
margin:0 auto;
/* width:831px; */
width:800px;

}
</style> 
</head> 
<body translate="no">
<nav class="navbar">
<!-- LOGO -->
<!-- <div class="logo">Library Management System</div> -->
<div class="logo" style="margin: auto;
  width: 60%;
  padding: 10px;
  text-align: center;">
  Library Management System
</div>

</nav>
<div class="wrapper">
<br>
<br> 
<br>
<br>
<br>
<br> 
<div>
    <a href="login1.php" style="text-decoration: none">
        <img src="img/profile-removebg-preview.png" alt="heyy">
    <b><center>Admin</center></b></a>
</div> 
<div>
    <a href="login1.php" style="text-decoration: none">
        <img src="img/profile-removebg-preview.png" alt="helloo">
    <b><center>Librarian</center></b></a>
</div> 
<div>
    <a href="login1.php" style="text-decoration: none">
        <img src="img/profile-removebg-preview.png" alt="helloo">
    <b><center>Student</center></b></a>
</div>
</div> 
</div>
</body>
</html>
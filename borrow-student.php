<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
//include "includes/header.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side bar</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="nav1111.css" />
</head>
<body>
<nav class="navbar">
<!-- LOGO -->
<div class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Library Management System</div>
<!-- NAVIGATION MENU -->
<ul class="nav-links">
<!-- NAVIGATION MENUS -->
<div class="menu">
	<li ><a href="studentportal.php">Home</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="borrow-student.php">Total Books</a></li>
    <li><a href="totalborrowed-students.php">Borrowed Books</a></li>
    <li><a href="fine-student.php">Fines</a></li>
    <li><a href="logout.php">Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</ul>
</nav>
<div class="container">
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:10px">
		<span class="glyphicon glyphicon-book"></span>
		<strong>Books</strong> Table
	</div>
</div>
<!-- <div>
    <h3 class="text-center" style="margin-top:10px"><strong>Books Table</strong></h3>
</div> -->
    <div class="row">
        <div class="col-md-10">
                <!-- books display -->
                <div class="container">
		<div class="panel panel-default">

<!-- <table class="table table-bordered">
	 <thead>
	 <tr>
		 <th>BookId</th>	
		<th>bookTitle</th>
		<th>author</th>
		<th>ISBN</th>
		<th>bookCopies</th>
		<th>publisherName</th>
		<th>available</th>
		<th>categories</th>
		<th>Delete</th>
	 </tr>
</thead> -->

<?php 
//all categories
if(!isset($_GET['category'])){

	$sql2 = "SELECT * from books";
	$query2 = mysqli_query($conn, $sql2); 
	$counter = 1; ?>
	<table class="table table-bordered">
	<thead>
	<tr>
	   <th>BookId</th>	
	   <th>bookTitle</th>
	   <th>author</th>
	   <th>available</th>
	   <th>categories</th>
	   <th>Borrow</th>
	</tr>
</thead>
<?php	
while ($row = mysqli_fetch_array($query2)) { ?>
	
	<tbody>
		<td><?php echo $counter++; ?></td>
		<td><?php echo $row['bookTitle']; ?></td>
		<td><?php echo $row['author']; ?></td>
		<td><?php echo $row['available']; ?></td>
		<td><?php echo $row['categories']; ?></td>
		<form method='post' action='borrow-student.php'>
		<input type='hidden' value="<?php echo $row['bookId']; ?>" name='id'>
		</form>
		<td>
			<a href="lend-student.php?bid=<?php echo $row['bookId'] ?>" id="show" class="show-in">
				<button class="btn btn-success">Borrow Now</button>
				<input type="hidden" class="book-id" value="<?php echo $row['bookId']; ?>">
				<input type="hidden" class="book-name" value="<?php echo $row['bookTitle']; ?>">
				<input type="hidden" class="purpose" value="show">
			</a>
		</td>
		
		</tbody>
	<?php  }
}
 //unique categories
//  global $conn;
if(isset($_GET['category'])){
	$category_id=$_GET['category'];
	//echo $category_id;

	// $sql_unique= "SELECT * FROM `books` WHERE categories=$category_id";
	$sql_unique= "SELECT * FROM `books` WHERE `categories`='$category_id'";
	//echo $sql_unique;
	$query_unique = mysqli_query($conn, $sql_unique); 
	$counter = 1;
	$num_of_rows=mysqli_num_rows($query_unique);
	if($num_of_rows==0){
		echo"<h2 class='text-center text-danger'>No Books available</h2>";
	}
	else{
	
	echo"<table class='table table-bordered'>";
	echo"<thead>";
	echo"<tr>";
		echo"<th>BookId</th>";	
		echo"<th>bookTitle</th>";
		echo"<th>author</th>";
		echo"<th>available</th>";
		echo"<th>categories</th>";
		echo"<th>BORROW</th>";
	echo"</tr>";
	echo"</thead>";
	while ($row_unique = mysqli_fetch_array($query_unique)) { ?>

	<tbody>
<tr>
	<td><?php echo $counter++; ?></td>
	<td><?php echo $row_unique['bookTitle'];?></td>
	<td><?php echo $row_unique['author']; ?></td>
	<td><?php echo $row_unique['available']; ?></td>
	<td><?php echo $row_unique['categories']; ?></td>
	<form method='post' action='borrow-student.php'>
		<input type='hidden' value="<?php echo $row_unique['bookId']; ?>" name='id'>
	</form>

	<td>
		<a href="lend-student.php?bid=<?php echo $row_unique['bookId'] ?>" id="show" class="show-in">
			<button class="btn btn-success">Borrow Now</button>
			<input type="hidden" class="book-id" value="<?php echo $row_unique['bookId']; ?>">
			<input type="hidden" class="book-name" value="<?php echo $row_unique['bookTitle']; ?>">
			<input type="hidden" class="purpose" value="show">
		</a>
	</td>
</tr>
</tbody>
	
<?php 	
}	
}
}
?>
		   </table> 
	  </div>
	</div>
	<div class="mod modal fade" id="popUpWindow">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Are you sure you want to delete this book?</p>
        			</div>

        			<!-- button -->
        			<div class="modal-footer ">
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-warning pull-right"  style="margin-left: 10px" class="close" data-dismiss="modal">
        					No
        				</button>&nbsp;
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-success pull-right"  class="close" data-dismiss="modal" data-toggle="modal" data-target="#info">
        					Yes
        				</button>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="modal fade" id="info">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Book deleted <span class="glyphicon glyphicon-ok"></span></p>
        			</div>

        		</div>
        	</div>
        </div>

        
        </div>
        <!-- books category display -->
        <div class="col-md-2 bg-light p-0">
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="totalbooks_Lib.php" class="nav-link text-light"><h4>Books Categories</h4></a>
            </li>
            <?php
                // Fetch the book categories from the database
                $select_category = "SELECT * FROM category";
                $result_category = mysqli_query($conn, $select_category);
                if (mysqli_num_rows($result_category) > 0) {
                    while ($row_data = mysqli_fetch_assoc($result_category)) {
                    $id=$row_data['id'];
                    $book_categories=$row_data['book_categories'];
                //     echo "<li class='nav-item'>
                //     <a href='bookstable.php?category=$id' class='nav-link text-light'>$book_categories</a>
                // </li>";
                echo "<li class='nav-item'>
                    <a href='borrow-student.php?category=$book_categories' class='nav-link text-dark'>$book_categories</a>
                    <br>
                </li>";
                    }
                }
            ?>
        </ul>
    </div>
    </div>
    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
<script>
 function Delete() {
            return confirm('Would you like to delete the book');
        }
</script>
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
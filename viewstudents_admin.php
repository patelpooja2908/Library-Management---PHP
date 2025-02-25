<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php"; 

if (isset($_POST['submit'])) {
	$id = trim($_POST['del_btn']);
	$sql = "DELETE from students where studentId = '$id' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "<script>alert('Student Deleted!')</script>";
	}
}

?>

<?php include "nav.php"; ?>
<!-- navbar ends -->

<div class="container">
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:0px">
		<span class="glyphicon glyphicon-book"></span>
		<strong>Students</strong> Table
	</div>
</div>
<div class="container col-lg-11 ">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">
		<div class="row">
			<a href="addstudent.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-plus-sign"></span> Add Student</button></a>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
			<!-- <form >
				<div class="input-group pull-right">
					<span class="input-group-addon">
					<label>Search</label> 
					</span>
					<input type="text" class="form-control" onkeyup="hey()">
				</div>
			</form> -->
			
			</div><!-- /.col-lg-6 -->

		</div>
		</div>
		<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th> 
						<th>Student Name</th>
						<th>Roll No</th>
						<th>Email</th>
						<th>Department</th>
						<th>Phone No.</th>
						
						<th>Username</th>
						<th>Password</th>
						<th>Action</th>
					</tr>    
				</thead>    
				<?php 

				$sql = "SELECT * FROM students";
				$query = mysqli_query($conn, $sql);
				$counter = 1;
				while ( $row = mysqli_fetch_assoc($query)) {        	
				?>
				<tbody> 
				<tr> 
					<td><?php echo $counter++; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['roll_no']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['dept']; ?></td>
					<td><?php echo $row['phoneNumber']; ?></td>
					
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td>
					<form action="viewstudents.php" method="post">
					<input type="hidden" value="<?php echo $row['studentId']; ?>" name="del_btn">
					<button name="submit" class="btn btn-warning">DELETE</button>
					</form> 
				</td>
				</tr> 
				
				</tbody> 
				<?php } ?>
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
					<p>Are you sure you want to delete this Member?</p>
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
					<p>Member deleted <span class="glyphicon glyphicon-ok"></span></p>
				</div>

			</div>
		</div>
	</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
<script type="text/javascript">
</script>
</body>
</html>
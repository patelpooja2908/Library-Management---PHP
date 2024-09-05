<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php"; 

if (isset($_POST['submit'])) {
	$id = trim($_POST['del_btn']);
	$sql = "DELETE from librarian where librarianId = '$id' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "<script>alert('Librarian Deleted!')</script>";
	}
}

?>

<?php include "nav.php"; ?>
<!-- navbar ends -->

<!-- info alert -->
<div class="container">
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:0px">
		<strong>Librarian Table</strong>
	</div>
</div>
<div class="container col-lg-11" style="margin-left: 60px;">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">
		<div class="row">
			<a href="addlibrarian.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px">Add Librarian</button></a>
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
						<th>LibrarianId</th> 
						<th>LibrarianName</th>
						<th>Username</th>
						<th>Password</th>
						<th>Email</th>
						<th>Action</th>
					</tr>    
				</thead>    
				<?php 

				$sql = "SELECT * FROM librarian";
				$query = mysqli_query($conn, $sql);
				$counter = 1;
				while ( $row = mysqli_fetch_assoc($query)) {        	
				?>
				<tbody> 
				<tr> 
					<td><?php echo $counter++; ?></td>
					<td><?php echo $row['libName']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td>
					<form action="librarian.php" method="post">
					<input type="hidden" value="<?php echo $row['librarianId']; ?>" name="del_btn">
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
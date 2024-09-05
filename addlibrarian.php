<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php"; 

if(isset($_POST['submit'])) {

    $name = sanitize(trim($_POST['name']));
	$username = sanitize(trim($_POST['username']));
	$password1 = sanitize(trim($_POST['password1']));
    $password2 = sanitize(trim($_POST['password2']));
    $email = sanitize(trim($_POST['email']));
    
   if ($password1 == $password2) {
      $sql = "INSERT INTO librarian (libName, username, password, email)
 VALUES ('$name', '$username','$password1','$email')";

      $query = mysqli_query($conn, $sql);
      $error = false;
      if($query){
       $error = true;
      }
      else{
        echo "<script>alert('Not Registered successful!! Try again.');
                    </script>"; 
      }
   }
   else {
    echo  "<script>alert('Password mismatched!')</script>";
   }
}
?>

<?php include "nav.php"; ?>

<div class="container">

    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top:0px">
        <div class="jumbotron login3 col-lg-10 col-md-11 col-sm-12 col-xs-12">
              <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Added Successfully!</strong>
            </div>
            <?php } ?>
        
            <p class="page-header" style="text-align: center">ADD LIBRARIAN</p>

            <div class="container">
                <form class="form-horizontal" role="form" action="addlibrarian.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="Name" class="col-sm-2 control-label">Full Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" placeholder="Enter Full Name" id="name" required>
					</div>		
				</div>
				<div class="form-group">
					<label for="Username" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" placeholder="Enter Username" id="username" required>
					</div>		
				</div>
				<div class="form-group">
					<label for="Password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password1" placeholder="Enter Password" id="password" required>
					</div>		
				</div>
				<div class="form-group">
					<label for="Password" class="col-sm-2 control-label">Confirm Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password2" placeholder="Enter Password" id="password" required>
					</div>		
				</div>
				<div class="form-group">
					<label for="Password" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required>
					</div>
				</div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info" name="submit">
                                ADD LIBRARIAN
                            </button>
                            
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
        
    </div>
</div>  



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
 	window.onload = function () {
		var input = document.getElementById('name').focus();
	}
 </script>
</body>
</html>
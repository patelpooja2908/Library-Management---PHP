<?php
// $admin = $_SESSION['admin'];
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php";
?>

<?php include "nav.php"; ?>
<!-- navbar ends -->
<!-- info alert -->
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:10px">
	    <h4 class="center-block"><strong>Welcome</strong> <span>
		 <?php echo $admin; ?></span> </h4>
	</div>

<div class="span9"><br><br><br><br><br><br>
        <center>
            <div class="card" style="width: 50%;"> 
                <img class="card-img-top" src="profile.png" alt="Card image cap">
                <div class="card-body">

                <?php
                
                $sql = "SELECT * from admin where username = '$admin'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) { ?>

                    <i>
                    <h1 class="card-title"><center><?php echo $row['adminName']; ?></center></h1>
                    <br>
                    <p><b>Admin ID: </b><?php echo $row['adminId']; ?></p>
                    <br>
                    <p><b>E-mail ID: </b><?php echo $row['email']; ?></p>
                    </b>
                    <?php } ?>
                </i>
                </div>
            </div> 
        </center>            
    </div>
    <!--/.span9-->
</div>
</div>
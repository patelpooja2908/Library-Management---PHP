<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php";

if(isset($_POST['submit1'])){

    $book_categories = sanitize(trim($_POST['book_categories']));

$sql = "INSERT INTO category(book_categories)
                 values ('$book_categories')";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script>alert('New Category has been added ');
					location.href ='bookstable.php';
					</script>";
    }
    else {
        echo "<script>alert('Category not added!');
					</script>";	
    }

}

?>
<?php include "nav.php"; ?>
<div class="container">
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " >
        <div class="jumbotron login2 col-lg-10 col-md-11 col-sm-12 col-xs-12">
            <p class="page-header" style="text-align: center">ADD CATEGORY</p>
            <div class="container">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addcat.php" method="post">
                    <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">BOOK CATEGORY</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="book_categories" placeholder="Enter category" id="password" required>
                        </div>      
                    </div>
                    <!-- <div class="form-group">
                        <label for="Password" class="col-sm-2 control-label">CATEGORY</label>
                        <div class="col-sm-10">
                          <select custom-select custom-select-lg name="select" required>
                            <option>SELECT</option>
                            <option value="Home">Home</option>
                            <option value="Cakes">Accounting</option>
                            <option value="CupCake">Python</option>
                            <option value="Macarons">Macarons</option>
                          </select>
                        </div>      
                    </div> -->
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  name="submit1" class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info">
                                ADD CATEGORY
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>   
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
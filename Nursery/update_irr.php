<!DOCTYPE html>
<html lang="en">


<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <!-- end loader -->
    <!-- header -->
	<?php
	include("header.php");
	
	?>
 <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
						<br><br><br><br>
							
						
                            <table class="table" border="2">
							  <tr>
								<th>Crop Name</th>
								<th>Category</th>
								<th>Irrigation Type</th>
								<th>Edit</th>
							  </tr>
							   <?php 
								include("../dbconn.php");
								
								
									if(isset($_POST['submit']))
										{

											
											$a=$_POST['crop_name'];
											$b=$_POST['category'];
											$c=$_POST['irr_type'];
											
											$upd="UPDATE irrigation SET crop_name='$a',category='$b',irr_type='$c' WHERE id='$_REQUEST[rid]'";
	//echo $upd;
											mysqli_query($con,$upd); 
											header ('location:view-irrigation.php');
										}
										$sel="select * from category where id='$_REQUEST[rid]'";
										$result=mysqli_query($con,$sel);
										$row=mysqli_fetch_array($result);
								?>

  
	 <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12">
							<br><br><br><br>
							<h1><b>Irrigation</b></h1>
                            <form class="main_form" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Category Name" type="text" name="category_type" value="<?php echo $row['category_type'] ?>" required>
                                    </div>
									
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <input type="submit" class="send" name="submit" value="submit">
									   <a href="view-category.php" class="btn btn-success">View All</a>
                                    </div>
                                </div>
                            </form>
							
                        </div>
                    </div>
                </div>
                <div id="map">
                </div>

            </div>
        </div>
    </div>
	
	
</body>
</html>






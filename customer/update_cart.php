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
							
                           <table border="2">
						<tr>
							<th><center>Image</center></th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price Per Unit</th>
							<th><center>Shipping Charge</center></th>
							<th><center>Total</center></th>
						</tr>
							   <?php 
								include("../dbconn.php");
								
								
									if(isset($_POST['submit']))
										{

											
											
											$c=$_POST['price'];
											$d=$_POST['soil'];
											$e=$_POST['climate'];
											
											$upd="UPDATE crops SET name='$a',category='$b',price='$c',soil='$d',climate='$e' WHERE id='$_REQUEST[rid]'";
											echo $upd;
	//echo $upd;
											mysqli_query($con,$upd); 
											header ('location:update_crop.php');
										}
										$sel="select * from crops where id='$_REQUEST[rid]'";
										$result=mysqli_query($con,$sel);
										$row=mysqli_fetch_array($result);
								?>

  

							<br><br><br><br>
							<h1><b>crops</b></h1>
							<form class="main_form" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Crop Name" type="text" name="name" value="<?php echo $row['name'] ?>" required>
                                    </div>
						
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									
										<select name='category' class='form-control'>
											<option value=''>Select One</option>
											<?php 
											$query=mysqli_query($con,"SELECT * FROM `category`");
											while($row=mysqli_fetch_array($query))
											{
											?>
											<option value="<?php echo $row['id']; ?>"><?php echo $row['category_type']; ?></option> 
											<?php
											$i++;
											}
											?>
										</select>
                                    </div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Price" type="text" name="price" value="<?php echo $row['price'] ?>" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Soil" type="text" name="soil" value="<?php echo $row['soil'] ?>" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Climate" type="text" name="climate" value="<?php echo $row['climate'] ?>" required>
                                    </div>
									
									
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <input type="submit" class="send" name="submit" value="UPDATE">
                                    <a href="view-crop.php" class="btn btn-success">View All</a>
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






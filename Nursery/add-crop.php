
<!DOCTYPE html>
<html lang="en">


<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <!-- end loader -->
    <!-- header -->
	<?php
session_start();

	include("header.php");
	
	?>
  
	 <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12">
							<br><br><br><br>
							<h1><b>Our Crops</b></h1>
                            <form class="main_form" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Crop Name" type="text" name="name" required>
                                    </div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									
										<select name='category' class='form-control'>
											<option value=''>Category</option>
											<?php
												include("../dbconn.php");
												$sel="SELECT * FROM `category` where nid='$_SESSION[nid]'";
												$res=mysqli_query($con,$sel);
													$i=1;
												while($row=mysqli_fetch_array($res))
												{														
												?>
												
												
											
											
											<option value='	<?php echo $row['id']; ?>'><?php echo $row['category_type']; ?></option>
											<?php

											}
											?>											
										</select>
                                    </div>
								
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="quantity" type="text" name="quantity" required>
                                    </div>
										
                                    
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Price" type="text" name="price" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Soil" type="text" name="soil" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Climate" type="text" name="climate" required>
                                    </div>
								
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input type="file" name="file">
                                    </div>
									
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <input type="submit" class="send" name="submit" value="submit">
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
	
	<?php 
	
	include("../dbconn.php");
	$ses=$_SESSION['nid'];
	
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$category=$_POST['category'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		$soil=$_POST['soil'];
		$climate=$_POST['climate'];
		
		if($_FILES['file']['name']){
		$target_path="images/".$_FILES['name'];
		
		move_uploaded_file($_FILES['file']['tmp_name']['file']);
		$img=$_FILES['file']['name'];
		}
		
		$ins="insert into crops(name,category,quantity,nursery_id,price,soil,climate,file) values ('$name','$category','$quantity','$ses','$price','$soil','$climate','$img')";
		
		$res=mysqli_query($con,$ins);
	
		if($res)
		{
			echo "<script> 
					alert('insert successfully');
					window.location='view-crop.php';
				  </script>";
		}
	}
	
	
	?>
	
	
	
	

    <!-- footer -->
	<?php
	
	include("footer.php");
	?>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>
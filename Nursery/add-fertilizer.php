
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
							<h1><b>Our Fertilizers</b></h1>
                            <form class="main_form" method="POST">
                                <div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <select name='crops' class='form-control'>
											<option value=''>Crops</option>
											<?php
												include("../dbconn.php");
												$sel="SELECT * FROM `crops` where nursery_id='$_SESSION[nid]'";
												$res=mysqli_query($con,$sel);
													$i=1;
												while($row=mysqli_fetch_array($res))
												{														
												?>
												
												
											
											
											<option value='	<?php echo $row['id']; ?>'><?php echo $row['name']; ?></option>
											<?php

											}
											?>											
										</select>									   </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Fertilizer Name" type="text" name="fertilizer_name" required>
                                    </div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<select name='type' class='form-control'>
											<option value=''>Select One</option>
											<option value='1'>Organic</option>
											<option value='2'> In-Oraganic</option> </select>
                                    </div>
									
									
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <input type="submit" class="send" name="submit" value="submit">
                                    <a href="view-fertilizer.php" class="btn btn-success">View All</a>
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
	
	if(isset($_POST['submit']))
	{
		$crop_name=$_POST['crops'];
		$fertilizer_name=$_POST['fertilizer_name'];
		
		$type=$_POST['type'];
		$nid=$_SESSION['nid'];

	
		$ins="insert into fertilizer(crop_name,fertilizer_name,type,nid) 
		values ('$crop_name','$fertilizer_name','$type','$nid')";
		
		$res=mysqli_query($con,$ins);
	
		if($res)
		{
			echo "<script> 
					alert('insert successfully');
					window.location='view-fertilizer.php';
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
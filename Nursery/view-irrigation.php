
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
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
						<br><br><br><br>
							<a href="add-irr.php" class="btn btn-danger float-right">ADD</a>
							
						<br><br>
							
                            <table class="table" border="1">
							  <tr>
								<th>#</th>
								<th>Crop Name</th>
								<th>Category</th>
								<th>Irrigation Type</th>
								
								<th></th>
							  </tr>
							   <?php 
								include("../dbconn.php");
								
								$sel="SELECT * FROM irrigation where nid='$_SESSION[nid]'";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
									$sel1="SELECT * FROM `crops` where id='$row[crop_name]' and nursery_id='$_SESSION[nid]'";
									//echo $sel1;
									$res1=mysqli_query($con,$sel1);
									$row1=mysqli_fetch_array($res1);
									$sel2="SELECT * FROM `category` where id='$row[category]' and nid='$_SESSION[nid]'";
									//echo $sel1;
									$res2=mysqli_query($con,$sel2);
									$row2=mysqli_fetch_array($res2);
								
							  ?>
							  
							  <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row1['name']; ?></td>
								<td><?php echo $row2['category_type']; ?></td>
								<td><?php echo $row['irr_type']; ?></td>
								
								
								
							  
                                <td><a href="del_irr.php?rid=<?php echo  $row['id'];?>" class="btn btn-danger float-right">Delete</a></td>			
								</tr>
							  
							  <?php
								$i++;
								}
							  ?>
	
						  
							</table>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	

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
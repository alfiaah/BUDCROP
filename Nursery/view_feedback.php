
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
							
							
						<br><br>
							
                            <table class="table" border="2">
							  <tr>
								<th>No</th>
								<th>Email</th>
								<th>Subject</th>
								
							  </tr>
							  <?php 
								include("../dbconn.php");
								
								$sel="SELECT * FROM `feedback`";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
							  ?>
							  
							  <tr>
								<td><?php echo $i; ?></td>
								
								<td><a href=""><?php echo $row['email']; ?></a></td>
								<td><a href=""><?php echo $row['subject']; ?></a></td>
								<!--<td><a href="add-feedback.php" class="btn btn-success btn-xl">Edit</a></td>--->
								
							
							  </tr>
							  
							  <?php
								$i++;
								}
							  ?>
							  <?php
							  
							  
							  
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



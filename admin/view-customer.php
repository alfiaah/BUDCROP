
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
						<br><br>
							
                            <table class="table" border="1" height="200" width="1500">
							  <tr>
								<th>#</th>
								<th>Customer Name</th>
								<th>Password</th>
								<th>Email</th>
								<th>Contact</th>
								<th>Place</th>
								
								<th>Address</th>
								<th>status</th>
								
							  </tr>
							  
							  <?php 
								include("../dbconn.php");
								
								$sel="SELECT * FROM `customer` where status='pending'";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
							  ?>
							  
							  <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['password']; ?></td>
								<td><?php echo $row['email_id']; ?></td>
								<td><?php echo $row['contact_no']; ?></td>
								<td><?php echo $row['place']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><a class="btn btn-success" href="approved.php?id=<?php echo $row['id']; ?> ">Approved</a><br>
									<br>	<a class="btn btn-danger" href="rejected.php?id=<?php echo $row['id']; ?>">Rejected</a>								</td>
							</tr>
							  
							  <?php
								$i++;
								}
							  ?>
							  
							</table>
							
                        </div>
                    </div>
					<div map="id">
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
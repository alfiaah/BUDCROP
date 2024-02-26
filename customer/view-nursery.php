 <?php

include("header.php");

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Search Location</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text"  placeholder="Enter Location"  required name="location" value="<?php if(isset($_GET['location'])){echo $_GET['location'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                          
 <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
							<br><br><br><br>
							
							<br><br>
                            <table class="table">
							  <tr>
								<th>#</th>
								<th>Nursery Name</th>
								<th>Address</th>
								<th>Location</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Products view</th>
							  </tr>
							  
							      <?php 
								include("../dbconn.php");

                                    if(isset($_POST['submit']))
                                    {
                                        $location = $_POST['location'];
$i=1;
                                        $query = "SELECT * FROM nursery WHERE location='$location' ";
                                        $query_run = mysqli_query($con, $query);

                                       
											while($row=mysqli_fetch_array($query_run))
                                            {
												
                                                ?>
                                               
							  <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><a href="view-crop.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" type="button">view products</a></td>
								
							  </tr>
							  
							  <?php
								$i++;
								}
							  ?>
							  <?php
							  
							  
									}
							  ?>
							  
							</table>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<?php

include("footer.php");
?>
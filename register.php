<?php
include("header.php");
include("dbconn.php");

?>

<div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Get In <strong class="black"> Touch</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form" method="POST">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="customer_name" type="text" name="username" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="password" type="password" name="password" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="email_id" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="contact number" type="text" name="contact_no" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="place" type="text" name="place">
                                    </div>
                               
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Address" type="text" name="address" required></textarea>
                                    </div>
									
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									
                                       <button class="send" name="submit" value="submit">Submit</button>
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
	</form>
	<?php
	include("dbconn.php");
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email_id=$_POST['email_id'];
		$place=$_POST['place'];
		$address=$_POST['address'];
		$contact_no=$_POST['contact_no'];
		//$user_type=$_POST['user_type'];
		$ins="insert into customer(username,password,email_id,place,address,contact_no,status) values('$username','$password','$email_id','$place','$address','$contact_no','pending')";
		
		//echo $ins;
		
		mysqli_query($con,$ins);
		
	}
	?>
</body>

</html>

 <?php

include("footer.php");
?> 

<?php
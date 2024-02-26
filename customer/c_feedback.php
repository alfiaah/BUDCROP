<?php
include("header.php");
include("../dbconn.php");

?>

<div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>FeedBack<strong class="black">Here </strong></h2>
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

                                    
									
                                     <div class="address">
                            <h3>FeedBack US</h3>
                            <p>Give Your valuable informations,updations  </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="email" required>
                          <textarea rows="4" cols="50" name="subject" form="usrform" required>
												Enter text here...</textarea>
	<br><br><br><br>
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
	
</body>

</html>

 <?php

include("footer.php");
?> 

<?php
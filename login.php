<?php
include("header.php");
include("dbconn.php");

?>

<div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Login<strong class="black">Here </strong></h2>
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

                            <form class="main_form" action="action.php" method="POST">
                                <div class="row">

                                    
									
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="email_id" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="password" type="password" name="password" required>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<select name="type"class="form-control"> <option value="#">Select Type</option>
                                   <option >admin</option>

                                  <option>customer</option>
                                  <option>nursery</option>
                                

                                       </select>
									   </div>
									
                                    
									
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									
                                       <button class="send" name="submit" value="submit">Login</button>
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
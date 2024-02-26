  
							  <?php 
								include("../dbconn.php");
								
							//$sel="SELECT * FROM crops WHERE id='($row["id"])',name='($row["name"])',category='($row["category"])',price='($row["price"])',soil='($row["soil"])',climate='($row["climate"])'";
								//$sel="SELECT * FROM crops WHERE id= '$row["id"]'";
							//	$sel="SELECT id, name, category FROM crops WHERE 'category =="fruits"'";

								//echo $sel;
								$sel="select * from crops where nursery_id='$_REQUEST[id]'";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
									$sel1="select * from category where id='$row[category]'";
								$res1=mysqli_query($con,$sel1);
								$row1=mysqli_fetch_array($res1);
							  ?>
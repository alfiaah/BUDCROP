<?php
include("../dbconn.php");

$upd="update customer set status='approved' where id='$_REQUEST[id]'";
mysqli_query($con,$upd);
header("location:view-customer.php");

?>
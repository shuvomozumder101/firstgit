<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$delcat=$_POST['del'];
			
$sql = "DELETE FROM book WHERE b_id =".$_GET['b_nm'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
					}
	else
	{
		header("location:index.php");
	}
?>
	
	
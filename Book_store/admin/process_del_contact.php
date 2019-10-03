<?php

	require('includes/config.php');			
	$query="DELETE FROM contact WHERE c_id =".$_GET['con_id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>
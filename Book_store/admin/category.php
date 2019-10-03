<?php session_start();
require('includes/config.php');
?>
<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<div id="page">
	<div id="content">
		<div class="post" style="margin-left:-20%">

			<h1 class="title"></h1>

			<div class="entry" style="min-height:40px">

				<form action='process_addcategory.php' method='POST'>

						<b style="color:white">ADD CATEGORY </b>
							<br/>
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  ADD  '>
							
							<br><br>
				</form>
				<!--<hr>
				<form action='process_addsubcategory.php' method='POST'>
							
			
						<b style="color:white">DELETE CATEGORY </b>						
							<br>
								<select name="del">
									<?php
											//$query="select * from category ";
			
											//$res=mysqli_query($conn,$query);
											
											//while($row=mysqli_fetch_assoc($res))
											{
												//echo "<option>".$row['cat_nm'];
											}
				
									?>
								</select>
						
							
							<input type='submit' value='  DELETE  '>
				</form>-->

				<form action='process_delsubcategory.php' method='POST'>
						
			</div>
			
		</div>
		
	</div>
	
	<div style="clear: both;">&nbsp;</div>
</div>
</body>
</html>

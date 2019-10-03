<?php session_start();?>
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
		<div class="post" style="margin-left:-40%">
			<h1 class="title"></h1>
			<div class="entry">
				
				<form action='process_addsubcategory.php' method='POST'>
							<h1 style="color:white">ADD SUB-CATEGORY </h1>
							<br><br>
							<u style="color:white"size='25'>PARENT CATEGORY </u>
									<br>
										<select  name="parent">
											<?php
											
												require('includes/config.php');
					
													$query="select * from category ";
					
													$res=mysqli_query($conn,$query);
													
													while($row=mysqli_fetch_assoc($res))
													{
									echo "<option value='".$row['cat_id']."'>".$row['cat_nm'];
													}
					
											?>
										</select>
									
									<br>
							<u style="color:white">SUB-CATEGORY:</u>
									<br><br>
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit' size='25'  value='  ADD  '>
									
									<br><br>	
				</form>
				<!--<hr>
				<form action='process_delcategory.php' method='POST'>
							
						
				<form action='process_delsubcategory.php' method='POST'>
						
						<b style="color:white">DELETE SUB CATEGORY </b>						
							<br>
								<select  name="subcatnm">
									<?php
									
										
			
											/**$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
												$qq = "select * from subcat where parent_id=".$row['cat_id'];
												
												$ress = mysqli_query($conn,$qq) or die("wrong delete subcat query..");
												while($row = mysqli_fetch_assoc($ress))
												{
													echo "<option value='".$row['subcat_id']."'> ---> ".$row['subcat_nm'];
												}
												
											}**/
			
									?>
								</select>
							<input type='submit' value=' DELETE '>
				</form>	-->
			</div>
			
		</div>
		
	</div>

</div>
</body>
</html>

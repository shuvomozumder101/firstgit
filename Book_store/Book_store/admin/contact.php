<?php 
session_start();
require('includes/config.php');
	$q="select * from contact";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
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
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='10' WIDTH='165%'style="margin-left:-61%">
						<tr>
								<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b>
								<TD style="color:darkgreen" WIDTH='35%'><b><u>NAME</u></b>
								<TD style="color:darkgreen" WIDTH='35%'><b><u>EMAIL</u></b>
								<TD style="color:darkgreen" WIDTH='35%'><b><u>QUERY</u></b>
								<TD style="color:darkgreen" WIDTH='35%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['con_nm'].'
										<td>'.$row['con_email'].'
										<td>'.$row['con_query'].'
                                        <td><a href="process_del_contact.php?sid='.$row['con_id'].'"><img src="images/drop.png" ></a>
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>

	<div style="clear: both;">&nbsp;</div>
</div>

</body>
</html>

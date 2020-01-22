<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
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
						<td colspan="7"><a href="addbook.php">Add New Book</a></td>
						</tr>
						<tr>

           <td WIDTH='10%' style="color:white"><b><u>SR.NO</u></b></td>
           
           <TD style="color:white" WIDTH='25%'><b><u>NAME</u></b></TD>
           
           <TD style="color:white" WIDTH='25%'><b><u>PUBLISHER</u></b></TD>
           
           <TD style="color:white" WIDTH='25%'><b><u>ISBN</u></b></TD>
           
           <TD style="color:white" WIDTH='25%'><b><u>PRICE</u></b></TD>
           
           <TD style="color:white" WIDTH='25%'><b><u>IMAGE</u></b></TD>
           
           <TD style="color:white" WIDTH='40%'><b><u>DELETE</u></b></TD>				
           							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['b_nm'].'
										<td>'.$row['b_publisher'].'
										<td>'.$row['b_isbn'].'
										<td>'.$row['b_price'].'
										<td>'. '<img src="data:image/jpeg;base64,'.base64_encode( $row['b_img'] ).'"/>';

				//echo "<td><img src='../$row[b_img]' width='50'/>";
										
										
									echo 	'<td><a href="process_del_book.php?b_nm='.$row['b_id'].'"><img src="images/drop.png" ></a>
												
									
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

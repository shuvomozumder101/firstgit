<?php session_start();

	
	$link=mysql_connect("localhost","root","")or die("Can't Connect...");
	
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	
	$totalres=mysql_query($totalq,$link) or die("Can't Execute Query...");
	$totalrow=mysql_fetch_assoc($totalres);
	
	
	$page_per_page=1;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}

?>
<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<link rel="stylesheet" type="text/css" href="style.css">
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
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
											<?php
												while($row=mysql_fetch_assoc($res))
												{
														echo '<tr>';
													
			echo '<td valign="top" width="20%" align="center">
		    <a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
		    <img src="'.$row['b_img'].'" width="100" height="150">
		    <img src="data:image/jpeg;base64,'.base64_encode( $row['b_img'] ).'"/>
					<br>'.$row['b_nm'].'</a>
													</td>';
													
														echo '</tr>';
												}
											?>
										</table>
										<?php
										?>
									</div>
									
								</div>
								
							</div>
					
							<div id="sidebar">
									<?php
										include("includes/search.inc.php");
									?>
							</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
			
</body>
</html>

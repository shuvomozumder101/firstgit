<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
									<h1 class="title">Contact us</h1>
									
									<div class="entry" >
									
										<form action="process_contact.php" method="POST">
												

											    <br>Name :<br>
									<input type='text' name='nm' size=35>
												<br><br><br>
												
												E-mail ID:<br>
									<input type='text' name='email' size=35>
												<br><br><br>
												
												Query:<br>
									<textarea cols="40" rows="10" name='query' ></textarea>
												<br><br><br>

									<input  type='submit' name='btn' value='   OK   '  >

												
										</form>
									
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

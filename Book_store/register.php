<?php session_start(); ?>

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
									<h1 class="title">Welcome to Registeration.</h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
											echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
											echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
											<form action="process_register.php" method="POST">
												<tr>
			<td><b>Full Name :</b>&nbsp;&nbsp;</td>
			<td><input type='text' size="30" maxlength="30" name='fnm'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
			<td><b>User Name :</b>&nbsp;&nbsp;</td>
			<td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
			<td><b>Password :</b>&nbsp;&nbsp;</td>
			<td><input type='password' name='pwd' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
			<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
			<td><input type='password' name='cpwd' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
			<td><b>Gender:</b>&nbsp;&nbsp;</td>
			<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
			<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
			<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
			<td><input type='text' name='mail' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
										<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
										<td><input type='text' name='contact' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city">
														
															<option>Dhaka
															<option>Chittagong
															<option>Comilla
															<option>Rangpur
															<option>Dinajpur
															<option>Barisal
															<option>Rajshahi
															<option>Khulna
															<option>Mymensingh
															<option>Sylhet
															
														
													</select>
												</tr>
												
												<tr><td>&nbsp;</tr>
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
									</div>
									
								</div>
							</div>>
						<div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
						</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
</body>
</html>

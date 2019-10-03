<?php session_start();?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<meta charset="utf-8">
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
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								
								<br>		
								
								<div class="slidershow middle" style="" >

                                 <div class="slides">
                                 <input type="radio" name="r" id="r1">
                                 <input type="radio" name="r" id="r2">
                                 <input type="radio" name="r" id="r3">
                                 <input type="radio" name="r" id="r4">
                                 <input type="radio" name="r" id="r5">
                                 
                                 <div class="slide s1">
                                   <img src="image/1.jpg" alt="">
                                 </div>
                                 <div class="slide">
                                   <img src="image/2.jpg" alt="">
                                 </div>
                                 <div class="slide">
                                   <img src="image/3.jpg" alt="">
                                 </div>
                                 <div class="slide">
                                   <img src="image/4.jpg" alt="">
                                 </div>
                                 <div class="slide">
                                   <img src="image/5.jpg" alt="">
                                 </div>
                               </div>

                               <div class="navigation">
                                 <label for="r1" class="bar"></label>
                                 <label for="r2" class="bar"></label>
                                 <label for="r3" class="bar"></label>
                                 <label for="r4" class="bar"></label>
                                 <label for="r5" class="bar"></label>
                               </div>
                             </div>
								<br><br>
								
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

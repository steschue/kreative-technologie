<?php session_start(); ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">-->
	<meta name="description" content="Die Wechselwirkung zwischen Kreativität und Technologie">
	<title>Kreative Technologie</title>
	<link rel="icon" href="../pics/kreative-technologie_logo_20px.png" type="image/x-icon" />
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/docs.css">
	<link rel="fontdef" href="../css/font.css">
</head>
<body>								
	<div id = "wrapper">
		<!--Logo-->	
		<div class="Logo">
			<a href="../index.html">
				<img title="Kreative Technologie" src="../pics/kreative-technologie_logo_100px.png" alt="Logo" width="100" height="100"/></a>
			</div>
	
			<!--Title-->
			<div class="Maintitle">
				<nobr>
					<a name="top">Die Wechselwirkung zwischen <span>Kreativit&auml;t</span> und <span>Technologie</span>
					</nobr>
				</div>
	
				<div>
					<ul id="Social">
						<li>				<!-- Facebook -->
							<a href="http://www.facebook.com/sharer.php?u=http://www.kreative-technologie.org" target="_blank">
								<img title="Facebook" src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
							</li>
							<li>
								<!-- Twitter -->
								<a href="http://twitter.com/share?url=http://www.kreative-technologie.org" target="_blank">
									<img title="Twitter" src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
								</li>
								<li>
									<!-- Google+ -->
									<a href="https://plus.google.com/share?url=http://www.kreative-technologie.org" target="_blank">
										<img title="Google+" src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>
									</li>
								</ul>
							</nobr>
						</div>
						<!--Navigationbar-->	   
						<div>
							<nav>
								<ul>
									<li class = "cat1">
										<a href="./vorwort.html">Vorwort</a>
									</li>
									<li class = "cat2">
										<a href="./aktuell.php">Aktuell</a>
										<ul>

										</ul>
									</li>
									<li class = "cat3">
										<a href="./ee-favoriten.html">ee Favoriten</a>
									</li>
									<li class = "cat4">
										<a class="Choice" href="./blog.php">Blog</a>
									</li>
									<li class = "cat5">
										<a href="./sitemap.php">Sitemap</a>
									</li>
									<li class = "cat6">
										<a href="mailto:stephan.schuerch@hotmail.com">Kontakt</a>
									</li>
									<li class = "cat7">
										<a href="./impressum.html">Impressum</a>
									</li>
								</ul>
							</nav>
						</div>

						<div id = "content">
							<!--ListLeft-->
						</nobr>
						<p class="TitleListLeft">
							<strong>Topthemen Demn&auml;chst</strong>
						</p>
		    
						<ul class="Subjects">
							<li><a href="#">Minimal Computing</a></li>
							<li><a href="#">Notizen erstellen</a></li>
							<li><a href="#">Speichertechnologie</a></li>
							<li><a href="#">Beutel vs. Zyklon</a></li>
						</ul>
		    
						<!--Contentframe-->
						<div class="MaintContFrame">
							<div class="TextFrame">
								<?php include("/var/www/blog/blog.php"); ?>
								
							</div>
						</div>
					</div>
					<!--Footer-->
					<footer>
						<p>&copy; 2015<span>All Rights Reserved</span> <span>V1.3</span></p>
					</footer>
		  
				</div><!--End of Wrapper-->
			</body>
			</html>
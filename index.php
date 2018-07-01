<?php 
$thisPage="index"; 
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">-->
	<meta name="description" content="Die Wechselwirkung zwischen Kreativität und Technologie">
	<title>Kreative Technologie</title>
	<link rel="icon" href="./pics/kreative-technologie_logo_20px.png" type="image/x-icon" />
	<link rel="stylesheet" href="./css/main.css">
	<link rel="fontdef" href="./css/font.css">
</head>
<body>								
	<div id = "wrapper">
		<!--Logo-start-->	
		<?php include './phpincludes/logo.php';?>
		<!--Logo-end-->
		<!--Title-start-->
		<?php include './phpincludes/title.php';?>
		<!--Title-end-->
		<!--Social-start-->
		<?php include './phpincludes/socialtitle.php';?>	
		<!--Social-end-->	
		<!--Navigationbar-start-->	   
		<?php 
		include("phpincludes/navi.php"); 
		?>
		<!--Navigationbar-end-->
		<div id = "content">
			<!--ListLeft-start-->
			<?php 
			include("phpincludes/listleft.php"); 
			?>
			<!--ListLeft-end-->
		    
			<!--Contentframe-->
			<div class="MaintContFrame">
				<div class="TextFrame">
				
					<h1>Hey!</h1>
					<p>Auf dieser Seite geht es um die Wechselwirkung zwischen der Kreativit&#228;t und Technologie. Ich schreibe über Technologien, welche aus meiner Sicht besonders kreativ sind.  Aber auch mit welchen Technologien sich Kreativit&#228;t in ein Endprodukt, wie zum Beispiel Bild, Ton, Video, Apparat (Gadget), umwandeln l&auml;sst. Technik mit den enthaltenen Technologien ist besonders dann kreativ, wenn es effizient arbeitet und die Interaktion Zwischen dem Benutzer und des Produktes praktisch selbsterkl&#228;rend ist.
					</p>
					<br />
					<h3>Grunds&auml;tze von Kreative-Technologie.org :</h3>
					<ul>
						<h4>
							<li>Was ist kreativ an Technologie?</li>
							<li>Formen von Technologien aus denen wieder Kreativit&auml;t ausgedr&uuml;ckt werden kann</li>
							<li>Mit welchen kreativen Technologien kann eine Idee in eine Innovation umgesetzt werden?</li>
							<li>Welche Technologien eignen sich besonders für die F&ouml;rderung der Kreativit&auml;t?</li>
							<li>Es soll erw&auml;hnt werden, wie Technik in Maschinen und Geräten funktioniert.</li>
							<li>Vergleich der Leistung zwischen Maschinen, Ger&auml;te, Hardware und Software im Hinblick auf den technologischen Entwicklungsaspekt</li>
							<li>Diskussion im Blog &uuml;ber Kreative Technologie, wo das jeweilige Thema im Fokus ist.</li></li>
							<br />
						</h4>
					</ul>
					<h3>Kreativit&auml;t kurz erkl&auml;rt</h3>
					<p>Um Kreativit&auml;t zu entwickeln ben&ouml;tigt man Inspiration. Die Inspiration kommt durch die Umwelt oder die Umgebung zustande. Die Kreativit&auml;t ist im engen Sinne auch mit der Schaffung von Neuem verkn&uuml;pft. Oft m&uuml;ssen bestehende Normen oder Grenzen gesprengt werden, damit eine kreative Idee umgesetzt werden kann, der Umsetzprozess einer Idee, welche aus der Kreativit&auml;t entstanden ist, wird Innovation genannt oder auch Endprodukt.</p>
					<br />
					<h3>Technologie kurz erkl&auml;rt</h3>
					<p>Technologie l&auml;sst sich in einem Satz erkl&auml;ren: Technologie soll immer wiederholende Prozesse automatisieren.</p>
				</div>
			</div>
		</div>
		<!--Footer-start-->
		<?php include './phpincludes/footer.php';?>
		<!--Footer-end-->
	</div><!--End of Wrapper-->
</body>
</html>
<?php
require_once __DIR__ . '/inc/php.firstload.php';
require_once __DIR__ . '/inc/php.includes.php';
$htmlUtil = new includes();
?>
<!DOCTYPE html>
<html>
<head>

	<title>ALJAXUS - web development</title>
	<?php $htmlUtil->head(); ?>

</head>
<body>
<main>
	<div id="app">
		<div id="wrapper">
			<!-- Make sure data-text equals the text you put inside the tags. -->
			<h1 class="glitch" data-text="ALJAXUS">ALJAXUS</h1>
			<div class="sub">
				<span id="whatido"></span>
				<div class="contacts">
					<div class="contacts_topleft" style="top:-1px;left:1px;width:40%;height:1px;"></div>
					<div class="contacts_lefttop" style="top:1px;left:-1px;width:1px;height:25%;"></div>
					<div class="contacts_topright" style="top:-1px;right:1px;width:40%;height:1px;"></div>
					<div class="contacts_righttop" style="top:1px;right:-1px;width:1px;height:25%;"></div>

						<a id="contacts-email" href="mailto:aljaxus.dev@gmail.com" class="button" target="_blank" style="background-color:#D64541;color:black;"><i class="fas fa-envelope fa-2x"></i></a>
						<a id="contacts-discord" href="https://discord.aljaxus.eu" class="button" target="_blank" style="background-color:#3A539B;color:black;"><i class="fab fa-discord fa-2x"></i></a>

					<div class="contacts_bottomleft" style="bottom:-1px;left:1px;width:40%;height:1px;"></div>
					<div class="contacts_leftbottom" style="bottom:1px;left:-1px;width:1px;height:25%;"></div>
					<div class="contacts_bottomright" style="bottom:-1px;right:1px;width:40%;height:1px;"></div>
					<div class="contacts_rightbottom" style="bottom:1px;right:-1px;width:1px;height:25%;"></div>
				</div>
				<div class="mywork">
					<div class="mywork_topleft" style="top:-1px;left:1px;width:40%;height:1px;"></div>
					<div class="mywork_lefttop" style="top:1px;left:-1px;width:1px;height:25%;"></div>
					<div class="mywork_topright" style="top:-1px;right:1px;width:40%;height:1px;"></div>
					<div class="mywork_righttop" style="top:1px;right:-1px;width:1px;height:25%;"></div>

						<a id="mywork-logosmartinaozbic" href="https://logos-martinaozbic.eu" title="logos-martinaozbic.eu - logopedic clinic" class="button" target="_blank" style="background-color:#F7CA18;color:black;"><i class="fas fa-user-md fa-2x"></i></a>
						<a id="mywork-odvetnikitalija" href="https://odvetnik-italija.eu" title="odvetnik-italija.eu - lawyer office" class="button" target="_blank" style="background-color:#4183d7f2;color:#DADFE1;"><i class="fas fa-gavel fa-2x"></i></a>
						<a id="mywork-sharealjaxus" href="https://share.aljaxus.eu" title="share.aljaxus.eu - open sharing cloud" class="button" target="_blank" style="background-color:#DADFE1;color:#22313F;"><i class="fas fa-share-alt fa-2x"></i></a>
						<a id="mywork-top-pub" href="https://top-pub.eu" title="top-pub.eu - unfinished project" class="button" target="_blank" style="background-color:#26A65B;color:#DADFE1;"><i class="fas fa-map fa-2x"></i></a>
						<a id="mywork-tnmc" href="https://tnmc.link" title="tnmc.link - url shortner" class="button" target="_blank" style="background-color:#2b3e50;color:#DADFE1;"><i class="fas fa-link fa-2x"></i></a>
						<a id="mywork-odvetnikitalija" href="https://avvocati-slovenia.eu" title="avvocati-slovenia.eu - lawyer office" class="button" target="_blank" style="background-color:#4183d7f2;color:#DADFE1;"><i class="fas fa-gavel fa-2x"></i></a>
						<a id="mywork-tnmc" href="https://skinsrestorer.net" title="skinsrestorer - a minecraft plugin" class="button" target="_blank" style="background-color:#26a65bf2;color:#DADFE1;"><i class="fas fa-plug fa-2x"></i></a>
						<!-- <a id="mywork-radio-nexus" href="https://radio-nexus.eu" title="radio-nexus.eu - web-based radio" class="button" target="_blank" style="background-color:#F9690E;color:#22313F;"><i class="fas fa-broadcast-tower fa-2x"></i></a> -->

					<div class="mywork_bottomleft" style="bottom:-1px;left:1px;width:40%;height:1px;"></div>
					<div class="mywork_leftbottom" style="bottom:1px;left:-1px;width:1px;height:25%;"></div>
					<div class="mywork_bottomright" style="bottom:-1px;right:1px;width:40%;height:1px;"></div>
					<div class="mywork_rightbottom" style="bottom:1px;right:-1px;width:1px;height:25%;"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="snackbar"></div>
</main>
</body>
<?php $htmlUtil->foot(); ?>
</html>

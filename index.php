<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' ||
   $_SERVER['HTTPS'] == 1) ||
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}

//SYSTEM SETTINGS
date_default_timezone_set("Europe/Ljubljana");
ini_set('default_charset', 'utf-8');
ini_set('upload_max_filesize', '2M');
//SET GLOBAL HEADERS
Header("Cache-Control: max-age=259200");
header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html>
<head>

	<title>ALJAXUS - web development</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" href="/static/img/logo.png">
	<link rel="icon" href="/static/img/logo.png">

	<!-- META FOR SHARING -->
	<meta property="og:site_name" content="dev.aljaxus.eu">
	<meta property="og:title" content="dev.aljaxus.eu - Web development - Freelance">
	<!-- <meta property="og:description" content="description"> -->
	<meta property="og:image" content="https://dev.aljaxus.eu/static/img/logo.png">
	<meta property="og:url" content="https://dev.aljaxus.eu">
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:locale:alternate" content="sl_SI" />

	<!-- MAIN LIBRARIES -->
	<script type="text/javascript" src="https://static.aljaxus.eu/lib/jquery/jquery-3.3.1/jquery.min.js"></script>
	<link href="https://static.aljaxus.eu/lib/normalizecss/normalize-8.0.0.css" rel="stylesheet">

	<!-- FONT LIBRARIES -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Tillana" rel="stylesheet">

	<!-- PLUGINS -->
	<script defer src="https://static.aljaxus.eu/lib/fontawesome/v5.0.13/all.js"></script>
	<script src="https://static.aljaxus.eu/lib/js-cookie/js-cookie-v2.2.0.js"></script>
	<?php
		echo '<script>';
		foreach (glob(__DIR__ . '/inc/*.js') as $filename){echo '{';include_once $filename;echo '}';}
		echo '</script>';
		echo '<style>';
		foreach (glob(__DIR__ . '/inc/*.css') as $filename){include_once $filename;}
		echo '</style>';
	?>

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
						<a id="contacts-discord" href="https://github.com/aljaxus" class="button" target="_blank" style="background-color:#2f2f2f;color:#FFF;"><i class="fab fa-github fa-2x"></i></a>
						<a id="contacts-discord" href="https://linkedin.com/in/aljaz-starc-73795b16a/" class="button" target="_blank" style="background-color:#283e4a;color:#FFF;"><i class="fab fa-linkedin fa-2x"></i></a>

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
						<a id="mywork-tnmc" href="https://tnmc.link" title="tnmc.link - url shortner" class="button" target="_blank" style="background-color:#2b3e50;color:#DADFE1;"><i class="fas fa-link fa-2x"></i></a>
						<a id="mywork-odvetnikitalija" href="https://avvocati-slovenia.eu" title="avvocati-slovenia.eu - lawyer office" class="button" target="_blank" style="background-color:#4183d7f2;color:#DADFE1;"><i class="fas fa-gavel fa-2x"></i></a>
						<a id="mywork-tnmc" href="https://skinsrestorer.net" title="skinsrestorer - a minecraft plugin" class="button" target="_blank" style="background-color:#26a65bf2;color:#DADFE1;"><i class="fas fa-plug fa-2x"></i></a>
						<a id="mywork-radio-nexus" href="https://radio-nexus.eu" title="radio-nexus.eu - web-based radio" class="button" target="_blank" style="background-color:#F9690E;color:#DADFE1;"><i class="fas fa-broadcast-tower fa-2x"></i></a>

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
<?php foreach(glob(__DIR__ . '/html.modal-*.php') as $filename){include_once $filename;} ?>
</html>

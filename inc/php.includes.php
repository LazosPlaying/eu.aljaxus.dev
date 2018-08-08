<?php

class includes{
	public function head(){
		echo '

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
		<script type="text/javascript" src="/static/libs/jquery/jquery-3.3.1.min.js"></script>
		<link href="/static/libs/normalizecss/normalize-8.0.0.css" rel="stylesheet">

		<!-- FONT LIBRARIES -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Tillana" rel="stylesheet">

		<!-- PLUGINS -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
		<script src="/static/libs/js-cookie/js-cookie-v2.2.0.js"></script>
		';

		echo '<script>';
		foreach (glob(__DIR__ . '/*.js') as $filename){echo '{';include_once $filename;echo '}';}
		echo '</script>';
		echo '<style>';
		foreach (glob(__DIR__ . '/*.css') as $filename){include_once $filename;}
		echo '</style>';
	}
	public function foot(){
		foreach (glob(__DIR__ . '/html.modal-*.php') as $filename){include_once $filename;}
	}
}

?>

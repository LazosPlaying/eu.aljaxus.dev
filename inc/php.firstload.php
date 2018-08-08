<?php

$nowdate = date("Y-m-d");
$nowtime = date("h:i:sa");
$nowdatetime = date("Y-m-d h:i:sa");

//SYSTEM SETTINGS
date_default_timezone_set("Europe/Ljubljana");
ini_set('default_charset', 'utf-8');
ini_set('upload_max_filesize', '2M');
//SET GLOBAL HEADERS
Header("Cache-Control: max-age=259200");
header('Content-Type: text/html; charset=utf-8');

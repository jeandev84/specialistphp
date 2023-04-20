<?php
$now     = time();
/*
$page    = $_SERVER["REQUEST_URI"];
$page    = $_SERVER["QUERY_STRING"];
*/
$page    = $_GET["id"] ?? "index";
$referer = $_SERVER["HTTP_REFERER"];
$referer = pathinfo($referer, PATHINFO_BASENAME);

$path = "$now|$page|$referer\n";
file_put_contents("log/". PATH_LOG, $path, FILE_APPEND);



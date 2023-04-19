<?php
$now     = time();
$page    = $_SERVER["REQUEST_URI"];
$referer = $_SERVER["HTTP_REFERER"];

$path = "$now|$page|$referer\n";
file_put_contents("log/". PATH_LOG, $path, FILE_APPEND);



<?php
// http://localhost:8000/demo/headers/content-type/rtf.php
header("Content-type: application/rtf");
header("Content-disposition: attachment; filename=\"mydoc.rtf\"");

$file_content = <<<EOF
{\\rtf1\\ansi\\ansicpg1251\\uc1\\
deff0\\stshfdbch0\\stshfloch0\\stshfhich0\\stshfbi0\\deflang1049\\deflangfe1049{\\fonttbl{\\f0\\
froman\\fcharset204\\fprq2{\\*\\pano
se 02020603050405020304}Times
New
Roman;}{\\f38\\froman\\fcharset0\fprq2 Times New Roman CE;}
{\\f39\\froman\\fcharset161\\fprq2 Times New Roman
Greek;}{\\f40\\froman\\fcharset162\\fprq2 Times New Roman (Hebrew);}
{\\f42\\froman\\fcharset178\\fprq2 Times New Roman
(Arabic);}{\\f43\\froman\\fcharset186\\fprq2 Times New Roman
EOF;

if (isset($_COOKIE["userName"])) {
    $user_name = strip_tags($_COOKIE["userName"]);

    if (! $user_name) {
        $user_name = "Незнакомец";
    }

    $user_name .= " Ты работаешь с IP ". $_SERVER["REMOTE_ADDR"];

    $file_content = str_replace("USER", $user_name, $file_content);
}

echo $file_content;



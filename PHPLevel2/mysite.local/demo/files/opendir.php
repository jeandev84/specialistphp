<?php

/*
$dir = opendir(".");
while ($name = readdir($dir)) {
    if (is_dir($name)) {
        echo "[" . $name . "]\n";
    } else {
        echo $name ."\n";
    }
}
closedir($dir);

[..]
data.html
opendir.php
fopen.php
data.txt
upload.php
[.]
*/

print_r(scandir("."));

/*
Array
(
    [0] => .
    [1] => ..
    [2] => data.html
    [3] => data.txt
    [4] => fopen.php
    [5] => opendir.php
    [6] => upload.php
)
*/

print_r(scandir(".", 1));

/*
Array
(
    [0] => upload.php
    [1] => opendir.php
    [2] => fopen.php
    [3] => data.txt
    [4] => data.html
    [5] => ..
    [6] => .
)
*/


print_r(glob("*.txt"));

/*
Array
(
    [0] => data.txt
)
*/
<?php

$visitCounter = 0;

if (isset($_COOKIE["visitCounter"])) {
    $visitCounter = $_COOKIE["visitCounter"];
}

$visitCounter++;

$lastVisit = "";
if (isset($_COOKIE["lastVisit"])) {

    /* $lastVisit = date("d-m-Y H:i:s", $_COOKIE["lastVisit"]); */
    $lastVisit = date("d-m-Y", $_COOKIE["lastVisit"]);

    // что-бы куки устанавливались только раз в день:
    /*
    if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
        $lastVisit = date("d-m-Y", $_COOKIE["lastVisit"]);
    }
    */
}

// 0x7FFFFFFF : 2038г
setcookie("visitCounter", $visitCounter, time()+0x7FFFFFFF);
setcookie("lastVisit", time(), 0x7FFFFFFF);
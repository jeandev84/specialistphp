<?php

switch($page) {
    case 'contact':
        include 'pages/contact.inc.php';
        break;
    case 'about':
        include 'pages/about.inc.php';
        break;
    case 'infos':
        include 'pages/infos.inc.php';
        break;
    case 'online-test':
        include 'pages/online-test.inc.php';
        break;
    case 'guest-book':
        include 'pages/guest-book.inc.php';
        break;
    case 'eshop':
        include 'pages/eshop.inc.php';
        break;
    default: include 'pages/index.inc.php';
}

?>


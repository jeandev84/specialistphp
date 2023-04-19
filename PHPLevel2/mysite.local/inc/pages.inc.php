<?php

switch($id) {
    case 'contact':
        include PAGE_PATH . '/contact.inc.php';
        break;
    case 'about':
        include PAGE_PATH . '/about.inc.php';
        break;
    case 'info':
        include PAGE_PATH . '/info.inc.php';
        break;
    case 'online-test':
        include PAGE_PATH . '/online-test.inc.php';
        break;
    case 'guestbook':
        include PAGE_PATH . '/guestbook.inc.php';
        break;
    case 'eshop':
        include PAGE_PATH . '/eshop.inc.php';
        break;
    case 'log':
        include PAGE_PATH . '/view-log.inc.php';
        break;
    default:
        include PAGE_PATH . '/index.inc.php';
}

?>


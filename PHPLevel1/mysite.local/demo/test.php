BEFORE
<?php

/*
echo time();
$dt = mktime(0, 0, 0, 13, 1, 2015);
print_r(getdate($dt));
*/

/*
echo date("d-m-Y");
$timestamp = 1234567890;
echo date("d-m-Y", $timestamp);
*/

// echo 1 + print 2; = 22

// error_reporting(0);
include "test.inc.php";
require "test.inc.php";

?>
AFTER

<?php

require "test.inc.php";

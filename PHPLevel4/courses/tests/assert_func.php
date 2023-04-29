<?php

/*
Function assert
*/

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
// assert_options(ASSERT_QUIET_EVAL, 1); Removed from php.8



function my_assert_handler($file, $line, $code) {
     echo "Assertion Failed:<br>
           File '$file'<br/>
           Line '$line'<br>
           Code '$code'<hr>";
}

assert_options(ASSERT_CALLBACK, 'mys_assert_handler');

assert('mysql_query("")');

$arrays = [1, 2, 3];
assert(false, empty($arrays));
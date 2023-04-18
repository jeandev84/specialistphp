<?php

echo time();
$dt = mktime(0, 0, 0, 13, 1, 2015);
print_r(getdate($dt));
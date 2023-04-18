<?php

// Константы и псевдоконстанты

# Псевдоконстанты
/*
__LINE__
__FILE__
__FUNCTION__
__DIR__
get_defined_constants(true)
E_ALL
M_PI
PHP_VERSION
PHP_OS
....
*/


echo __LINE__;
echo __FILE__;
echo __FUNCTION__;
echo __DIR__;
echo E_ALL;
echo M_PI;
echo PHP_VERSION;
echo PHP_OS;
print_r(get_defined_constants(true));
<?php

ob_start();
shell_exec('php -S localhost:8888');
$output = ob_get_clean();

// echo $output;
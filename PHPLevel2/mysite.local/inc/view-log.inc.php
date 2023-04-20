<?php

if (is_file("log/". PATH_LOG)):
    $fileAsArray = file("log/". PATH_LOG);
    echo "<ol>";
    foreach ($fileAsArray as $line):
        list($now, $page, $referer) = explode("|", $line);
        $now = date("d-m-Y H:i:s", $now);
        echo "<li>";
        echo "$now - $referer -> $page";
        echo "</li>";
    endforeach;
    echo "</ol>";
endif;
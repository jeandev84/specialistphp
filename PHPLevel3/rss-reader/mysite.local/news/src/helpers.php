<?php

/**
 * Functions
 */
function dump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}


function dd($data) {
    dump($data);
    die;
}


function ptr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

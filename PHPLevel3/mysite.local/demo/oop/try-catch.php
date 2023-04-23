<?php


function test($var = false){
    try {
        echo "Start\n";
        if(!$var)
            throw new Exception('$var is false!');
        echo "Continue\n";
    }catch(Exception $e){
        echo "Exception: " . $e->getMessage() . "\n";
        echo "in file: " . $e->getFile() . "\n";
        echo "on line: " . $e->getLine() . "\n";
    }
    echo "The end\n";
}

test(1);
test();



function test1($var = false){
    try {
        echo "TRY\n";
        if(!$var)
            throw new Exception("Error");
        return 1;
    }catch(Exception $e){
        echo "CATCH\n";
        return 2;
    }finally{
        echo "FINALLY\n";
        return 3; // Можно закомментировать эту строку
    }
}


echo test1(1);
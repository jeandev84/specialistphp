<?php


/*
function nums(){

    echo "START <br>";
    for ($i=0; $i < 5; ++$i) {
        yield $i;;
    }
    echo "FINISH <br>";
}


foreach (nums() as $v) {
     echo "VALUE: $v <br>";
}
*/

/*
function nums(){

    echo "START <br>";
    for ($i=0; $i < 5; ++$i) {
        yield $i;
        echo "VALUE: $i<br>";
    }
    echo "FINISH <br>";
}

foreach (nums() as $v);
*/


function gen()
{
    yield 'a';
    yield 'b';
    yield 'name' => 'John';
    yield 'd';
    yield 10 => 'Hello';
    yield 'e';
}



foreach(gen() as $key => $value) {
    echo "$key : $value</br>";
}


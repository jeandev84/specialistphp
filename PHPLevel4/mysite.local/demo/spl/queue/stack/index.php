<?php


/** SplStack */

function isPalindrom($word) {

    $word = strtolower(str_replace(" ", "", $word));

    $stack = new SplStack();
    $count = strlen($word);

    for ($i = 0; $i < $count; ++$i) {
        $stack->push($word[$i]); // добавляем в стейке
    }

    $reverseWord = '';
    while ($stack->count() > 0) {
        $reverseWord .= $stack->pop(); // извлекаем из стейка
    }

    return $word === $reverseWord;
}


function isPalindromMessage($word) {

    if (isPalindrom($word)) {
        echo "<b>$word</b> is a palidrom";
    } else {
        echo "<b>$word</b> is not a palidrom";
    }
    echo "<hr>";
}

isPalindromMessage('hello');
isPalindromMessage('abcdcba');

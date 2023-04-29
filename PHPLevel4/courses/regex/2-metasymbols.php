<?php

// [..] : Класс искомых символов
/*
[0-9]+ : находим в строке любые строки от 0 до 9, минимум один цифра должно быть или много
*/
preg_match('/[0-9]+', 'PHP is released in 2005', $matches);
echo $matches[0]; // 2005


/*
[^0-9]+ : исключить все в строке любые строки от 0 до 9, минимум один цифра должно быть или много
[^0-9]+ : все что угодно кроме 0 до 9.
*/
preg_match('/[^0-9]+', 'PHP is released in 2005', $matches);
echo $matches[0]; // PHP is released in


// (...) : Группировка элементов и получить отдельно
/*
([12][0-9]) - первая цифра должна быть 1 либо 2 потом вторая цифра от 0 до 9
([0-9]{2})  - должно быть ровно 2 цифры начиная от 0 до 9
*/
// ([2][0])([05])
// ([12][0-9]) ==> 20
// ([0-9]{2})  ==> 05
// 2005 - то что совпало
// первое которое, совпало из 2005 отдельно [1] => 20
// второе, которое совпало из 2005 отдельно [2] => 05
preg_match('/([12][0-9])([0-9]{2})', 'PHP in 2005', $matches);
print_r($matches[0]); // 2005, [1] => 20, [2] => 05

$phoneNumber = '+7-900-507-00-55';
preg_match('^+7-([0-9]{3})-([0-9]{3})-([0-9]{2})-([0-9]){2}$', $phoneNumber, $matches);
print_r($matches); // +7-900-507-00-55



$subject  = '00:04:23:7c:5d:01';
$pattern  = '/^([0-9a-f][0-9a-f]:){5}[0-9-a-f][0-9a-f]$/';
preg_match($pattern, $subject, $matches);
echo $matches[0]; // 00:04:23:7c:5d:01

$pattern  = '/^([0-9a-f]{2}:){5}[0-9-a-f]{2}$$/';
preg_match($pattern, $subject, $matches);
echo $matches[0]; // [1] => 5d


$subject = 'JohnSmith <jsmith@site.com>';
// (JohnSmith) (jsmith@site.com) (site.)
$pattern = '/([^<]+)<([a-zA-Z0-9_-]+@([a-zA-Z0-9_-]+\\.)+[a-zA-Z0-9_-]+)>/';
preg_match($pattern, $subject, $matches);
echo $matches[0];
// JohnSmith <jsmith@site.com>,
// [1] => John Smith,
// [2] => jsmith@site.com
// [3] => site.


// лучший всегда использовать одинарную кавычку, чтобы экранировать строки
/*
\?\+\*\[\]\{\}
===============================
$subject = '4**';
$pattern = '/^4\*\*$/'
$pattern = "/^4\\*\\*$/"
*/


/*
\\
===============================
$subject = "PHP\5";
$pattern = '/^PHP\\\5$/';
$pattern = "/^PHP\\\\5$/";
*/


/*
\t\n\f\r
================================
ASCII9, 10, 12, 13
*/

/*
Сокращение
\xhh => hex
\ddd => octal
\d   => [0-9]
\D   => [^0-9]
\s   => [\t\n\f\r ] (и пробел в том числе)
\S   => [^\t\n\f\r]
\w   => любая буква, цифра, символ подчеркивания
\W   => Противоположность \w
\b   => Позиция между соседними символами \w и \W
        $string = "###Testing123##";
        preg_match('/\b.+\b/', $string, $matches);
        $matches[0] => Testing123
\B   => Противоположность \b
        $pattern = '/\w+\s+\w+/' из 'John Smith';
*/

/*
Ленивые квантификаторы
<a href="http://php.net/">PHP</a> has an
<a href="http://pnp.net/manual">good</a> manual
$pattern = '/<a.*>(.*)</a>/';
$matches[1] => good

"*" и "+" жадные квантификаторы
"?"   - таблетка от жадности

$pattern = '/<a.*?>(.*?)</a>/';
$matches[1] => PHP
*/


/*
i: регистр не зависимый [маленький или большая буква]
/[a-z]/i = '/[a-zA-Z]/


m: учитывает начало строки (^) + перенос строки (\n)
Многострочный поиск
"ABC\nDEF\nGHI";
'/^DEF/' соответствует $matches
'/^DEF/m' соответствует $matches[0] => DEF

S: это учитывает (.) + перенос строки (\n)
Однострочный поиск. "." = . (+) перевод строки
"ABC\nDEF\nGHI";
'/BC.DE/' соответствует $matches
'/BC.DE/S' соответствует $matches[0] => BC\nDE

x:
Пропуск пробелов и комментариев (#) в тексте шаблона
"ABC\nDEF\nGHI"
'/A B C/'  - $matches
'/A B C/x' - $matches[0]  => ABC

D:
Что и $, если строка не заканчивается\n
"ABC\n"
'/BC$/' - $matches[0] => BC
'/BC$/D'

e:
Только для preg_replace()
*/


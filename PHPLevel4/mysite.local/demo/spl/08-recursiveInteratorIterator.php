<?php

// МНОГОУРОВНЫЙ МЕНЮ
$items = [
    'Homepage',
    'Register',
    'About' => [
        'The Team',
        'Our Story'
    ],
    'Contact' => [
        'Address',
        'Support' => [
            'One',
            'Two'
        ]
    ]
];


class MenuItem extends RecursiveIteratorIterator
{
    public function beginChildren()
    {
         // show "ul" if has children
         echo "<ul>\n";
    }


     public function endChildren()
     {
         echo "</ul></li>\n";
     }
}

$menu = new MenuItem(new RecursiveArrayIterator($items), RecursiveIteratorIterator::SELF_FIRST);

echo "<ul>\n";

foreach ($menu as $k => $v) {
    if ($menu->callHasChildren()) { // hasChildren
        echo "<li>{$k}\n";
        continue;
    }
    echo "<li>{$v}</li>";
}

echo "</ul>\n";
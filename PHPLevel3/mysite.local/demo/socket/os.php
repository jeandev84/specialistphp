<?php

// WRAPPER PROTOCOL
// Соединение
fopen("test.txt", 'r');
fopen("file://test.txt", 'r');
fopen("http://localhost:8000", 'r');
fopen("ftp://localhost:8000", 'r');
fopen("php://input", 'r');

// fopen("ws://input", 'r');
// fopen("abc://input", "r");
// fopen("mysql://input", "r");
// file_get_contents("http://...", 'r');




<?php
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, "localhost", 50000);
socket_write($socket, "Oi sou PHP ");

// ler uma linha do soquete
$line = socket_read($socket, 1024, PHP_NORMAL_READ);
echo $line;
socket_close($socket);

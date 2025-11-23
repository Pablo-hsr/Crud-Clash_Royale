<?php
//Caso tenha criado num linux é necessario colocar a senha e o user que criou no PHPMYADMIN
    define('HOST', 'localhost');
    define('USER', '');
    define('PASS', '');
    define('BASE', 'clashroyale');

    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>
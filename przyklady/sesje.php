<?php 
session_start();

$_SESSION["color"] = "blue";

echo $_SESSION["color"];

//czyszczenie ale nie zakonczyc
//session_unset();

//zniszczenie sesji
//session_destroy();

//szyfrowanie hasla
$password = sha1("haslo");


?>
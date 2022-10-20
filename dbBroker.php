<?php
// $host = "localhost";
// $db = "kolokvijumi";
// $user = "root";
// $pass = "";


// $conn = new mysqli($host, $user, $pass, $db);

// if ($conn->connect_errno) {
//     exit("Neuspesna konekcija: $conn->connect_error err kod $conn->connect_errno");
// }

$baza = array(
    array(
        "id" => 1,
        "username" => "admin",
        "password" => "admin"
    )
);

$prijave = array(
    array(
        "predmet" => "Mata",
        "katedra" => "mata",
        "sala" => "B009",
        "datum" => "oktobar"
    ),
    array(
        "predmet" => "EPOS",
        "katedra" => "Elab",
        "sala" => "B103",
        "datum" => "oktobar"
    ),

);

<?php

// Befehl zum Ausführen: php -S localhost:8000
// Link für den Browser: localhost:8000

if ($_SERVER['REQUEST_URI'] == "/") {
    echo file_get_contents("index.php");
} elseif ($_SERVER['REQUEST_URI'] == "/submit") {
    $vorname = $_POST["vorname"];
    echo $vorname;
}


elseif ($_SERVER['REQUEST_URI'] == "/aufgabe2")  {
    echo file_get_contents("Aufgabe2.php");
    // Aufgabe 2:

    // Gib den Vor- und Nach-Namen aus
    // Z.B.
    // Vorname: Max
    // Nachname: Muster

    // Link für Aufgabe 2: localhost:8000/aufgabe2

} elseif ($_SERVER['REQUEST_URI'] == "/SubmitAufgabe2")  {
    // echo Daten
}



elseif ($_SERVER['REQUEST_URI'] == "/aufgabe3")  {
    echo file_get_contents("Aufgabe3.php");
    // Aufgabe 3:

    // Erweitere das Formular mit einem Feld Land und gib dies wie in Aufgabe 2 aus

     // Link für Aufgabe 3: localhost:8000/aufgabe3

} elseif ($_SERVER['REQUEST_URI'] == "/SubmitAufgabe3")  {
    // echo Daten
}



else {
    echo "else";
}
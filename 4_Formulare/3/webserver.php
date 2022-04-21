<?php

// Befehl zum Ausführen: php -S localhost:8000
// Link für den Browser: localhost:8000/aufgabe6

if ($_SERVER['REQUEST_URI'] == "/aufgabe6")  {
    echo file_get_contents("Aufgabe6.php");
    // Aufgabe 6

    // Mache dasselbe wie du zuvor nur in der Konsole gemacht hast
    // Die rede ist Schere/Stein/Papier

    // Link für Aufgabe 6: localhost:8000/aufgabe6

} elseif ($_SERVER['REQUEST_URI'] == "/SubmitAufgabe6")  {

// Gewinner ausgeben
}



else {
    echo "else";
}
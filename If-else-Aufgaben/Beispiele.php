<?php

if (1 == 1) {
    echo "1 gleich 1\n"; // \n bewirkt ein Zeilenumbruch.
}

if (1 == 2) {
    echo "1 gleich 2\n"; //Dieser Teil wird nicht ausgeführt, da die Bedinung nicht stimmt.
}

if (4 > 2) {
    echo "4 ist grösser als 2\n";
}

if (8 < 16) {
    echo "8 ist kleiner als 16\n";
}

if (10 >= 5) {
    echo "10 gösser oder gleich 5\n";
}

if (5 >= 5) {
    echo "10 gösser oder gleich 5\n";
}

if (12 <= 20) {
    echo "12 kleiner oder gleich 20\n";
}

if (5 != 13) {
    echo "5 ungleich 13\n";
}

$num1 = 2;
$num2 = 4;

if ($num1 + $num2 != $num1 * 4) {
    echo "Vier mal num1 gleich num2\n";
}

if (23 != 23) {
    echo "23 ungleich 23\n";
} else {
    echo "23 gleich 23\n";
}

if (12 == 7) {
    echo "12 gleich 7\n";
} elseif (12 == 12) {
    echo "12 gleich 12\n";
}

if (12 == 12 && 7 == 2) {
    echo "Dieser Teil wird nicht ausgeführt, da 7 nicht 2 ist.\n";
}

if (12 == 12 && 7 == 7) {
    echo "Dieser Teil wird ausgeführt, da beide Bedinungen stimmen.\n";
}

if (12 == 12 || 3 == 2) {
    echo "Dieser Teil wird ausgeführt, da nur eine Bedinung wahr sein muss.\n";
}

if ("ja" == "nein") {
    echo "ja = nein\n";
} elseif ("ja" == "ja") {
    echo "ja = ja\n";
}

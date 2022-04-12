<?php

    echo"Willkommen zu Talking-Ben!\n";

    $name = readline("Wie lautet dein Name?");

    echo"\nBen: Hallo $name ich bin Ben! Frag mich etwas\n";

    $true = true;

    while($true == true) {
    $satz = readline("$name:");

    $numb = rand(1,4);

    if ($numb == 1) {
        echo"Ben: Ja\n";
    } elseif ($numb == 2) {
        echo"Ben: Nein\n";
    } elseif ($numb == 3) {
        echo"Ben: Bruder muss los!";
        $true = false;
    }
     else {
        echo"Ben: Beantworte ich nicht!\n";
    }
}
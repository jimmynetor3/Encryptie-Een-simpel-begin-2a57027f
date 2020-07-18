<?php

$pattern = "/[a-zA-Z]/m";
$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$input = $argv[1];
$last_offset = -1;
//kijkt hoe groot de array is
foreach ($alphabet as $letter) {
    $last_offset++;
}
//pakt alle letter van het meegegeven stuk tekst
if (preg_match_all($pattern, $input, $match)) {
//    kijkt voor elke letter waar die in het alphabet array zit
    foreach ($match as $match) {
        foreach ($match as $match) {
            $array_key = (array_keys($alphabet, $match));
            foreach ($array_key as $array_key) {
//                kijkt of de letter aan het eind van de array zit, zo ja dan gaat die terug naar de begin positie
                if ($array_key != $last_offset) {
                    echo $alphabet[$array_key + 1];
                } else {
                    echo $alphabet[0];
                }
            }
        }
    }
}

<?php

$pattern_word = "/[a-zA-Z]{1,}/m";
$pattern_letter = "/[a-zA-Z]/m";
$array_words = array();
$alphabet = array(
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z'
);
$test = 0;
$input = readline("wat wil je encrypten ");
$last_offset = -1;
$shiftsize = (int)readline("welke shift wil je ");
$shiftsize_array = $shiftsize - 1;
foreach ($alphabet as $letter) {
    $last_offset++;
}

if (preg_match_all($pattern_word, $input, $matches)) {
    foreach ($matches as $match) {
        foreach ($match as $match) {
            array_push($array_words, $match);
        }
    }
}
foreach ($array_words as $word) {
    if (preg_match_all($pattern_letter, $word, $match_letter, PREG_SET_ORDER, 0)) {
        foreach ($match_letter as $match) {
            foreach ($match as $match) {
                $array_keys = array_keys($alphabet, $match);
                foreach ($array_keys as $array_keys) {
                    $offset = $array_keys + $shiftsize;
                    if ($offset <= $last_offset) {
                        echo $alphabet[$offset];
                    } elseif ($offset > $last_offset) {
                        echo $alphabet[$offset - 25 - 1];
                    }
                }
            }
        }
    }
    echo " ";
}


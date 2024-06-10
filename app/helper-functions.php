<?php

function word_limit($string, $limit) {
    $words = explode(' ', $string);
    $limited_words = array_slice($words, 0, $limit);
    $preview = implode(' ', $limited_words);
    return $preview;
}

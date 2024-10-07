<?php
function isPalindromeWord($word) {
    $word = strtolower($word);

    $reversedWord = '';
    $length = strlen($word);
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedWord .= $word[$i];
    }

    return $word === $reversedWord;
}


function isPalindromeText($text) {
    $text = strtolower($text);

    $cleanedText = str_replace([' ', ',', '.', '!', '?', '-', '_'], '', $text);

    $reversedText = '';
    $length = strlen($cleanedText);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedText .= $cleanedText[$i];
    }

    return $cleanedText === $reversedText;
}
?>
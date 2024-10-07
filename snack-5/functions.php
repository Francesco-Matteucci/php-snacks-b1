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
?>
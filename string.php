<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string) {
  $vowelsCount = preg_match_all('/[aeiou]/i', $string);
  $reverseString = strrev($string);
  echo "Original String: {$string}, Vowel Count: {$vowelsCount}, Reversed String: {$reverseString}\n";
}


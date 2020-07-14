<?php
//https://codeforces.com/problemset/problem/946/C?locale=en
function solution(string $str)
{
    $str = str_split($str);
    $current = 'a';
    for ($i = 0; $i < count($str); $i++) {
        if ($current >= $str[$i]) {
            $str[$i] = $current;
            $current = incrementChar($current);
            if ($str[$i] == 'z') {
                return implode($str);
            }
        }
    }
    return -1;
}

function incrementChar($char)
{
    return chr(ord($char) + 1);
}

fscanf(STDIN, "%s", $string);
print solution($string);

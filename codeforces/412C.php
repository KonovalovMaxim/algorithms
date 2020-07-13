<?php
// https://codeforces.com/problemset/problem/412/C?locale=ru

function solution(array $strings): string
{
    if (!count($strings)) {
        return '';
    }

    foreach ($strings as &$string) {
        $string = str_split($string);
    }
    $pattern = '';
    $len = count($strings[0]);
    for ($j = 0; $j < $len; $j++) {
        $placeholder = true;
        $sameLetter = true;
        $prevLetter = null;
        for ($i = 0; $i < count($strings); $i++) {
            if ($prevLetter !== null && $prevLetter != $strings[$i][$j] && $strings[$i][$j] != '?') {
                $sameLetter = false;
            }
            if ($strings[$i][$j] != '?') {
                $prevLetter = $strings[$i][$j];
                $placeholder = false;
            }
        }
        if ($placeholder) {
            $pattern .= 'x';
        } elseif ($sameLetter) {
            $pattern .= $prevLetter;
        } else {
            $pattern .= '?';
        }
    }
    return $pattern;
}


$n = intval(fgets(STDIN));
$strings = [];
for ($i = 0; $i < $n; $i++) {
    $strings[] = trim(fgets(STDIN));
}
print solution($strings);


//assert(solution(['?ab', '??b']) == 'xab');
//assert(solution(['a', 'b']) == '?');
//assert(solution(['?a?b']) == 'xaxb');

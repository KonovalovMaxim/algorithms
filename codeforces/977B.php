<?php
// https://codeforces.com/problemset/problem/977/B
function solution(string $s): string
{
    $s = str_split($s);
    $map = [];
    $max = 0;
    $result = '';
    for ($i = 1; $i < count($s); $i++) {
        $twoGramm = $s[$i - 1] . $s[$i];
        if (!array_key_exists($twoGramm, $map)) {
            $map[$twoGramm] = 1;
        } else {
            $map[$twoGramm]++;
        }
        if ($map[$twoGramm] > $max) {
            $max = $map[$twoGramm];
            $result = $twoGramm;
        }
    }
    return $result;
}

$n = intval(fgets(STDIN));
$s = trim(fgets(STDIN));
print solution($s);

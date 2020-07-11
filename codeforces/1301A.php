<?php
// https://codeforces.com/problemset/problem/1301/A
function solution(string $a, string $b, string $c): bool
{
    $a = str_split($a);
    $b = str_split($b);
    $c = str_split($c);
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] == $c[$i] || $b[$i] == $c[$i]) {
            continue;
        }
        return false;
    }
    return true;
}

$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
    print (solution($a, $b, $c) ? 'YES' : 'NO') . PHP_EOL;
}

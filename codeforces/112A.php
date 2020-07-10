<?php
//https://codeforces.com/problemset/problem/112/A
function solution($s1, $s2)
{
    $s1 = strtolower($s1);
    $s2 = strtolower($s2);
    if ($s1 < $s2) {
        return -1;
    } elseif ($s1 > $s2) {
        return 1;
    } else {
        return 0;
    }
}

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

echo solution($a, $b);

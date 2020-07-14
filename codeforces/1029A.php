<?php
// Неправильный ответ на тесте 6
// https://codeforces.com/problemset/problem/1029/A
function getStrPrefix(string $string): string
{
    $result = $string;
    $intersect = 0;
    if (substr($result, -1) == substr($string, 0, 1)) {
        for ($i = 0; $i < strlen($string); $i++) {
            if (substr($result, -$i) == substr($string, 0, $i)) {
                $intersect = $i;
            }
        }
    }
    return substr($string, 0, strlen($string) - $intersect);
}


function solution(string $string, int $times): string
{
    return str_repeat(getStrPrefix($string), $times - 1) . $string;
}


fscanf(STDIN, "%d %d", $len, $times);
fscanf(STDIN, "%s", $string);
echo solution($string, $times);


//assert(solution('aba', 4) == 'ababababa');
//assert(solution('aba', 4) == 'ababababa');
//assert(solution('ababa', 3) == 'ababababa');
//assert(solution('abababa', 2) == 'ababababa');
//assert(solution('ababababa', 1) == 'ababababa');
//assert(solution('ababababa', 2) == 'abababababa');
//assert(solution('ab', 4) == 'abababab');
//assert(solution('cat', 2) == 'catcat');
//assert(solution('dod', 2) == 'dodod');
//assert(solution('d', 2) == 'dd');
//assert(solution('d', 1) == 'd');
//assert(solution('dd', 1) == 'dd');
//assert(solution('dd', 5) == 'dddddd');
//assert(solution('dod', 2) == 'dodod');
//
//assert(getStrPrefix('aaaa') == 'a');
//assert(getStrPrefix('abc') == 'abc');
//assert(getStrPrefix('ababa') == 'ab');
//assert(getStrPrefix('abababababa') == 'ab');
//assert(getStrPrefix('b') == 'b');
//assert(getStrPrefix('') == '');
//assert(getStrPrefix('acca') == 'acc');
//assert(getStrPrefix('aaaaab') == 'aaaaab');

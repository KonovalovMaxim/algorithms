<?php

// Complete the makeAnagram function below.
function makeAnagram($a, $b)
{
    $a = str_split($a);
    $b = str_split($b);
    sort($b);
    sort($a);

    $total = count($a) + count($b);
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($b); $j++) {
            if ($a[$i] == $b[$j]) {
                $a[$i] = '';
                $b[$j] = '';
                $total -= 2;
                break;
            }
        }
    }
    return $total;
}


assert(makeAnagram('cde', 'abc') === 4);
assert(makeAnagram('aaa', 'aaa') === 0);
assert(makeAnagram('qwe', 'asd') === 6);

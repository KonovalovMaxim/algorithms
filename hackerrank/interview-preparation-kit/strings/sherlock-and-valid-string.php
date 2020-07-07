<?php

// Complete the isValid function below.
function isValid($s)
{
    $s = str_split($s);
    $map = [];
    for ($i = 0; $i < count($s); $i++) {
        if (!array_key_exists($s[$i], $map)) {
            $map[$s[$i]] = 1;
        } else {
            $map[$s[$i]]++;
        }
    }
    $nums = [];
    foreach ($map as $letter => $value) {
        if (!array_key_exists($value, $nums)) {
            $nums[$value] = 1;
        } else {
            $nums[$value]++;
        }
    }
    if (count($nums) == 1) {
        return true;
    } elseif (count($nums) == 2) {
        $keys = array_keys($nums);
        foreach (array_values($nums) as $i => $lettersCount) {
            if ($lettersCount == 1 && $keys[$i] == 1) {
                return true;
            }
            if ($lettersCount == 1 && $keys[$i] - $keys[$i == 0 ? 1 : 0] == 1) {
                return true;
            }
        }
    }
    return false;
}

assert(isValid('aabbcd') === false);
assert(isValid('aabbccddeefghi') === false);
assert(isValid('abcdefghhgfedecba') === true);
assert(isValid('aaaabbcc') === false);
assert(isValid('aabbc') === true);

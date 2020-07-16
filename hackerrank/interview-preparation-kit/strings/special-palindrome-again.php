<?php
// Complete the substrCount function below.
function substrCount($n, $s)
{
    $s = str_split($s);
    $total = 0;
    $i = 0;
    $totalCount = 0;
    $map = [];
    while ($i < count($s)) {
        $j = $i + 1;
        $c = 1;
        $differentLettersCount = 0;
        $diffLetterPosition = 0;
        while ($j < count($s)) {
            while ($s[$j] == $s[$i] && $j < count($s)) {
                $j++;
                $c++;
            }
            $map[$i] = $c;
            $i = $j;
        }
    }
    return $totalCount;
}

function getArifmetixSum(int $num)
{
    return ((1 + $num) / 2 * $num) - $num;
}

/**
 * 3 - 3
 * 4 - 6
 * 5 - 11
 * 'aaaaa'
 * ' aaaa'
 * 'aaaa '
 * 'aaa  '
 * ' aaa '
 * '  aaa'
 * 'aa   '
 * ' aa  '
 * '  aa '
 * '   aa'
 *
 *
 */
function isSpecial(array $s, int $left = null, int $right = null)
{

    if (is_null($left)) {
        $left = 0;
    }
    if (is_null($right)) {
        $right = count($s) - 1;
    }
    if ($left == $right) {
        return true;
    }
    if (($left + $right) % 2 == 0) {
        $mid = ($left + $right) / 2;
        $s[$mid] = $s[$left];
    }

    for ($i = $left; $i <= $right; $i++) {
        if ($s[$i] !== $s[$left]) {
            return false;
        }
    }
    return true;
}

//assert(isSpecial(str_split('asasd'), 1, 3) === true);
assert(substrCount(5, 'asasd') == 7);
//assert(isSpecial(str_split('a')) === true);
//assert(isSpecial(str_split('b')) === true);
//assert(isSpecial(str_split('bbb')) === true);
//assert(isSpecial(str_split('bab')) === true);
//assert(isSpecial(str_split('bb')) === true);
//assert(isSpecial(str_split('bbbb')) === true);
//assert(isSpecial(str_split('abbb')) === false);
//assert(isSpecial(str_split('abab')) === false);
//assert(substrCount(7, 'abcbaba') == 10);
//assert(substrCount(4, 'aaaa') == 10);


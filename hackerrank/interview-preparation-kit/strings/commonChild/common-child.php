<?php


// Complete the commonChild function below.
function commonChild($s1, $s2)
{
    if (empty($s1) || empty($s2)) {
        return 0;
    }
    $s1 = str_split('0' . $s1);
    $s2 = str_split('0' . $s2);
    $map = [];
    for ($i = 0; $i < count($s2); $i++) {
        $map[] = 0;
    }
    for ($i = 1; $i < count($s1); $i++) {
        $top = 0;
        for ($j = 1; $j < count($s2); $j++) {
            if ($s1[$i] == $s2[$j]) {
                $current = $top + 1;
            } else {
                $current = max($map[$j - 1], $map[$j]);
            }
            $top = $map[$j];
            $map[$j] = $current;
        }
    }
    return $map[count($map) - 1];
}

assert(commonChild('HARRY', 'SALLY') == 2);
assert(commonChild('AA', 'BB') == 0);
assert(commonChild('AA', 'AA') == 2);
assert(commonChild('', '') == 0);
assert(commonChild('SHINCHAN', 'NOHARAAA') == 3);
assert(commonChild('ABCDEF', 'FBDAMN') == 2);

$lines = file(__DIR__ . '/input13.txt');
assert(commonChild($lines[0], $lines[1]) == 1618);
assert(commonChild($lines[0], $lines[1]) == 1618);

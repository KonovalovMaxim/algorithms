<?php
//
//A self-dividing number is a number that is divisible by every digit it contain
//s.
//
//For example, 128 is a self-dividing number because 128 % 1 == 0, 128 % 2 == 0,
// and 128 % 8 == 0.
//
//Also, a self-dividing number is not allowed to contain the digit zero.
//
//Given a lower and upper number bound, output a list of every possible self div
//iding number, including the bounds if possible.
//
// Example 1:
//
//Input:
//left = 1, right = 22
//Output: [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 15, 22]
//
//
//
// Note:
// The boundaries of each input argument are 1 <= left <= right <= 10000.
// Related Topics Math
// 👍 645 👎 290


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right)
    {
        $result = [];
        for ($i = $left; $i <= $right; $i++) {
            $numbers = str_split($i);
            $f = true;
            foreach ($numbers as $n) {
                if ($n == 0 || $i % $n != 0) {
                    $f = false;
                    break;
                }
            }
            if ($f) {
                $result[] = $i;
            }
        }
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

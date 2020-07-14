<?php
//You're given strings J representing the types of stones that are jewels, and S
// representing the stones you have. Each character in S is a type of stone you ha
//ve. You want to know how many of the stones you have are also jewels.
//
// The letters in J are guaranteed distinct, and all characters in J and S are l
//etters. Letters are case sensitive, so "a" is considered a different type of sto
//ne from "A".
//
// Example 1:
//
//
//Input: J = "aA", S = "aAAbbbb"
//Output: 3
//
//
// Example 2:
//
//
//Input: J = "z", S = "ZZ"
//Output: 0
//
//
// Note:
//
//
// S and J will consist of letters and have length at most 50.
// The characters in J are distinct.
//
// Related Topics Hash Table
// 👍 2111 👎 366


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S)
    {
        $J = str_split($J);
        $S = str_split($S);
        $counter = 0;
        for ($i = 0; $i < count($S); $i++) {
            if (in_array($S[$i], $J)) {
                $counter++;
            }
        }
        return $counter;
    }
}

//leetcode submit region end(Prohibit modification and deletion)

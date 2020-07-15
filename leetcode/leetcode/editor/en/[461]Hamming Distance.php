<?php
//The Hamming distance between two integers is the number of positions at which
//the corresponding bits are different. 
//
// Given two integers x and y, calculate the Hamming distance. 
//
// Note: 
//0 ≤ x, y < 231.
// 
//
// Example:
// 
//Input: x = 1, y = 4
//
//Output: 2
//
//Explanation:
//1   (0 0 0 1)
//4   (0 1 0 0)
//       ↑   ↑
//
//The above arrows point to positions where the corresponding bits are different
//.
// 
// Related Topics Bit Manipulation 
// 👍 1840 👎 160


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y)
    {
        return array_sum(str_split((string)decbin($x ^ $y)));
    }
}

//leetcode submit region end(Prohibit modification and deletion)

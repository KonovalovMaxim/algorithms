<?php
//Given a non-empty array of integers, every element appears twice except for on
//e. Find that single one. 
//
// Note: 
//
// Your algorithm should have a linear runtime complexity. Could you implement i
//t without using extra memory? 
//
// Example 1: 
//
// 
//Input: [2,2,1]
//Output: 1
// 
//
// Example 2: 
//
// 
//Input: [4,1,2,1,2]
//Output: 4
// 
// Related Topics Hash Table Bit Manipulation 
// 👍 4503 👎 161


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)
    {
        $result = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            $result ^= $nums[$i];

        }
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

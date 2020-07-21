<?php
//Given an array of size n, find the majority element. The majority element is t
//he element that appears more than ⌊ n/2 ⌋ times. 
//
// You may assume that the array is non-empty and the majority element always ex
//ist in the array. 
//
// Example 1: 
//
// 
//Input: [3,2,3]
//Output: 3 
//
// Example 2: 
//
// 
//Input: [2,2,1,1,1,2,2]
//Output: 2
// 
// Related Topics Array Divide and Conquer Bit Manipulation 
// 👍 3273 👎 220


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $map = [];
        $n = count($nums);
        $max = $n/2;
        for($i=0;$i<$n; $i++) {
            $map[$nums[$i]]++;
            if($map[$nums[$i]]> $max) {
                return $nums[$i];
            }
        }
    }
}
//leetcode submit region end(Prohibit modification and deletion)

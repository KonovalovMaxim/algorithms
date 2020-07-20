<?php
//Given an array arr, replace every element in that array with the greatest elem
//ent among the elements to its right, and replace the last element with -1. 
//
// After doing so, return the array. 
//
// 
// Example 1: 
// Input: arr = [17,18,5,4,6,1]
//Output: [18,6,6,6,1,-1]
// 
// 
// Constraints: 
//
// 
// 1 <= arr.length <= 10^4 
// 1 <= arr[i] <= 10^5 
// Related Topics Array 
// 👍 372 👎 86


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr)
    {
        $max = -1;
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            $element = $arr[$i];
            $arr[$i] = $max;
            $max = max($max, $element);
        }
        return $arr;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

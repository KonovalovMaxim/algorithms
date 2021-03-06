<?php
//Write a function that reverses a string. The input string is given as an array
// of characters char[]. 
//
// Do not allocate extra space for another array, you must do this by modifying 
//the input array in-place with O(1) extra memory. 
//
// You may assume all the characters consist of printable ascii characters. 
//
// 
//
// 
// Example 1: 
//
// 
//Input: ["h","e","l","l","o"]
//Output: ["o","l","l","e","h"]
// 
//
// 
// Example 2: 
//
// 
//Input: ["H","a","n","n","a","h"]
//Output: ["h","a","n","n","a","H"]
// 
// 
// 
// Related Topics Two Pointers String 
// 👍 1470 👎 689


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $l = 0;
        $r = count($s) - 1;
        while ($l < $r) {
            $tmp = $s[$l];
            $s[$l] = $s[$r];
            $s[$r] = $tmp;
            $l++;
            $r--;
        }
        return $s;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

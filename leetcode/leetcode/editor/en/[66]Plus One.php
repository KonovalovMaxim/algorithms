<?php
//Given a non-empty array of digits representing a non-negative integer, increme
//nt one to the integer. 
//
// The digits are stored such that the most significant digit is at the head of 
//the list, and each element in the array contains a single digit. 
//
// You may assume the integer does not contain any leading zero, except the numb
//er 0 itself. 
//
// 
// Example 1: 
//
// 
//Input: digits = [1,2,3]
//Output: [1,2,4]
//Explanation: The array represents the integer 123.
// 
//
// Example 2: 
//
// 
//Input: digits = [4,3,2,1]
//Output: [4,3,2,2]
//Explanation: The array represents the integer 4321.
// 
//
// Example 3: 
//
// 
//Input: digits = [0]
//Output: [1]
// 
//
// 
// Constraints: 
//
// 
// 1 <= digits.length <= 100 
// 0 <= digits[i] <= 9 
// 
// Related Topics Array 
// 👍 1694 👎 2552


class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $digits = array_reverse($digits);
        $mem = 0;
        $plus = 1;
        $result = [];
        for($i=0;$i<count($digits);$i++) {
            if($digits[$i]+$plus +$mem >=10) {
                $result[] = ($digits[$i]+$plus+$mem) % 10;
                $mem = 1;
                $plus = 0;
            } else {
                $result[] = $digits[$i] +$plus +$mem;
                $mem =0;
                $plus =0;
            }
        }
        if($mem == 1) {
            $result[] = 1;
        }
        return array_reverse($result);
    }
}
//leetcode submit region end(Prohibit modification and deletion)

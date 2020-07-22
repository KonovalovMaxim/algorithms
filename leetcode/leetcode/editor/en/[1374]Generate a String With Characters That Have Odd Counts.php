<?php
//Given an integer n, return a string with n characters such that each character
// in such string occurs an odd number of times. 
//
// The returned string must contain only lowercase English letters. If there are
// multiples valid strings, return any of them. 
//
// 
// Example 1: 
//
// 
//Input: n = 4
//Output: "pppz"
//Explanation: "pppz" is a valid string since the character 'p' occurs three tim
//es and the character 'z' occurs once. Note that there are many other valid strin
//gs such as "ohhh" and "love".
// 
//
// Example 2: 
//
// 
//Input: n = 2
//Output: "xy"
//Explanation: "xy" is a valid string since the characters 'x' and 'y' occur onc
//e. Note that there are many other valid strings such as "ag" and "ur".
// 
//
// Example 3: 
//
// 
//Input: n = 7
//Output: "holasss"
// 
//
// 
// Constraints: 
//
// 
// 1 <= n <= 500 
// Related Topics String 
// 👍 85 👎 410


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer $n
     * @return String
     */
    function generateTheString($n)
    {
        if ($n % 2 == 0) {
            return str_repeat('a', $n - 1) . 'b';
        } else {
            return str_repeat('a', $n);
        }
    }
}
//leetcode submit region end(Prohibit modification and deletion)

<?php
//Given a string, you need to reverse the order of characters in each word withi
//n a sentence while still preserving whitespace and initial word order. 
//
// Example 1: 
// 
//Input: "Let's take LeetCode contest"
//Output: "s'teL ekat edoCteeL tsetnoc"
// 
// 
//
// Note:
//In the string, each word is separated by single space and there will not be an
//y extra space in the string.
// Related Topics String 
// 👍 1015 👎 87


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $result =[];
        $words = explode(' ', $s);
        foreach( $words  as $word) {
            $result[] = strrev($word);
        }
        return implode(' ', $result);
    }
}
//leetcode submit region end(Prohibit modification and deletion)

<?php
//Given a positive integer num consisting only of digits 6 and 9.
//
// Return the maximum number you can get by changing at most one digit (6 become
//s 9, and 9 becomes 6). 
//
// 
// Example 1: 
//
// 
//Input: num = 9669
//Output: 9969
//Explanation: 
//Changing the first digit results in 6669.
//Changing the second digit results in 9969.
//Changing the third digit results in 9699.
//Changing the fourth digit results in 9666. 
//The maximum number is 9969.
// 
//
// Example 2: 
//
// 
//Input: num = 9996
//Output: 9999
//Explanation: Changing the last digit 6 to 9 results in the maximum number. 
//
// Example 3: 
//
// 
//Input: num = 9999
//Output: 9999
//Explanation: It is better not to apply any change. 
//
// 
// Constraints: 
//
// 
// 1 <= num <= 10^4 
// num's digits are 6 or 9. 
// Related Topics Math 
// 👍 280 👎 45


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number ($num) {
        $num = str_split($num);
        for($i=0;$i<count($num); $i++) {
            if ($num[$i] == '6') {
                $num[$i] = '9';
                break;
            }
        }
        return implode($num);
    }
}
//leetcode submit region end(Prohibit modification and deletion)

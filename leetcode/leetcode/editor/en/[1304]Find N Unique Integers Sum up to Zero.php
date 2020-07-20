<?php
//Given an integer n, return any array containing n unique integers such that th
//ey add up to 0. 
//
// 
// Example 1: 
//
// 
//Input: n = 5
//Output: [-7,-1,1,3,4]
//Explanation: These arrays also are accepted [-5,-1,1,2,3] , [-3,-1,2,-2,4].
// 
//
// Example 2: 
//
// 
//Input: n = 3
//Output: [-1,0,1]
// 
//
// Example 3: 
//
// 
//Input: n = 1
//Output: [0]
// 
//
// 
// Constraints: 
//
// 
// 1 <= n <= 1000 
// Related Topics Array 
// 👍 279 👎 176


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function sumZero($n) {
        $left = -intval($n/2);
        $right = abs($left);
        $result = [];
        while($left!=0 && $right !=0) {
            $result[] = $left;
            $result[] = $right;
            $left++;
            $right--;
        }
        if($n%2==1){
            $result[] = 0;
        }
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

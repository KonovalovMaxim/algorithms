<?php
//Given an array A of non-negative integers, return an array consisting of all t
//he even elements of A, followed by all the odd elements of A. 
//
// You may return any answer array that satisfies this condition. 
//
// 
//
// 
// Example 1: 
//
// 
//Input: [3,1,2,4]
//Output: [2,4,3,1]
//The outputs [4,2,3,1], [2,4,1,3], and [4,2,1,3] would also be accepted.
// 
//
// 
//
// Note: 
//
// 
// 1 <= A.length <= 5000 
// 0 <= A[i] <= 5000 
// 
// 
// Related Topics Array 
// 👍 982 👎 73


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{
/**
    function sortArrayByParity($A) {
        $odd = [];
        $even = [];
        for($i = 0 ; $i< count($A);$i++){
            if($A[$i]%2==0) {
                $odd[] = $A[$i];
            } else {
                $even[] = $A[$i];
            }
        }
        return array_merge($odd, $even);
    }
 */
    function sortArrayByParity($A)
    {
        $l = 0;
        $n = count($A);
        $r = $n - 1;

        while ($l < $r) {
            while ($A[$l] % 2 == 0 && $l < $n) {
                $l++;
            }
            while ($A[$r] % 2 == 1 && $r > 0) {
                $r--;
            }
            if ($l < $r) {

                $tmp = $A[$r];
                $A[$r] = $A[$l];
                $A[$l] = $tmp;
                $l++;
                $r--;

            }
        }
        return $A;
    }
}

//leetcode submit region end(Prohibit modification and deletion)

var_dump((new Solution())->sortArrayByParity([0, 2]));

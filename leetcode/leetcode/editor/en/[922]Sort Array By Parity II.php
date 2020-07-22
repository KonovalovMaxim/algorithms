<?php
//Given an array A of non-negative integers, half of the integers in A are odd,
//and half of the integers are even. 
//
// Sort the array so that whenever A[i] is odd, i is odd; and whenever A[i] is e
//ven, i is even. 
//
// You may return any answer array that satisfies this condition. 
//
// 
//
// Example 1: 
//
// 
//Input: [4,2,5,7]
//Output: [4,5,2,7]
//Explanation: [4,7,2,5], [2,5,4,7], [2,7,4,5] would also have been accepted.
// 
//
// 
//
// Note: 
//
// 
// 2 <= A.length <= 20000 
// A.length % 2 == 0 
// 0 <= A[i] <= 1000 
// 
//
// 
// 
// Related Topics Array Sort 
// 👍 653 👎 48


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParityII($a)
    {
        $odd = 0;
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] % 2 != $odd) {
                $j = $i + 1;
                while ($j < count($a) && $a[$j] % 2 != $odd) {
                    $j++;
                }
                $tmp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tmp;
            }

            $odd = $odd == 0 ? 1 : 0;
        }

        return $a;
    }
}

//leetcode submit region end(Prohibit modification and deletion)
$res = (new Solution())->sortArrayByParityII([4, 2, 5, 7]);
var_dump($res);

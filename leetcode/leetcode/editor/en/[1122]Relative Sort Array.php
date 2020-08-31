<?php
//Given two arrays arr1 and arr2, the elements of arr2 are distinct, and all ele
//ments in arr2 are also in arr1. 
//
// Sort the elements of arr1 such that the relative ordering of items in arr1 ar
//e the same as in arr2. Elements that don't appear in arr2 should be placed at th
//e end of arr1 in ascending order. 
//
// 
// Example 1: 
// Input: arr1 = [2,3,1,3,2,4,6,7,9,2,19], arr2 = [2,1,4,3,9,6]
//Output: [2,2,2,1,4,3,3,9,6,7,19]
// 
// 
// Constraints: 
//
// 
// arr1.length, arr2.length <= 1000 
// 0 <= arr1[i], arr2[i] <= 1000 
// Each arr2[i] is distinct. 
// Each arr2[i] is in arr1. 
// 
// Related Topics Array Sort 
// 👍 693 👎 47


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2)
    {
        $l = 0;
        sort($arr1);
        foreach ($arr2 as $needle) {
            $found = true;
            $foundTimes = 0;
            while ($found) {
                $found = false;
                for ($i = $l; $i < count($arr1); $i++) {
                    if ($arr1[$i] == $needle) {
                        $found = true;
                        $tmp = $arr1[$i];
                        $arr1[$i] = $arr1[$l];
                        $arr1[$l] = $tmp;
                        $l++;
                        $foundTimes++;
                    }
                }
            }
        }
        $array1 = array_slice($arr1, 0, $l);
        $array2 = array_slice($arr1, $l, count($arr1));
        sort($array2);
        return array_merge($array1, $array2);
    }
}


//leetcode submit region end(Prohibit modification and deletion)
assert((new Solution())->relativeSortArray([2, 3, 1, 3, 2, 4, 19, 6, 7, 9, 2], [2, 1, 4, 3, 9, 6]) == [2, 2, 2, 1, 4, 3, 3, 9, 6, 7, 19]);
assert((new Solution())->relativeSortArray([28, 6, 22, 8, 44, 17], [22, 28, 8, 6]) == [22, 28, 8, 6, 17, 44]);
assert((new Solution())->relativeSortArray([33,22,48,4,39,36,41,47,15,45], [22,33,48,4]) == [22,33,48,4,15,36,39,41,45,47]);


<?php
//Given two arrays, write a function to compute their intersection.
//
// Example 1: 
//
// 
//Input: nums1 = [1,2,2,1], nums2 = [2,2]
//Output: [2]
// 
//
// 
// Example 2: 
//
// 
//Input: nums1 = [4,9,5], nums2 = [9,4,9,8,4]
//Output: [9,4] 
// 
//
// Note: 
//
// 
// Each element in the result must be unique. 
// The result can be in any order. 
// 
//
// 
// Related Topics Hash Table Two Pointers Binary Search Sort 
// 👍 852 👎 1236


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2)
    {
        sort($nums1);
        sort($nums2);
        $result = [];
        while (count($nums1) && count($nums2)) {
            if ($nums2[count($nums2) - 1] == $nums1[count($nums1) - 1]) {
                $result[] = $nums2[count($nums2) - 1];
                $two = array_pop($nums2);
                while (count($nums2) && $two == $nums2[count($nums2) - 1]) {
                    array_pop($nums2);
                }
                $one = array_pop($nums1);
                while (count($nums1) && $one == $nums1[count($nums1) - 1]) {
                    array_pop($nums1);
                }
            } elseif ($nums2[count($nums2) - 1] > $nums1[count($nums1) - 1]) {
                array_pop($nums2);
            } else {
                array_pop($nums1);
            }
        }

        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)
$result = (new Solution())->intersection([4,9,5], [9,4,9,8,4]);

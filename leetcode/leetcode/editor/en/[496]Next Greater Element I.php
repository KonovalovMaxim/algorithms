<?php
//
//You are given two arrays (without duplicates) nums1 and nums2 where nums1’s el
//ements are subset of nums2. Find all the next greater numbers for nums1's elemen
//ts in the corresponding places of nums2. 
// 
//
// 
//The Next Greater Number of a number x in nums1 is the first greater number to 
//its right in nums2. If it does not exist, output -1 for this number.
// 
//
// Example 1: 
// 
//Input: nums1 = [4,1,2], nums2 = [1,3,4,2].
//Output: [-1,3,-1]
//Explanation:
//    For number 4 in the first array, you cannot find the next greater number f
//or it in the second array, so output -1.
//    For number 1 in the first array, the next greater number for it in the sec
//ond array is 3.
//    For number 2 in the first array, there is no next greater number for it in
// the second array, so output -1.
// 
// 
//
// Example 2: 
// 
//Input: nums1 = [2,4], nums2 = [1,2,3,4].
//Output: [3,-1]
//Explanation:
//    For number 2 in the first array, the next greater number for it in the sec
//ond array is 3.
//    For number 4 in the first array, there is no next greater number for it in
// the second array, so output -1.
// 
// 
//
//
// Note: 
// 
// All elements in nums1 and nums2 are unique. 
// The length of both nums1 and nums2 would not exceed 1000. 
// 
// Related Topics Stack 
// 👍 1598 👎 2144


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2)
    {
        $map = [];
        foreach ($nums2 as $key => $value) {
            $map[$value] = $key;
        }
        $result = [];
        for ($i = 0; $i < count($nums1); $i++) {
            $next = -1;
            $index = $map[$nums1[$i]];
            for ($j = $index + 1; $j < count($nums2); $j++) {
                if ($nums2[$j] > $nums1[$i]) {
                    $next = $nums2[$j];
                    break;
                }
            }
            $result[] = $next;
        }
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

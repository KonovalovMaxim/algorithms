<?php
//Given a sorted (in ascending order) integer array nums of n elements and a tar
//get value, write a function to search target in nums. If target exists, then ret
//urn its index, otherwise return -1. 
//
// 
//Example 1: 
//
// 
//Input: nums = [-1,0,3,5,9,12], target = 9
//Output: 4
//Explanation: 9 exists in nums and its index is 4
//
// 
//
// Example 2: 
//
// 
//Input: nums = [-1,0,3,5,9,12], target = 2
//Output: -1
//Explanation: 2 does not exist in nums so return -1
// 
//
// 
//
// Note: 
//
// 
// You may assume that all elements in nums are unique. 
// n will be in the range [1, 10000]. 
// The value of each element in nums will be in the range [-9999, 9999]. 
// 
// Related Topics Binary Search 
// 👍 757 👎 48


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        return $this->iterative($nums, $target);
    }

    function iterative($nums, $target) {
        $l = 0;
        $r = count($nums)-1;
        while($l <= $r) {
            $mid = floor(($l+$r) / 2);
            if($nums[$mid] == $target) {
                return $mid;
            }
            if($nums[$mid] < $target) {
                $l = $mid+1;
            } else {
                $r = $mid-1;
            }
        }
        return -1;
    }

    //recursive
    function binarySearch($l, $r, $nums, $target)
    {
        $mid = floor(($l+$r)/2);
        if($nums[$mid] == $target) {
            return $mid;
        }
        if($r-$l<=1) {
            return -1;
        }
        if($nums[$mid] < $target) {
            return $this->binarySearch($mid, $r, $nums, $target);
        } else {
            return $this->binarySearch($l, $mid, $nums, $target);
        }
    }
}
//leetcode submit region end(Prohibit modification and deletion)

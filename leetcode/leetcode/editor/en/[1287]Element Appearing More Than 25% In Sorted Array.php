<?php
//Given an integer array sorted in non-decreasing order, there is exactly one in
//teger in the array that occurs more than 25% of the time. 
//
// Return that integer. 
//
// 
// Example 1: 
// Input: arr = [1,2,2,6,6,6,6,7,10]
//Output: 6
// 
// 
// Constraints: 
//
// 
// 1 <= arr.length <= 10^4 
// 0 <= arr[i] <= 10^5 
// Related Topics Array 
// 👍 269 👎 20


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findSpecialInteger($arr) {
        if(count($arr)==1) {
            return $arr[0];
        }
        if(count($arr) <= 10){
            $map = array_count_values($arr);
            $max = 0;
            $element = null;
            foreach($map as $key=>$count){
                if($count > $max) {
                    $max = $count;
                    $element = $key;
                }
            }
            return $element;
        }

        $l = 0;
        $r = count($arr);
        $mid = floor(($l+$r)/2);
        $lmid = floor(($l+$mid)/2);
        $rmid = floor(($mid+$r)/2);
        $quarter = count($arr)/4;
        if($this->checkNum($mid, $arr) > $quarter) {
            return $arr[$mid];
        }
        if($this->checkNum($lmid, $arr) > $quarter) {
            return $arr[$lmid];
        }
        if($this->checkNum($rmid, $arr) > $quarter) {
            return $arr[$rmid];
        }
    }

    function checkNum($index, $nums) {
        $l = $index;
        $r = $index;
        while($nums[$l] == $nums[$index] && $l > 0) {
            $l--;
        }
        while($nums[$r] == $nums[$index] && $r < count($nums)-1) {
            $r++;
        }
        return $r-$l;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

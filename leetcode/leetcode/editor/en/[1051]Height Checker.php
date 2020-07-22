<?php
//Students are asked to stand in non-decreasing order of heights for an annual p
//hoto. 
//
// Return the minimum number of students that must move in order for all student
//s to be standing in non-decreasing order of height. 
//
// Notice that when a group of students is selected they can reorder in any poss
//ible way between themselves and the non selected students remain on their seats.
// 
//
// 
// Example 1: 
//
// 
//Input: heights = [1,1,4,2,1,3]
//Output: 3
//Explanation: 
//Current array : [1,1,4,2,1,3]
//Target array  : [1,1,1,2,3,4]
//On index 2 (0-based) we have 4 vs 1 so we have to move this student.
//On index 4 (0-based) we have 1 vs 3 so we have to move this student.
//On index 5 (0-based) we have 3 vs 4 so we have to move this student.
// 
//
// Example 2: 
//
// 
//Input: heights = [5,1,2,3,4]
//Output: 5
// 
//
// Example 3: 
//
// 
//Input: heights = [1,2,3,4,5]
//Output: 0
// 
//
// 
// Constraints: 
//
// 
// 1 <= heights.length <= 100 
// 1 <= heights[i] <= 100 
// 
// Related Topics Array 
// 👍 232 👎 1372


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights)
    {
        $sorted = $heights;
        sort($sorted);
        $diff = 0;
        for ($i = 0; $i < count($sorted); $i++) {
            if ($sorted[$i] != $heights[$i]) {
                $diff++;
            }
        }

        return $diff;
    }
}

//leetcode submit region end(Prohibit modification and deletion)

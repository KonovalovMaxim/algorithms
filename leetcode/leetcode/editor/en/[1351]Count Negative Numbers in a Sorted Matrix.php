<?php
//Given a m * n matrix grid which is sorted in non-increasing order both row-wis
//e and column-wise.
//
// Return the number of negative numbers in grid. 
//
// 
// Example 1: 
//
// 
//Input: grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]]
//Output: 8
//Explanation: There are 8 negatives number in the matrix.
// 
//
// Example 2: 
//
// 
//Input: grid = [[3,2],[1,0]]
//Output: 0
// 
//
// Example 3: 
//
// 
//Input: grid = [[1,-1],[-1,-1]]
//Output: 3
// 
//
// Example 4: 
//
// 
//Input: grid = [[-1]]
//Output: 1
// 
//
// 
// Constraints: 
//
// 
// m == grid.length 
// n == grid[i].length 
// 1 <= m, n <= 100 
// -100 <= grid[i][j] <= 100 
// Related Topics Array Binary Search 
// 👍 404 👎 25


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid)
    {
        $counter = 0;
        $n = count($grid);
        $m = count($grid[0]);
        for ($i = $n - 1; $i >= 0; $i--) {
            for ($j = $m - 1; $j >= 0; $j--) {
                if ($grid[$i][$j] < 0) {
                    $counter++;
                } else {
                    break;
                }
            }
        }

        return $counter;
    }
}

//leetcode submit region end(Prohibit modification and deletion)
$result = (new Solution())->countNegatives([[5, 1, 0], [-5, -5, -5]]);
var_dump($result);

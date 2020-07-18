<?php
//Given n and m which are the dimensions of a matrix initialized by zeros and gi
//ven an array indices where indices[i] = [ri, ci]. For each pair of [ri, ci] you 
//have to increment all cells in row ri and column ci by 1. 
//
// Return the number of cells with odd values in the matrix after applying the i
//ncrement to all indices. 
//
// 
// Example 1: 
//
// 
//Input: n = 2, m = 3, indices = [[0,1],[1,1]]
//Output: 6
//Explanation: Initial matrix = [[0,0,0],[0,0,0]].
//After applying first increment it becomes [[1,2,1],[0,1,0]].
//The final matrix will be [[1,3,1],[1,3,1]] which contains 6 odd numbers.
// 
//
// Example 2: 
//
// 
//Input: n = 2, m = 2, indices = [[1,1],[0,0]]
//Output: 0
//Explanation: Final matrix = [[2,2],[2,2]]. There is no odd number in the final
// matrix.
// 
//
// 
// Constraints: 
//
// 
// 1 <= n <= 50 
// 1 <= m <= 50 
// 1 <= indices.length <= 100 
// 0 <= indices[i][0] < n 
// 0 <= indices[i][1] < m 
// 
// Related Topics Array 
// 👍 263 👎 423


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{
    /**
     * @param Integer $n
     * @param Integer $m
     * @param Integer[][] $indices
     * @return Integer
     */
    function oddCells($n, $m, $indices)
    {
        $rows = [];
        $cols = [];
        $totalOddCols = 0;
        $totalEvenCols = 0;
        foreach ($indices as $row) {
            if (!array_key_exists($row[0], $cols)) {
                $cols[$row[0]] = 1;
            } else {
                $cols[$row[0]]++;
            }
            if (!array_key_exists($row[1], $rows)) {
                $rows[$row[1]] = 1;
            } else {
                $rows[$row[1]]++;
            }
        }
        foreach ($cols as $num) {
            if ($num % 2 == 0) {
                $totalEvenCols++;
            } else {
                $totalOddCols++;
            }
        }

        //Количество нечётных элементов пока равно кол-ву нечётных колонок умноженное на длину колонки
        $total = $totalOddCols * $m;
        foreach ($rows as $num) {
            //Если строка чётная то она ничего не меняет например 1+2=3 как было нечётным так и осталось, кроме нолей 0+1=1
            //Но если строка чётная она меняет всё наоборот 1+1 = 2
            if ($num % 2 == 1) {
                //Потому из общего числа отнимаем кол-во нечётных колонок, потому что они стали чётными
                $total -= $totalOddCols;
                //и прибавляем кол-во чётных колонок потому что они стали чётными
                $total += $totalEvenCols;
                //тут прибавляем кол-во нулевых колонок если такие вообще есть
                $total += ($n - $totalEvenCols - $totalOddCols);
            }
        }
        return $total;
    }
}

//leetcode submit region end(Prohibit modification and deletion)
var_dump((new Solution())->oddCells(2, 3, [[0, 1], [1, 1]]));
var_dump((new Solution())->oddCells(2, 2, [[1, 1], [0, 0]]));
var_dump((new Solution())->oddCells(48, 37, [[40,5]])); //			Expected:83


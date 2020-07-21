<?php
//You are given the array paths, where paths[i] = [cityAi, cityBi] means there e
//xists a direct path going from cityAi to cityBi. Return the destination city, th
//at is, the city without any path outgoing to another city. 
//
// It is guaranteed that the graph of paths forms a line without any loop, there
//fore, there will be exactly one destination city. 
//
// 
// Example 1: 
//
// 
//Input: paths = [["London","New York"],["New York","Lima"],["Lima","Sao Paulo"]
//]
//Output: "Sao Paulo" 
//Explanation: Starting at "London" city you will reach "Sao Paulo" city which i
//s the destination city. Your trip consist of: "London" -> "New York" -> "Lima" -
//> "Sao Paulo".
// 
//
// Example 2: 
//
// 
//Input: paths = [["B","C"],["D","B"],["C","A"]]
//Output: "A"
//Explanation: All possible trips are: 
//"D" -> "B" -> "C" -> "A". 
//"B" -> "C" -> "A". 
//"C" -> "A". 
//"A". 
//Clearly the destination city is "A".
// 
//
// Example 3: 
//
// 
//Input: paths = [["A","Z"]]
//Output: "Z"
// 
//
// 
// Constraints: 
//
// 
// 1 <= paths.length <= 100 
// paths[i].length == 2 
// 1 <= cityAi.length, cityBi.length <= 10 
// cityAi != cityBi 
// All strings consist of lowercase and uppercase English letters and the space 
//character. 
// 
// Related Topics String 
// 👍 233 👎 19


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths, $currentCity = null)
    {
        foreach ($paths as $path) {
            if ($currentCity === null) {
                return $this->destCity($paths, $path[1]);
            }
            if ($currentCity == $path[0]) {
                return $this->destCity($paths, $path[1]);
            }
        }
        return $currentCity;
    }
}
//leetcode submit region end(Prohibit modification and deletion)
$result = (new Solution())->destCity( [["B","C"],["D","B"],["C","A"]]);
var_dump($result);

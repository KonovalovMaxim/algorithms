<?php
//
//Suppose Andy and Doris want to choose a restaurant for dinner, and they both h
//ave a list of favorite restaurants represented by strings. 
// 
// 
//You need to help them find out their common interest with the least list index
// sum. If there is a choice tie between answers, output all of them with no order
// requirement. You could assume there always exists an answer.
// 
//
//
// Example 1: 
// 
//Input:
//["Shogun", "Tapioca Express", "Burger King", "KFC"]
//["Piatti", "The Grill at Torrey Pines", "Hungry Hunter Steakhouse", "Shogun"]
//Output: ["Shogun"]
//Explanation: The only restaurant they both like is "Shogun".
// 
// 
//
// Example 2: 
// 
//Input:
//["Shogun", "Tapioca Express", "Burger King", "KFC"]
//["KFC", "Shogun", "Burger King"]
//Output: ["Shogun"]
//Explanation: The restaurant they both like and have the least index sum is "Sh
//ogun" with index sum 1 (0+1).
// 
// 
//
//
// Note: 
// 
// The length of both lists will be in the range of [1, 1000]. 
// The length of strings in both lists will be in the range of [1, 30]. 
// The index is starting from 0 to the list length minus 1. 
// No duplicates in both lists. 
// 
// Related Topics Hash Table 
// 👍 622 👎 204


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {

        $map1 = [];
        foreach($list1 as $key=>$val) {
            $map1[$val] = $key;
        }
        $map2 = [];
        foreach($list2 as $key=>$val) {
            $map2[$val] = $key;
        }
        $map = [];
        foreach($map1 as $key=>$val) {
            if(isset($map2[$key])) {
                $map[$key] = $val + $map2[$key];
            }
        }
        $min = min($map);
        $result = [];
        foreach($map as $key=>$value) {
            if($value == $min) {
                $result[] = $key;
            }
        }
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

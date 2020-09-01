<?php
//Let's define a function f(s) over a non-empty string s, which calculates the f
//requency of the smallest character in s. For example, if s = "dcce" then f(s) = 
//2 because the smallest character is "c" and its frequency is 2. 
//
// Now, given string arrays queries and words, return an integer array answer, w
//here each answer[i] is the number of words such that f(queries[i]) < f(W), where
// W is a word in words. 
//
// 
// Example 1: 
//
// 
//Input: queries = ["cbd"], words = ["zaaaz"]
//Output: [1]
//Explanation: On the first query we have f("cbd") = 1, f("zaaaz") = 3 so f("cbd
//") < f("zaaaz").
// 
//
// Example 2: 
//
// 
//Input: queries = ["bbb","cc"], words = ["a","aa","aaa","aaaa"]
//Output: [1,2]
//Explanation: On the first query only f("bbb") < f("aaaa"). On the second query
// both f("aaa") and f("aaaa") are both > f("cc").
// 
//
// 
// Constraints: 
//
// 
// 1 <= queries.length <= 2000 
// 1 <= words.length <= 2000 
// 1 <= queries[i].length, words[i].length <= 10 
// queries[i][j], words[i][j] are English lowercase letters. 
// 
// Related Topics Array String 
// 👍 254 👎 653


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    private $cache = [];
    /**
     * @param String[] $queries
     * @param String[] $words
     * @return Integer[]
     */
    function numSmallerByFrequency($queries, $words) {
        $result = [];
        for($i=0;$i<count($queries); $i++) {
            $counter = 0;
            for($j=0;$j<count($words);$j++) {
                if($this->f($queries[$i]) < $this->f($words[$j])) {
                    $counter++;
                }
            }
            $result[] = $counter;
        }

        return $result;
    }

    function f($w) {
        if(isset($this->cache[$w])) {
            return $this->cache[$w];
        }
        $word = str_split($w);
        $map = [];
        $min = PHP_INT_MAX;
        foreach($word as $char) {
            $num = ord($char);
            if(!isset($map[$num])) {
                $map[$num] = 1;
            } else {
                $map[$num]++;
            }
            $min = min($num, $min);
        }
        $this->cache[$w] = $map[$min];
        return $map[$min];
    }
}
//leetcode submit region end(Prohibit modification and deletion)

<?php
//Given a List of words, return the words that can be typed using letters of alp
//habet on only one row's of American keyboard like the image below. 
//
// 
//
// 
// 
//
// Example: 
//
// 
//Input: ["Hello", "Alaska", "Dad", "Peace"]
//Output: ["Alaska", "Dad"]
// 
//
// 
//
// Note: 
//
// 
// You may use one character in the keyboard more than once. 
// You may assume the input string will only contain letters of alphabet. 
// 
// Related Topics Hash Table 
// 👍 546 👎 660


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words)
    {
        $rows = [
            'qwertyuiopQWERTYUIOP',
            'asdfghjklASDFGHJKL',
            'zxcvbnmZXCVBNM'
        ];
        $result = [];
        foreach ($words as $word) {
            $ok = true;
            $currentRow = null;
            for ($i = 0; $i < strlen($word); $i++) {
                foreach ($rows as $index => $row) {
                    if (strpos($row, $word[$i]) !== false) {
                        if (is_null($currentRow)) {
                            $currentRow = $index;
                        } else {
                            if ($index != $currentRow) {
                                $ok = false;
                                break 2;
                            }
                        }
                    }
                }
            }
            if ($ok) {
                $result[] = $word;
            }
        }
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

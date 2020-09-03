<?php
//Given two non-negative integers num1 and num2 represented as string, return th
//e sum of num1 and num2. 
//
// Note:
// 
// The length of both num1 and num2 is < 5100. 
// Both num1 and num2 contains only digits 0-9. 
// Both num1 and num2 does not contain any leading zero. 
// You must not use any built-in BigInteger library or convert the inputs to int
//eger directly. 
// 
// Related Topics String 
// 👍 1143 👎 295


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
        $num1 = array_reverse(str_split($num1));
        $num2 = array_reverse(str_split($num2));
        $mem = 0;
        $max = max(count($num1),count($num2));
        $result = [];
        for ($i = 0;$i<$max;$i++) {
            $a = isset($num1[$i]) ? $num1[$i] :0;
            $b = isset($num2[$i]) ? $num2[$i] :0;
            $sum = $a+$b+$mem;
            if($sum>=10) {
                $result[] = $sum % 10;
                $mem = 1;
            } else {
                $result[] =$sum;
                $mem = 0;
            }
        }
        if($mem == 1) {
            $result[] = 1;
        }
        return implode(array_reverse($result));
    }
}
//leetcode submit region end(Prohibit modification and deletion)

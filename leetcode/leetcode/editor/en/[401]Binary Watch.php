<?php
//A binary watch has 4 LEDs on the top which represent the hours (0-11), and the
// 6 LEDs on the bottom represent the minutes (0-59). 
// Each LED represents a zero or one, with the least significant bit on the righ
//t. 
//
// For example, the above binary watch reads "3:25". 
//
// Given a non-negative integer n which represents the number of LEDs that are c
//urrently on, return all possible times the watch could represent. 
//
// Example:
// Input: n = 1 Return: ["1:00", "2:00", "4:00", "8:00", "0:01", "0:02", "0:04",
// "0:08", "0:16", "0:32"] 
// 
//
// Note: 
// 
// The order of output does not matter. 
// The hour must not contain a leading zero, for example "01:00" is not valid, i
//t should be "1:00". 
// The minute must be consist of two digits and may contain a leading zero, for 
//example "10:2" is not valid, it should be "10:02". 
// 
// Related Topics Backtracking Bit Manipulation 
// 👍 605 👎 1037


//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    private $permutations = [];

    /**
     * @param Integer $num
     * @return String[]
     */
    function readBinaryWatch($num) {
        if($num ==0) {
            return ['0:00'];
        }
        $this->walk('', 0,0, $num);
        $result = [];
        foreach($this->permutations as $binaryStr) {
            $time = $this->convertToTime($binaryStr);
            if($time !== false) {
                $result[] = $time;
            }
        }
        return $result;
    }

    function convertToTime(string $s) {
        $hour = bindec(substr($s, 0,4));
        $minute = bindec(substr($s,4,strlen($s)));
        if(strlen($minute) <= 1) {
            $minute = '0'.$minute;
        }
        if($hour >= 12) {
            return false;
        }
        if($minute >= 60) {
            return false;
        }
        return $hour .':'.$minute;
    }

    function walk($str, $ones,$zeros, $num) {
        if(strlen($str) == 10) {
            $this->permutations[] = $str;
            return;
        }

        if($zeros<(10-$num)){
            $this->walk($str.'0', $ones, $zeros+1, $num);
        }
        if($ones < $num) {
            $this->walk($str.'1', $ones+1, $zeros, $num);
        }
    }
}
//leetcode submit region end(Prohibit modification and deletion)

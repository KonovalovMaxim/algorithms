<?php
//Write a program that outputs the string representation of numbers from 1 to n.
// 
//
// But for multiples of three it should output “Fizz” instead of the number and 
//for the multiples of five output “Buzz”. For numbers which are multiples of both
// three and five output “FizzBuzz”. 
//
// Example:
// 
//n = 15,
//
//Return:
//[
//    "1",
//    "2",
//    "Fizz",
//    "4",
//    "Buzz",
//    "Fizz",
//    "7",
//    "8",
//    "Fizz",
//    "Buzz",
//    "11",
//    "Fizz",
//    "13",
//    "14",
//    "FizzBuzz"
//]
// 
// 👍 897 👎 1187


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n)
    {
        $result = range(1, $n);
        $i = 3;
        while ($i <= $n) {
            $result[$i - 1] = 'Fizz';
            $i += 3;
        }
        $i = 5;
        while ($i <= $n) {
            if ($result[$i - 1] == 'Fizz') {
                $result[$i - 1] = 'FizzBuzz';
            } else {
                $result[$i - 1] = 'Buzz';
            }
            $i += 5;
        }
        $result = array_map('strval', $result);
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

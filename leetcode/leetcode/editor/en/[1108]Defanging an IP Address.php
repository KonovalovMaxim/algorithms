<?php
//Given a valid (IPv4) IP address, return a defanged version of that IP address.
// 
//
// A defanged IP address replaces every period "." with "[.]". 
//
// 
// Example 1: 
// Input: address = "1.1.1.1"
//Output: "1[.]1[.]1[.]1"
// Example 2: 
// Input: address = "255.100.50.0"
//Output: "255[.]100[.]50[.]0"
// 
// 
// Constraints: 
//
// 
// The given address is a valid IPv4 address. 
// Related Topics String 
// 👍 399 👎 820


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address)
    {
        return str_replace('.', '[.]', $address);
    }
}
//leetcode submit region end(Prohibit modification and deletion)

print((new Solution())->defangIPaddr('1.1.1.1'));

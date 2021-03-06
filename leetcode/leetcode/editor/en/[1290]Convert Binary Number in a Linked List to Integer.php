<?php
//Given head which is a reference node to a singly-linked list. The value of eac
//h node in the linked list is either 0 or 1. The linked list holds the binary rep
//resentation of a number. 
//
// Return the decimal value of the number in the linked list. 
//
// 
// Example 1: 
//
// 
//Input: head = [1,0,1]
//Output: 5
//Explanation: (101) in base 2 = (5) in base 10
// 
//
// Example 2: 
//
// 
//Input: head = [0]
//Output: 0
// 
//
// Example 3: 
//
// 
//Input: head = [1]
//Output: 1
// 
//
// Example 4: 
//
// 
//Input: head = [1,0,0,1,0,0,1,1,1,0,0,0,0,0,0]
//Output: 18880
// 
//
// Example 5: 
//
// 
//Input: head = [0,0]
//Output: 0
// 
//
// 
// Constraints: 
//
// 
// The Linked List is not empty. 
// Number of nodes will not exceed 30. 
// Each node's value is either 0 or 1. 
// Related Topics Linked List Bit Manipulation 
// 👍 440 👎 36

/**
 * Definition for a singly-linked list.
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

//leetcode submit region begin(Prohibit modification and deletion)

class Solution
{

    /**
     * @param ListNode $head
     * @return Integer
     */
    function getDecimalValue($head)
    {
        $str = '';
        while ($head) {
            $str .= $head->val;
            $head = $head->next;
        }
        return bindec($str);
    }
}
//leetcode submit region end(Prohibit modification and deletion)

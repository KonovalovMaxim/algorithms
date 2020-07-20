<?php
//Reverse a singly linked list.
//
// Example: 
//
// 
//Input: 1->2->3->4->5->NULL
//Output: 5->4->3->2->1->NULL
// 
//
// Follow up: 
//
// A linked list can be reversed either iteratively or recursively. Could you im
//plement both? 
// Related Topics Linked List 
// 👍 4591 👎 91

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
     * @return ListNode
     */
    function reverseList($head)
    {
        $len = 0;
        $runner = $head;
        while ($runner) {
            $len++;
            $runner = $runner->next;
        }
        $result = null;
        for ($i = 0; $i < $len; $i++) {
            $runner = $head;
            $prev = null;
            while ($runner->next) {
                $prev = $runner;
                $runner = $runner->next;
            }
            if ($prev !== null) {
                unset($prev->next);
            }
            $this->append($result, $runner);
        }
        return $result;
    }


    function append(ListNode &$head = null, ListNode $element)
    {
        if ($head == null) {
            $head = $element;
            return;
        }
        if ($head->next === null) {
            $head->next = $element;
        } else {
            $this->append($head->next, $element);
        }
    }
}

//leetcode submit region end(Prohibit modification and deletion)
$res = (new Solution())->reverseList(new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5))))));

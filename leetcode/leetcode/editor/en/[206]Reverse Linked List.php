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
        return $this->reverseListRecursive($head);
    }

    function reverseListIterative(ListNode $head)
    {
        $result = null;
        while ($head) {
            $result = new ListNode($head->val, $result);
            $head = $head->next;
        }
        return $result;
    }

    function reverseListRecursive(?ListNode $head, ?ListNode $prev = null)
    {
        $next = $head->next;
        $head->next = $prev;
        if ($next) {
            return $this->reverseListRecursive($next, $head);
        }
        return $head;
    }
}

//leetcode submit region end(Prohibit modification and deletion)
$list = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
$res = (new Solution())->reverseList($list);

var_dump($res);

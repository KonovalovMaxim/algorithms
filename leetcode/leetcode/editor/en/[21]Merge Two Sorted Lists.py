# Merge two sorted linked lists and return it as a new sorted list. The new list
#  should be made by splicing together the nodes of the first two lists. 
# 
#  Example: 
# 
#  
# Input: 1->2->4, 1->3->4
# Output: 1->1->2->3->4->4
#  
#  Related Topics Linked List


# leetcode submit region begin(Prohibit modification and deletion)
# Definition for singly-linked list.
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next

class Solution:
    def mergeTwoLists(self, l1: ListNode, l2: ListNode) -> ListNode:
        result = runner = ListNode(0)
        while l1 or l2:
            if l1 and l2:
                if l1.val < l2.val:
                    runner.next = ListNode(l1.val)
                    runner = runner.next
                    l1 = l1.next
                else:
                    runner.next = ListNode(l2.val)
                    runner = runner.next
                    l2 = l2.next
            else:
                while l1:
                    runner.next = ListNode(l1.val)
                    runner = runner.next
                    l1 = l1.next

                while l2:
                    runner.next = ListNode(l2.val)
                    runner = runner.next
                    l2 = l2.next

        return result.next


# leetcode submit region end(Prohibit modification and deletion)
l1 = ListNode(1, ListNode(2, ListNode(4)))
l2 = ListNode(1, ListNode(3, ListNode(4)))

result = Solution().mergeTwoLists(l1, l2)
pass

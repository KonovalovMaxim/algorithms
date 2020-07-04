# Given a linked list, remove the n-th node from the end of list and return its 
# head. 
# 
#  Example: 
# 
#  
# Given linked list: 1->2->3->4->5, and n = 2.
# 
# After removing the second node from the end, the linked list becomes 1->2->3->
# 5.
#  
# 
#  Note: 
# 
#  Given n will always be valid. 
# 
#  Follow up: 
# 
#  Could you do this in one pass? 
#  Related Topics Linked List Two Pointers


# leetcode submit region begin(Prohibit modification and deletion)
# Definition for singly-linked list.
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next


class Solution:
    def removeNthFromEnd(self, head: ListNode, n: int) -> ListNode:
        count = 0
        copy = head
        while copy:
            copy = copy.next
            count += 1
        result = copy = ListNode(0)
        i = 0
        while head:
            if i != count-n:
                copy.next = ListNode(head.val)
                copy = copy.next
            head = head.next
            i += 1
        return result.next

# leetcode submit region end(Prohibit modification and deletion)

# You are given two non-empty linked lists representing two non-negative integer
# s. The digits are stored in reverse order and each of their nodes contain a sing
# le digit. Add the two numbers and return it as a linked list. 
# 
#  You may assume the two numbers do not contain any leading zero, except the nu
# mber 0 itself. 
# 
#  Example: 
# 
#  
# Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
# Output: 7 -> 0 -> 8
# Explanation: 342 + 465 = 807.
#  
#  Related Topics Linked List Math


# leetcode submit region begin(Prohibit modification and deletion)
# Definition for singly-linked list.
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next


class Solution:
    def addTwoNumbers(self, l1: ListNode, l2: ListNode) -> ListNode:
        result = runner = ListNode(0)
        register = 0
        while l1 or l2:
            sum = 0
            if l1:
                sum += l1.val
                l1 = l1.next
            if l2:
                sum += l2.val
                l2 = l2.next
            sum += register
            runner.next = ListNode(sum % 10)
            runner = runner.next
            register = sum // 10

        if register > 0:
            runner.next = ListNode(register)
            runner = runner.next

        return result.next

# leetcode submit region end(Prohibit modification and deletion)

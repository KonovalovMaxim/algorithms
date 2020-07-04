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
            if l1 and l2:
                currentValue = l1.val + l2.val + register
                if currentValue >= 10:
                    currentValue = currentValue % 10
                    register = 1
                else:
                    register = 0
                runner.next = ListNode(currentValue)
                runner = runner.next
                l1 = l1.next
                l2 = l2.next
            else:
                while l1:
                    currentValue = l1.val + register
                    if currentValue >= 10:
                        currentValue = currentValue % 10
                        register = 1
                    else:
                        register = 0
                    runner.next = ListNode(currentValue)
                    runner = runner.next
                    l1 = l1.next
                while l2:
                    currentValue = l2.val + register
                    if currentValue >= 10:
                        currentValue = currentValue % 10
                        register = 1
                    else:
                        register = 0
                    runner.next = ListNode(currentValue)
                    runner = runner.next
                    l2 = l2.next

        if register == 1:
            runner.next = ListNode(1)
            runner = runner.next

        return result.next

# leetcode submit region end(Prohibit modification and deletion)
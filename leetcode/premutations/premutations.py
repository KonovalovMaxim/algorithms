# https://leetcode.com/problems/permutations/submissions/
from typing import List


class Solution:
    def permute(self, nums: List[int]) -> List[List[int]]:
        arrays = self.combine([], nums)
        result = []
        for row in arrays:
            if len(row) == len(nums):
                result.append(row)
        return result

    def combine(self, head: List[int], tail: List[int]):
        arrays = []
        for i in range(len(tail)):
            newTail = tail.copy()
            newHead = head.copy()
            newHead.append(newTail.pop(i))
            arrays.append(newHead)
            arrays += self.combine(newHead, newTail)
        return arrays


solution = Solution()

print(solution.permute([1, 2, 3]))

# Given an array nums of n integers, are there elements a, b, c in nums such tha
# t a + b + c = 0? Find all unique triplets in the array which gives the sum of ze
# ro. 
# 
#  Note: 
# 
#  The solution set must not contain duplicate triplets. 
# 
#  Example: 
# 
#  
# Given array nums = [-1, 0, 1, 2, -1, -4],
# 
# A solution set is:
# [
#   [-1, 0, 1],
#   [-1, -1, 2]
# ]
#  
#  Related Topics Array Two Pointers


# leetcode submit region begin(Prohibit modification and deletion)
from typing import List

""" 
Сортировать массив
i L-> <- R - вот так вот расположены индесы 
    L - двигается в перёд если сумма меньше ноля 
    R - двигается назад если сумма больше ноля 
    это для каждого i
    Пропускать одинаковые рядом стоящие цифры чтобы не допускать повторений
"""


class Solution:
    def threeSum(self, nums: List[int]) -> List[List[int]]:
        triples = []
        nums.sort()
        for i in range(len(nums) - 2):
            if i > 0 and nums[i] == nums[i - 1]:
                continue
            l = i + 1
            r = len(nums) - 1
            while l < r:
                sum = nums[i] + nums[l] + nums[r]
                if sum < 0:
                    l += 1
                elif sum > 0:
                    r -= 1
                else:
                    triples.append([nums[i], nums[l], nums[r]])
                    while r > 0 and nums[r] == nums[r - 1]:
                        r -= 1
                    while l < len(nums) - 1 and nums[l] == nums[l + 1]:
                        l += 1
                    r -= 1
                    l += 1
        return triples


solution = Solution()
# result = solution.threeSum([-1, 0, 1, 2, -1, -4])
# result = solution.threeSum([0, 0, 0])
# result = solution.threeSum([-4, -2, 1, -5, -4, -4, 4, -2, 0, 4, 0, -2, 3, 1, -5, 0])
result = solution.threeSum(
    [11, 3, 13, -14, 12, -13, 14, -7, -1, 14, 5, -15, -11, -15, 9, 11, -6, -11, -15, -5, -3, 5, -7, 10, 11, 11, -10, -3,
     -4, 8, -15, -15, -4, 6, 8, -6, 8, 7, -6, -8, 6, 6, -8, 11, -1, 8, -1, 8, 13, -1, -11, -5, -11, -3, 12, 8, -15, -13,
     -10, -11, 3, 12, 11, 14, 3, 4, -15, -4, -4, -13, -5, 9, 8, 2, -3, -8, -12, 12, -14, -14, -12, 12, -12, -7, -14, 8,
     8, 9, 10, 13, 13, -10, 2, 9, -10, -9, -10, 12, 2, 1, 14, 13, -13, 8, -8, 0, 7, -5, -11, 0, -12, -8, -11, -8, -8,
     -9, -15, -15])
print(result)

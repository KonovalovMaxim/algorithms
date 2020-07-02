# Given n non-negative integers a1, a2, ..., an , where each represents a point 
# at coordinate (i, ai). n vertical lines are drawn such that the two endpoints of
#  line i is at (i, ai) and (i, 0). Find two lines, which together with x-axis for
# ms a container, such that the container contains the most water. 
# 
#  Note: You may not slant the container and n is at least 2. 
# 
#  
# 
#  
# 
#  The above vertical lines are represented by array [1,8,6,2,5,4,8,3,7]. In thi
# s case, the max area of water (blue section) the container can contain is 49. 
# 
#  
# 
#  Example: 
# 
#  
# Input: [1,8,6,2,5,4,8,3,7]
# Output: 49 Related Topics Array Two Pointers


# leetcode submit region begin(Prohibit modification and deletion)
from typing import List


class Solution:
    def maxArea(self, height: List[int]) -> int:
        r = len(height) - 1
        l = 0
        maxArea = min(height[r], height[l]) * (r - l)
        return self.search(height, l, r, maxArea)

    def search(self, height: List[int], left: int, right: int, currentMax: int) -> int:
        if left == right:
            return currentMax
        area = min(height[right], height[left]) * (right - left)
        currentMax = max(currentMax, area)
        if height[left] < height[right]:
            return self.search(height, left + 1, right, currentMax)
        else:
            return self.search(height, left, right - 1, currentMax)


# leetcode submit region end(Prohibit modification and deletion)
result = Solution().maxArea([1, 8, 6, 2, 5, 4, 8, 3, 7])
print(result)

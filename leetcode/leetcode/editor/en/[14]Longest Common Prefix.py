# Write a function to find the longest common prefix string amongst an array of 
# strings. 
# 
#  If there is no common prefix, return an empty string "". 
# 
#  Example 1: 
# 
#  
# Input: ["flower","flow","flight"]
# Output: "fl"
#  
# 
#  Example 2: 
# 
#  
# Input: ["dog","racecar","car"]
# Output: ""
# Explanation: There is no common prefix among the input strings.
#  
# 
#  Note: 
# 
#  All given inputs are in lowercase letters a-z. 
#  Related Topics String


# leetcode submit region begin(Prohibit modification and deletion)
from typing import List


class Solution:
    def longestCommonPrefix(self, strs: List[str]) -> str:
        currentIndex = 0
        if not strs:
            return ""
        while True:
            if len(strs[0]) - 1 < currentIndex:
                return strs[0][0:currentIndex]
            currentLetter = strs[0][currentIndex]
            for str in strs[1:len(strs)]:
                if len(str) - 1 < currentIndex:
                    return strs[0][0:currentIndex]
                if str[currentIndex] != currentLetter:
                    return strs[0][0:currentIndex]
            currentIndex += 1


# leetcode submit region end(Prohibit modification and deletion)

assert Solution().longestCommonPrefix(["dog", "dodo", "dock"]) == "do"
assert Solution().longestCommonPrefix(["abc", "zxc", "asd"]) == ""
assert Solution().longestCommonPrefix(["a", "a", "a"]) == "a"
assert Solution().longestCommonPrefix(["a", "aa", "aaa"]) == "a"
assert Solution().longestCommonPrefix(["b"]) == "b"
assert Solution().longestCommonPrefix([""]) == ""

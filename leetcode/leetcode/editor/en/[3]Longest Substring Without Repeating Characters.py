# Given a string, find the length of the longest substring without repeating cha
# racters. 
# 
#  
#  Example 1: 
# 
#  
# Input: "abcabcbb"
# Output: 3 
# Explanation: The answer is "abc", with the length of 3. 
#  
# 
#  
#  Example 2: 
# 
#  
# Input: "bbbbb"
# Output: 1
# Explanation: The answer is "b", with the length of 1.
#
# 
#  
#  Example 3: 
# 
#  
# Input: "pwwkew"
# Output: 3
# Explanation: The answer is "wke", with the length of 3. 
#              Note that the answer must be a substring, "pwke" is a subsequence
#  and not a substring.
#  
#  
#  
#  
#  Related Topics Hash Table Two Pointers String Sliding Window


# leetcode submit region begin(Prohibit modification and deletion)
class Solution:
    def lengthOfLongestSubstring(self, s: str) -> int:
        if len(s) == 0:
            return 0
        maxLength = 1
        j = 0
        for i in range(1, len(s)):
            while s[i] in s[j:i] and j < i:
                j += 1
            maxLength = max(maxLength, i - j + 1)
        return maxLength


# leetcode submit region end(Prohibit modification and deletion)
assert Solution().lengthOfLongestSubstring("abcabcbb") == 3
assert Solution().lengthOfLongestSubstring("bbbbb") == 1
assert Solution().lengthOfLongestSubstring("pwwkew") == 3
assert Solution().lengthOfLongestSubstring("") == 0
assert Solution().lengthOfLongestSubstring("     ") == 1
assert Solution().lengthOfLongestSubstring("a") == 1
assert Solution().lengthOfLongestSubstring("z") == 1
assert Solution().lengthOfLongestSubstring("aab") == 2
assert Solution().lengthOfLongestSubstring("dvdf") == 3
# assert Solution().lengthOfLongestSubstring("#$%^&*()!") == 3

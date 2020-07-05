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
        if not s:
            return 0
        maxCounter = 0
        counter = 0
        i = 0
        map = {}
        while i < len(s):
            if s[i] in map.keys():
                i = map[s[i]] + 1
                map = {}
                map[s[i]] = i
                counter = 1
            else:
                counter += 1
                map[s[i]] = i
            maxCounter = max(counter, maxCounter)
            i += 1
        return maxCounter


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

# Given a string s, find the longest palindromic substring in s. You may assume 
# that the maximum length of s is 1000. 
# 
#  Example 1: 
# 
#  
# Input: "babad"
# Output: "bab"
# Note: "aba" is also a valid answer.
#  
# 
#  Example 2: 
# 
#  
# Input: "cbbd"
# Output: "bb"
#  
#  Related Topics String Dynamic Programming 
#  👍 6890 👎 535


# leetcode submit region begin(Prohibit modification and deletion)
class Solution:
    def longestPalindrome(self, s: str) -> str:
        if not s:
            return ""
        if len(s) == 1:
            return s[0]
        start = 0
        end = 0
        for i in range(0, len(s)):
            even = self.check(s, i, i + 1)
            odd = self.check(s, i, i)

            current = max(even, odd)
            if current > end - start:
                start = i - int((current - 1) / 2)
                end = i + int(current / 2)

        return s[start:(end + 1)]

    def check(self, s: str, left: int, right: int) -> int:
        if left > right:
            return 0
        while left >= 0 and right < len(s) and s[left] == s[right]:
            left -= 1
            right += 1
        return right - left - 1


# leetcode submit region end(Prohibit modification and deletion)

assert Solution().longestPalindrome("babad") == "aba"
assert Solution().longestPalindrome("cbbd") == "bb"
assert Solution().longestPalindrome("") == ""
assert Solution().longestPalindrome("a") == "a"
assert Solution().longestPalindrome("ab") == "b"
assert Solution().longestPalindrome("bb") == "bb"
assert Solution().longestPalindrome("bab") == "bab"
assert Solution().longestPalindrome("abba") == "abba"
assert Solution().longestPalindrome("abbat") == "abba"
assert Solution().longestPalindrome("tabbat") == "tabbat"
assert Solution().longestPalindrome("ababa") == "ababa"
assert Solution().longestPalindrome("abababbbbbb") == "bbbbbb"
assert Solution().longestPalindrome("ababavcxzxcv") == "vcxzxcv"

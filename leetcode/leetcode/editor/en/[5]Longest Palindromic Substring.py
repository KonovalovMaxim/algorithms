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
        maxPalindrome = s[0]
        for i in range(0, len(s)):
            odd = self.checkOdd(s, i)
            even = self.checkEven(s, i)
            if len(odd) < len(even):
                current = even
            else:
                current = odd
            if len(maxPalindrome) < len(current):
                maxPalindrome = current
        return maxPalindrome

    def checkOdd(self, s: str, i: int) -> str:
        currentPalindrome = s[i]
        j = 1
        while i - j >= 0 and i + j < len(s):
            if s[i - j] == s[i + j]:
                currentPalindrome = s[i - j] + currentPalindrome + s[i - j]
            else:
                break
            j += 1
        return currentPalindrome

    def checkEven(self, s: str, i: int) -> str:
        if i + 1 < len(s) and s[i] == s[i + 1]:
            currentPalindrome = s[i] + s[i + 1]
            j = 1
            while i - j >= 0 and i + j + 1 < len(s):
                if s[i - j] == s[i + j + 1]:
                    currentPalindrome = s[i - j] + currentPalindrome + s[i + j + 1]
                else:
                    break
                j += 1
            return currentPalindrome
        else:
            return ""


# leetcode submit region end(Prohibit modification and deletion)

# print(Solution().longestPalindrome("babad"))
assert Solution().longestPalindrome("babad") == "bab"
assert Solution().longestPalindrome("cbbd") == "bb"
assert Solution().longestPalindrome("") == ""
assert Solution().longestPalindrome("a") == "a"
assert Solution().longestPalindrome("ab") == "a"
assert Solution().longestPalindrome("bb") == "bb"
assert Solution().longestPalindrome("bab") == "bab"
assert Solution().longestPalindrome("abba") == "abba"
assert Solution().longestPalindrome("abbat") == "abba"
assert Solution().longestPalindrome("tabbat") == "tabbat"
assert Solution().longestPalindrome("ababa") == "ababa"
assert Solution().longestPalindrome("abababbbbbb") == "bbbbbb"
assert Solution().longestPalindrome("ababavcxzxcv") == "vcxzxcv"


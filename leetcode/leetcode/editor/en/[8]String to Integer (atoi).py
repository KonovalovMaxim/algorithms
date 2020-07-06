# Implement atoi which converts a string to an integer. 
# 
#  The function first discards as many whitespace characters as necessary until 
# the first non-whitespace character is found. Then, starting from this character,
#  takes an optional initial plus or minus sign followed by as many numerical digi
# ts as possible, and interprets them as a numerical value. 
# 
#  The string can contain additional characters after those that form the integr
# al number, which are ignored and have no effect on the behavior of this function
# . 
# 
#  If the first sequence of non-whitespace characters in str is not a valid inte
# gral number, or if no such sequence exists because either str is empty or it con
# tains only whitespace characters, no conversion is performed. 
# 
#  If no valid conversion could be performed, a zero value is returned. 
# 
#  Note: 
# 
#  
#  Only the space character ' ' is considered as whitespace character. 
#  Assume we are dealing with an environment which could only store integers wit
# hin the 32-bit signed integer range: [−231, 231 − 1]. If the numerical value is 
# out of the range of representable values, INT_MAX (231 − 1) or INT_MIN (−231) is
#  returned. 
#  
# 
#  Example 1: 
# 
#  
# Input: "42"
# Output: 42
#  
# 
#  Example 2: 
# 
#  
# Input: "   -42"
# Output: -42
# Explanation: The first non-whitespace character is '-', which is the minus sig
# n.
#              Then take as many numerical digits as possible, which gets 42.
#  
# 
#  Example 3: 
# 
#  
# Input: "4193 with words"
# Output: 4193
# Explanation: Conversion stops at digit '3' as the next character is not a nume
# rical digit.
#  
# 
#  Example 4: 
# 
#  
# Input: "words and 987"
# Output: 0
# Explanation: The first non-whitespace character is 'w', which is not a numeric
# al 
#              digit or a +/- sign. Therefore no valid conversion could be perfo
# rmed. 
# 
#  Example 5: 
# 
#  
# Input: "-91283472332"
# Output: -2147483648
# Explanation: The number "-91283472332" is out of the range of a 32-bit signed 
# integer.
#              Thefore INT_MIN (−231) is returned. 
#  Related Topics Math String 
#  👍 1577 👎 9240


# leetcode submit region begin(Prohibit modification and deletion)
class Solution:
    def myAtoi(self, s: str) -> int:
        if not s:
            return 0
        okSymbols = ['-', '+', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0']
        first = True
        start = -1
        end = len(s)
        for i in range(len(s)):
            if first and s[i] == ' ':
                continue
            if (s[i] not in okSymbols) or (s[i] in ['+', '-'] and not first):
                if start == -1:
                    start = i
                end = i
                break
            if s[i] in okSymbols and first:
                start = i
                first = False

        if start == -1:
            return 0
        return self.convertToInt(s[start:end])

    def convertToInt(self, s: str) -> int:
        if len(s) == 0:
            return 0
        if '+' in s and '-' in s:
            return 0
        minus = 1
        if s[0] == '-':
            minus = -1

        number = 0
        for i in range(len(s)):
            if s[i] in ['-', '+', '0']:
                continue
            length = len(s) - i - 1
            digit = int(s[i])
            number += digit * (10 ** length)

            if number > 2147483647:
                if minus == -1:
                    return -2147483648
                else:
                    return 2147483647
        return number * minus


# leetcode submit region end(Prohibit modification and deletion)


assert Solution().myAtoi("+12345") == 12345
assert Solution().myAtoi("12345") == 12345
assert Solution().myAtoi("-12345") == -12345
assert Solution().myAtoi(" -12345") == -12345
assert Solution().myAtoi(" +12345") == +12345
assert Solution().myAtoi("w +12345") == 0
assert Solution().myAtoi(" w +12345") == 0
assert Solution().myAtoi(" 1 w +12345") == 1
assert Solution().myAtoi(" 1w +12345") == 1
assert Solution().myAtoi(" 1w +12345") == 1
assert Solution().myAtoi(" 11233 w +12345") == 11233
assert Solution().myAtoi(" 00011233 w +12345") == 11233
assert Solution().myAtoi(" +00011233 w +12345") == 11233
assert Solution().myAtoi(" -00011233 w +12345") == -11233
assert Solution().myAtoi("-91283472332") == -2147483648
assert Solution().myAtoi("+w") == 0
assert Solution().myAtoi("+ w") == 0
assert Solution().myAtoi("+--+-") == 0
assert Solution().myAtoi("     ") == 0
assert Solution().myAtoi("+++++++") == 0
assert Solution().myAtoi("-----") == 0
assert Solution().myAtoi("00000") == 0
assert Solution().myAtoi("00001") == 1
assert Solution().myAtoi("000010") == 10
assert Solution().myAtoi("+-2") == 0
assert Solution().myAtoi("2147483648") == 2147483647
assert Solution().myAtoi("0-1") == 0
assert Solution().myAtoi("-5-") == -5

#https://www.hackerrank.com/challenges/repeated-string/problem?h_l=interview&playlist_slugs%5B%5D%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D%5B%5D=warmup
def repeatedString(s, n):
    acount = s.count("a")
    l = len(s)
    result = acount * (n // l)
    result += s[0:(n - (n // l) * l)].count("a")
    return result


assert repeatedString("aba", 10) == 7

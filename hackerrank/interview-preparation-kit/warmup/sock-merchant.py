#https://www.hackerrank.com/challenges/sock-merchant?h_l=interview&playlist_slugs%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D=warmup

def sockMerchant(n, ar):
    colors = {}
    for sock in ar:
        if sock in colors:
            colors[sock] += 1
        else:
            colors[sock] = 1
    result = 0
    for color, number in colors.items():
        result += number // 2
    return result

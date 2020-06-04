#https://www.hackerrank.com/challenges/jumping-on-the-clouds/problem?h_l=interview&playlist_slugs%5B%5D%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D%5B%5D=warmup
def jumpingOnClouds(c):
    currentPosition = 0
    steps = [2, 1]
    jumps = 0
    while currentPosition < len(c) - 1:
        for step in steps:
            if (currentPosition + step) < len(c):
                if c[currentPosition + step] == 0:
                    currentPosition = currentPosition + step
                    jumps += 1
                    break
    return jumps
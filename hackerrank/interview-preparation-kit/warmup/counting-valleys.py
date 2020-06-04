# https://www.hackerrank.com/challenges/counting-valleys/problem?h_l=interview&playlist_slugs%5B%5D%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D%5B%5D=warmup
def countingValleys(n, s):
    SEA_LEVEL = 1
    currentLevel = 1
    numberOfValleys = 0
    for letter in s:
        if letter == 'U':
            currentLevel += 1
        else:
            currentLevel -= 1

        if currentLevel == SEA_LEVEL and letter == 'U':
            numberOfValleys += 1
    return numberOfValleys


assert countingValleys(8, "UDDDUDUU") == 1
assert countingValleys(12, "DDUUDDUDUUUD") == 2

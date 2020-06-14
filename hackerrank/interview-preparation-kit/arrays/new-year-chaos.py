#!/bin/python3

import math
import os
import random
import re
import sys


def minimumBribes(q):
    counter = 0
    map = [0] * len(q)
    i = len(q) - 1
    searchFor = len(q)
    while i > 0:
        if q[i] == searchFor:
            i -= 1
            searchFor -= 1
            continue
        j = (i - 1)
        while q[j] != searchFor:
            j -= 1
        tmp = q[j + 1]
        q[j + 1] = q[j]
        q[j] = tmp
        counter += 1
        map[searchFor - 1] += 1
        if map[searchFor - 1] > 2:
            return "Too chaotic"
    return counter


# print(minimumBribes([1, 2, 5, 3, 4, 7, 8, 6]))
print(minimumBribes([2, 5, 1, 3, 4]))

# if __name__ == '__main__':
#     file = open('./new-year-chaos/input03.txt')
#     t = int(file.readline())
#     out = ""
#     for t_itr in range(t):
#         n = int(file.readline())
#
#         q = list(map(int, file.readline().rstrip().split()))
#
#         out += str(minimumBribes(q)) + "\n"
#
# expected = open("./new-year-chaos/output03.txt").read()
# assert out.strip() == expected

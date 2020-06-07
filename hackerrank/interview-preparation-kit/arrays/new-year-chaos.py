#!/bin/python3

import math
import os
import random
import re
import sys


def minimumBribes(q):
    counter = 0
    map = [0] * len(q)
    currentIndex = 0
    while currentIndex < (len(q) - 1):
        if q[currentIndex+1] - q[currentIndex] == 1:
            currentIndex += 1
            continue
        for j in range(currentIndex, len(q) - 1):
            if q[j] > q[j + 1]:
                tmp = q[j + 1]
                q[j + 1] = q[j]
                q[j] = tmp
                map[q[j + 1] - 1] += 1
                counter += 1
                if map[q[j + 1] - 1] > 2 or map[q[j] - 1] > 2:
                    return "Too chaotic"

    return counter


if __name__ == '__main__':
    file = open('./new-year-chaos/input06.txt')
    t = int(file.readline())

    for t_itr in range(t):
        n = int(file.readline())

        q = list(map(int, file.readline().rstrip().split()))

        print(str(minimumBribes(q)))

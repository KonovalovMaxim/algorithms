#!/bin/python3

import math
import os
import random
import re
import sys


def minimumBribes(q):
    counter = 0
    map = [0] * len(q)
    for i in range(len(q)):
        for j in range(i, len(q) - 1):
            if q[j] > q[j + 1]:
                tmp = q[j + 1]
                q[j + 1] = q[j]
                q[j] = tmp
                if q[j + 1] < q[j]:
                    map[q[j] - 1] += 1
                else:
                    map[q[j + 1] - 1] += 1
                counter += 1
                if map[q[j + 1] - 1] > 2 or map[q[j] - 1] > 2:
                    return "Too chaotic"
    return counter


assert minimumBribes([1, 2, 5, 3, 7, 8, 6, 4]) == 7

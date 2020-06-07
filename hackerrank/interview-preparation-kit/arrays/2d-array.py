#!/bin/python3

import math
import os
import random
import re
import sys


# Complete the hourglassSum function below.
def hourglassSum(arr):
    hourGlassSize = (3, 3)
    maxSum = - float('inf')
    for i in range(len(arr) - hourGlassSize[0] + 1):
        for j in range(len(arr[i]) - hourGlassSize[1] + 1):
            sum = 0
            for glassI in range(i, i + hourGlassSize[0]):
                for glassJ in range(j, j + hourGlassSize[1]):
                    sum += arr[glassI][glassJ]
            sum -= arr[i + 1][j]
            sum -= arr[i + 1][j + 2]
            maxSum = max(maxSum, sum)
    return maxSum


if __name__ == '__main__':

    arr = []

    for _ in range(6):
        arr.append(list(map(int, input().rstrip().split())))

    result = hourglassSum(arr)
    print(str(result))

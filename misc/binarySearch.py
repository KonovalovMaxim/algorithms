from typing import List


def binarySearch(what: int, where: List[int], start=None, end=None) -> int:
    if start is None:
        start = 0
    if end is None:
        end = len(where) - 1
    if start == end and where[start] != what:
        return -1
    if end - start == 1:
        if where[start] == what:
            return start
        if where[end] == what:
            return end
        return -1
    mid = int((end + start) / 2)
    if where[mid] == what:
        return mid
    if where[mid] > what:
        return binarySearch(what, where, start, mid)
    else:
        return binarySearch(what, where, mid, end)

#!/usr/bin/env python


from time import time, sleep

def factorial(n) :
    if n <= 1 :
        return long(1)
    return n * factorial(n-1)


def iter_factorial(n) :
    _factorial = long(1)
    while n >= 1 :
        _factorial *= n
        n -= 1
    return _factorial

def timer(method, args, iterations=100000) :
    start = time()
    for i in range(iterations) :
        method(*args)
    stop = time()
    return stop - start

if __name__ == '__main__' :
    print 'iterative: ', timer(iter_factorial, [1000], 10)
    sleep(3)
    print 'recursive: ', timer(factorial, [1000], 10)

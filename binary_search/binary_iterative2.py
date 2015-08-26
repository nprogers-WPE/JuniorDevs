#!/usr/bin/env python

import string

alpha = list(string.ascii_lowercase)

def find_letter(letter, alpha=alpha) :
    start = 0
    end = len(alpha)
    while start != end :
        midpoint = start + ((end - start) / 2)
        if letter > alpha[midpoint] :
            start = midpoint + 1
            continue
        elif letter < alpha[midpoint] :
            end = midpoint
        else :
            return midpoint
    raise ValueError

print 'c ', find_letter('c') # 2
print 'r ', find_letter('r') # 17
print 'z ', find_letter('z') # 25
try :
    print find_letter('1')
except ValueError :
    print 'not found'

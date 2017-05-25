#!/usr/bin/env python

import string

alpha = list(string.ascii_lowercase)

def find_letter(letter, alpha=alpha) :
    alpha_slice = alpha[:]
    letter_index = 0
    while len(alpha_slice) >= 1 :
        midpoint = len(alpha_slice) / 2
        if letter > alpha_slice[midpoint] :
            letter_index += midpoint
            alpha_slice = alpha_slice[midpoint+1:]
            continue
        elif letter < alpha_slice[midpoint] :
            alpha_slice = alpha_slice[:midpoint]
            continue
        else :
            return letter_index + midpoint
    raise ValueError

print 'c ', find_letter('c') # 2
print 'r ', find_letter('r') # 17
print 'z ', find_letter('z') # 25
try :
    print find_letter('1')
except ValueError :
    print 'not found'


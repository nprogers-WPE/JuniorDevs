#!/usr/bin/env python

import string

alpha = list(string.ascii_lowercase)

def find_letter(letter, alpha=alpha) :
    midpoint = len(alpha) / 2
    if not alpha: raise ValueError
    if letter > alpha[midpoint] :
        unused_array_length = len(alpha[:midpoint])
        letter_index = unused_array_length + 1
        letter_index += find_letter(letter, alpha[midpoint+1:])
    elif letter < alpha[midpoint] :
        letter_index = find_letter(letter, alpha[:midpoint])
    else :
        letter_index = midpoint
    return letter_index

print find_letter('b') # 1
print find_letter('r') # 17
print find_letter('z') # 25
try :
    print find_letter('1')
except ValueError :
    print 'not found'


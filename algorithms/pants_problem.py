#!/usr/bin/env python
from string import join

class State(object) :
    def __init__(self, array, pointer) :
        self.array = array
        self.pointer = pointer

    def key(self) :
        array, pointer = self.array, self.pointer
        print array
        arr = join(array, '')
        key = "{arr}{pointer}".format(arr=arr, pointer=pointer)
        return key

test = State([1,2,3,4,5], 0)
print test.key()

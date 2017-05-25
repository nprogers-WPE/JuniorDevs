#!/usr/bin/env python

class Singleton(object) :
    instance = None
    def __init__(self) :
        if self.instance == None :
            self.instance = new _Singleton()

    def __getattr__(self, name):
        return self.instance(name)

    class _Singleton(object) :
        def __init__(self) :
            pass

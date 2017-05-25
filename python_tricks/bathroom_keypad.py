#!/usr/bin/env python3

import argparse

class Keypad() :
    keypad = [[ 1, 2, 3 ],
              [ 4, 5, 6 ],
              [ 7, 8, 9 ]]

    def __call__(self, path) :
        vertex = (1,1)
        for direction in path :
            vertex = self.go(vertex, direction)
        return self.get_number(*vertex)

    def go(self, vertex, direction) :
        x,y = vertex
        direction = direction.upper()
        if direction == "U" :
            return x, self.decrement(y)
        if direction == "D" :
            return x, self.increment(y)
        if direction == "L" :
            return self.decrement(x), y
        if direction == "R" :
            return self.increment(x), y
        raise Exception("Bad Direction")

    def increment(self, n) :
        try :
            return get_number(n+1 if n+1 <=2 else 2

    def decrement(self, n) :
        return n-1 if n-1 >=0 else 0

    def get_number(self, x, y) :
        return self.keypad[y][x]


def main(paths) :
    k = Keypad()
    for path in paths :
        print(k(path))

if __name__ == "__main__" :
    parser = argparse.ArgumentParser()
    parser.add_argument("paths", nargs="+")
    args = parser.parse_args()
    main(args.paths)

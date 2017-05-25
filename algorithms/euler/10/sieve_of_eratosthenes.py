#!/usr/bin/python3

def find_primes_under() :
    n = 2000000
    known_numbers = [0 for x in range(n+1)]
    primes = []
    total = 0

    for i in range(2, n) :
        if known_numbers[i] == 0 :
            primes.append(i)
            total += i

        for j in primes :
            num = j*i
            if num > n :
                break
            known_numbers[num] = 1

    # print(primes)
    return total

print(find_primes_under())

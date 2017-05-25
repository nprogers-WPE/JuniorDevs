#!/usr/bin/env python3

class RomanNumerals(object) :
    mapping = {
        1    : 'I', 5    : 'V',
        10   : 'X', 50   : 'L',
        100  : 'C', 500  : 'D',
        1000 : 'M'
    }

    @staticmethod
    def numeralize(n) :
        if n > 3000 :
            raise ValueError('Numbers greater than 3000 not supported')
        split_num = list(str(n))
        digit_tuple_stack = [((10 ** idx), int(i)) for idx, i in enumerate(reversed(split_num))]
        numeral = ''
        while digit_tuple_stack :
            numeral += RomanNumerals.get_numeral(*digit_tuple_stack.pop())
        return numeral

    @staticmethod
    def get_numeral(base, times = 1) :
        num = times * base
        if num not in RomanNumerals.mapping :
            RomanNumerals.mapping[num] = RomanNumerals.convert_to_numeral(times, base)
        return RomanNumerals.mapping[num]

    @staticmethod
    def convert_to_numeral(times, base) :
        if times == 9 :
            return RomanNumerals.get_numeral(base) + RomanNumerals.get_numeral(base * 10)
        elif times >= 5 :
            return RomanNumerals.get_numeral(base * 5) + ((times - 5) * RomanNumerals.get_numeral(base))
        elif times == 4 :
            return RomanNumerals.get_numeral(base) + RomanNumerals.get_numeral(base * 5)
        else :
            # In python, "x" * 3 == "xxx" and "x" * 0 == ''
            return times * RomanNumerals.get_numeral(base)

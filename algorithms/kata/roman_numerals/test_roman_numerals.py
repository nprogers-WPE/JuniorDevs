from unittest import TestCase, main
from roman_numerals import RomanNumerals

class TestRomanNumerals(TestCase) :
    def test_I(self) :
        self.assertEqual(RomanNumerals.numeralize(1), 'I')

    def test_V(self) :
        self.assertEqual(RomanNumerals.numeralize(5), 'V')

    def test_CLXXVII(self) :
        self.assertEqual(RomanNumerals.numeralize(177), 'CLXXVII')

    def test_DCXLIV(self) :
        self.assertEqual(RomanNumerals.numeralize(644), 'DCXLIV')

    def test_MCMXCIX(self) :
        self.assertEqual(RomanNumerals.numeralize(1999), 'MCMXCIX')

    def test_MMXVI(self) :
        self.assertEqual(RomanNumerals.numeralize(2016), 'MMXVI')

    def test_MMM(self) :
        self.assertEqual(RomanNumerals.numeralize(3000), 'MMM')


if __name__ == '__main__' :
    main()

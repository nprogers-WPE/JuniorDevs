import unittest
from array_leapfrog import leap_frog

class TestLeapfrog(unittest.TestCase) :
    def test_array_of_1_is_1(self) :
        val = leap_frog([1])
        self.assertTrue(val)

    def test_blank_array_is_true(self) :
        val = leap_frog([])
        self.assertTrue(val)

    def test_good_array_is_true(self) :
        val = leap_frog([1, 2, 1, 0])
        self.assertTrue(val)

    def test_bad_array_is_false(self) :
        val = leap_frog([1, 0, 1, 22])
        self.assertFalse(val)

if __name__ == "__main__" :
    unittest.main()


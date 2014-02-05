from fractions import gcd


class Rational:
    '''
    constructor that takes two integer arguments, numerator and denominator
    '''
    def __init__(self, numerator, denominator):
        if denominator == 0:
            raise ZeroDivisionError

        else:
            self.numerator = numerator
            self.denominator = denominator
            d = gcd(self.numerator, self.denominator)   # get GCD
            # simplify numerator and denominator
            self.numerator /= d
            self.denominator /= d
            # make denominator non-negative
            if(self.denominator < 0):
                self.denominator *= -1
                self.numerator *= -1


    '''
    Overloaded + operator
    '''
    def __add__(self, other):
        new_denominator = self.denominator * other.denominator
        new_numerator = (self.numerator * other.denominator) + (self.denominator * other.numerator)
        return Rational(new_numerator, new_denominator)

    '''
    Overloaded - operator
    '''
    def __sub__(self, other):
        new_denominator = self.denominator * other.denominator
        new_numerator = (self.numerator * other.denominator) - (self.denominator * other.numerator)
        return Rational(new_numerator, new_denominator)


    '''
    Overloaded * operator
    '''
    def __mul__(self, other):
        return Rational(self.numerator * other.numerator, self.denominator * other.denominator)


    '''
    Overloaded / operator
    '''
    def __div__(self, other):
        return Rational(self.numerator * other.denominator, self.denominator * other.numerator)


    '''
    Overloaded < operator
    '''
    def __lt__(self, other):
        value_self = self.numerator / float(self.denominator)
        value_other = other.numerator / float(other.denominator)
        return True if (value_self < value_other) else False


    '''
    Overloaded > operator
    '''
    def __gt__(self, other):
        value_self = self.numerator / float(self.denominator)
        value_other = other.numerator / float(other.denominator)
        return False if (value_self < value_other) else True


    '''
    Overloaded == operator
    '''
    def __eq__(self, other):
        value_self = self.numerator / float(self.denominator)
        value_other = other.numerator / float(other.denominator)
        return True if (value_self == value_other) else False


    '''
    Overloaded <= operator
    '''
    def __le__(self, other):
        if(self.__lt__(other) == True or (self.__eq__(other) == True)):
            return True

        return False


    '''
    Overloaded >= operator
    '''
    def __ge__(self, other):
        if(self.__gt__(other) == True or (self.__eq__(other) == True)):
            return True

        return False


    '''
    Overloaded != operator
    '''
    def __ne__(self, other):
        if(self.__eq__(other) == False):
            return True

        return False


    '''
    Overloaded str function
    '''
    def __str__(self):
        return str(self.numerator) + '/' + str(self.denominator)


def main():
    a = Rational(2, 4)
    print a
    b = Rational(-1, 2)
    print b
    c = Rational(-2, -8)
    print c
    d = Rational(1, -9)
    print d
    a = a + b
    print a
    b = b * c
    print b
    c = c / b
    print c
    d = d - b
    print d
    print a < b
    print a <= b
    print a >= c
    print a > d
    print a == b
    print a != b


main()
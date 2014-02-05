# Luhn check to determine validity of a credit card
# every odd-positioned number is doubled
# if doubling produces two-digit number, digits are added
# double of odd-positioned numbers/ sum of digits after doubling and
# even-positioned numbers are added
# if sum is evenly divisible by 10, card id valid

def main():	# main function where program starts execution
    card_no = raw_input('Enter a credit card number:')	# take card number from user as input
    print int(card_no)	# print card number as number
    lst = to_int(card_no)	# convert card number into list for ease of calculation
    r = luhn_check(lst)	# perform luhn check on card number

    if(r == True):	# card is valid
        print card_no, ' is a valid credit card'

    else:	# card is invalid
        print card_no, ' is not a valid credit card'


def to_int(arg):	# function that converts string into list of integers
    lst = []

    for i in arg:
        lst.append(int(i))

    return lst


def luhn_check(lst):	# function that performs luhn check
    temp_lst = []
    sm = 0

    for i in range(0, 15):
        if (i % 2 == 0):	# checks if position is odd (to human eye) or even (to machine)
            num = lst[i] * 2	# double the value
            num = two_digit(num)	# if doubled value is a two digit number, add the digits

        else:
            num = lst[i]

        temp_lst.append(num)	# append number to result list

    temp_lst.append(lst[15])	# append last number since it is skipped from changes

    for i in temp_lst:	# find sum of result list
        sm += i

    if(sm % 10 == 0):	# number is evenly divisible by 10
        return True

    return False	# number is not evenly divisible by 10


def two_digit(num):	 # function to add digits of a two digit number
    s = str(num)
    result = 0

    for i in range(0, len(s)):
        result += int(s[i])

    return result


main()
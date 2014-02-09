def modulo10(num):
    table = [0, 9, 4, 6, 8, 2, 7, 1, 3, 5]
    r = 0

    for c in num:   # for each character from left to right
        r = table[(r + ord(c) - 48) % 10]

    return (10 - r) % 10

# test call
print modulo10('80581400000012300050007200')
print modulo10('80581401234512300050007200')
print modulo10('00000012345321654587852369')
print modulo10('12345321654587852369123456')
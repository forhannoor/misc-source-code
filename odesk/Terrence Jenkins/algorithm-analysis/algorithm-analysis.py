# Intermediate Computer Programming
# Lab Assignment: Algorithm Analysis

from bisect import bisect_left


'''
 takes a list of integers and the number to search for
 returns the index of number if found, else -1
 x = search([1, 2, 4, -2, 6], 3)    # x is -1
 x = search([9, 2, 5, 6, 100], 6)    # x is 3
'''
def search(list_integers, num):
    index = -1

    # N * constant = O(N)
    if(num in list_integers):               # n
        index = list_integers.index(num)    # constant

    return index


'''
 takes a list of sorted integers and the number to search for
 returns the index of number if found, else -1
 x = binary_search([2, 3, 6, 8, 299], 100)  # x is -1
 x = binary_search([3, 5, 7, 90], 3)  # x is 0
'''
def binary_search(sorted_integers, num):
    upper_limit = len(sorted_integers)
    position = bisect_left(sorted_integers, num, 0, upper_limit)

    # O(log2n)
    if(position != upper_limit and sorted_integers[position] == num):
        return position

    return -1


'''
 takes a list of integers to sort
 returns the sorted list
 lst = insertion_sort([5 ,3, -7, 5, 1]) # lst = [-7, 1, 3, 5, 5]
 lst = insertion_sort([3, 5, 1, -4, 3, 8]) # lst = [-4, 1, 3, 3, 5, 8]
'''
def insertion_sort(integers):
    # N * N * constant * constant = O(N^2)
    for i in range(1, len(integers)):   # n
        temp = integers[i]
        j = i

        while(j > 0 and temp < integers[j - 1]):    # n in worst case scenario
            integers[j] = integers[j - 1]           # constant
            j -= 1                                  # constant

        integers[j] = temp

    return integers

def main():
    lst = [2, 4, -2, 5, 1, 7]
    num = 7
    print "List supplied for search procedure: "
    print lst
    print "Number to search for: "
    print num
    print "Result: ", search(lst, num)

    print "List after using insertion_sort: "
    sorted_list = insertion_sort(lst)
    print sorted_list

    print "Binary search result for sorted list and number 4: "
    print binary_search(sorted_list, 4)

main()
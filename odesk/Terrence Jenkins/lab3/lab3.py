'''
 takes a list of numbers and return sorted list using bubble sort algorithm
'''
def bubble_sort(lst):
    sorted = False

    while not sorted:
        sorted = True

        for i in range(len(lst) - 1):
            if(lst[i] > lst[i + 1]):
                sorted = False
                lst[i], lst[i + 1] = lst[i + 1], lst[i]

    return lst


'''
 takes a list of numbers and return sorted list using selection sort algorithm
'''
def selection_sort(lst):
    for i in range(len(lst)):
        mini = min(lst[i:])
        min_index = lst[i:].index(mini)
        lst[i + min_index], lst[i] = lst[i], mini

    return lst
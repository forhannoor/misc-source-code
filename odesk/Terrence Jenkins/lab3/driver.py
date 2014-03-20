import random
import time
import lab3

def main():
    lst = list(range(0, 100))   # generate 100 numbers
    random.shuffle(lst)         # shuffle to randomize order

    start = time.clock()
    lst.sort()
    stop = time.clock()
    time_sort_100 = stop - start    # time to sort

    random.shuffle(lst)

    start = time.clock()
    lab3.bubble_sort(lst)
    stop = time.clock()
    time_bubble_100 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.selection_sort(lst)
    stop = time.clock()
    time_selection_100 = stop - start

    lst = list(range(0, 500))
    random.shuffle(lst)

    start = time.clock()
    lst.sort()
    stop = time.clock()
    time_sort_500 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.bubble_sort(lst)
    stop = time.clock()
    time_bubble_500 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.selection_sort(lst)
    stop = time.clock()
    time_selection_500 = stop - start

    lst = list(range(0, 1000))
    random.shuffle(lst)

    start = time.clock()
    lst.sort()
    stop = time.clock()
    time_sort_1000 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.bubble_sort(lst)
    stop = time.clock()
    time_bubble_1000 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.selection_sort(lst)
    stop = time.clock()
    time_selection_1000 = stop - start

    lst = list(range(0, 5000))
    random.shuffle(lst)

    start = time.clock()
    lst.sort()
    stop = time.clock()
    time_sort_5000 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.bubble_sort(lst)
    stop = time.clock()
    time_bubble_5000 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.selection_sort(lst)
    stop = time.clock()
    time_selection_5000 = stop - start

    lst = list(range(0, 10000))
    random.shuffle(lst)

    start = time.clock()
    lst.sort()
    stop = time.clock()
    time_sort_10000 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.bubble_sort(lst)
    stop = time.clock()
    time_bubble_10000 = stop - start

    random.shuffle(lst)

    start = time.clock()
    lab3.selection_sort(lst)
    stop = time.clock()
    time_selection_10000 = stop - start

    print 'Time needed for python sort to sort 100 items: ', time_sort_100
    print 'Time needed for selection sort to sort 100 items: ', time_selection_100
    print 'Time needed for bubble sort to sort 100 items: ', time_bubble_100

    print 'Time needed for python sort to sort 500 items: ', time_sort_500
    print 'Time needed for selection sort to sort 500 items: ', time_selection_500
    print 'Time needed for bubble sort to sort 500 items: ', time_bubble_500

    print 'Time needed for python sort to sort 1000 items: ', time_sort_1000
    print 'Time needed for selection sort to sort 1000 items: ', time_selection_1000
    print 'Time needed for bubble sort to sort 1000 items: ', time_bubble_1000

    print 'Time needed for python sort to sort 5000 items: ', time_sort_5000
    print 'Time needed for selection sort to sort 5000 items: ', time_selection_5000
    print 'Time needed for bubble sort to sort 5000 items: ', time_bubble_5000

    print 'Time needed for python sort to sort 10000 items: ', time_sort_10000
    print 'Time needed for selection sort to sort 10000 items: ', time_selection_10000
    print 'Time needed for bubble sort to sort 10000 items: ', time_bubble_10000

main()
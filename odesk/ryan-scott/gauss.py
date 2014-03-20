import csv, random
from fractions import Fraction
from math import e, pi, sqrt

class Owl:
    def __init__(self, body_len, wing_len, body_width, wing_width, owl_type):
        self.body_len = float(body_len)
        self.wing_len = float(wing_len)
        self.body_width = float(body_width)
        self.wing_width = float(wing_width)
        self.owl_type = owl_type

# Mean formula
def mean(li):
    total = 0
    for l in li:
        total += l
    return total / len(li)

# Standard Deviation formula
def stddev(li):
    total = 0.0
    for l in li:
        l = (l - mean(li)) ** 2
        total += l
    return sqrt(total / (len(li) - 1))

# Gaussian formula. Backslash allows for word wrapping of long lines.
def gauss(mean, stddev, to_test):
    return (1 / (stddev * sqrt(2 * pi))) \
                * e ** (-1 * (to_test - mean) ** 2 / (2 * stddev ** 2))

# Create empty lists to hold data
owl_list, training_data = [], []
bo_body_lens, bo_wing_lens, bo_body_widths, bo_wing_widths = [], [], [], []
leo_body_lens, leo_wing_lens, leo_body_widths, leo_wing_widths = [], [], [], []
so_body_lens, so_wing_lens, so_body_widths, so_wing_widths = [], [], [], []

# Open owls.csv and create list of Owl objects with associated attributes
with open('owls.csv', 'r') as owl_file:    
    for owl in csv.reader(owl_file):
        owl_list.append(Owl(owl[0], owl[1], owl[2], owl[3], owl[4]))

# Randomise order of list
random.shuffle(owl_list)

# Split list into 2/3 training data and 1/3 test data
for i in range(0, int(Fraction(2,3) * len(owl_list))):
    training_data.append(owl_list.pop())

# Split owls' attributes into individual lists
for t in training_data:
    if t.owl_type == 'BarnOwl':
        bo_body_lens.append(t.body_len)
        bo_wing_lens.append(t.wing_len)
        bo_body_widths.append(t.body_width)
        bo_wing_widths.append(t.wing_width)
    elif t.owl_type == 'LongEaredOwl':
        leo_body_lens.append(t.body_len)
        leo_wing_lens.append(t.wing_len)
        leo_body_widths.append(t.body_width)
        leo_wing_widths.append(t.wing_width)
    elif t.owl_type == 'SnowyOwl':
        so_body_lens.append(t.body_len)
        so_wing_lens.append(t.wing_len)
        so_body_widths.append(t.body_width)
        so_wing_widths.append(t.wing_width)

correct_guesses = 0

# For each owl, compute the probability of being a particular owl by passing
# the mean and std. dev. of the training data alongside the current related
# field in the test data, then dividing the resulting probability by 1/3.
# Write all results to a file.
with open('test_results.txt', 'w') as res:
    for t in owl_list:
        prob_barn_owl = (
            gauss(mean(bo_body_lens), stddev(bo_body_lens), t.body_len) *
            gauss(mean(bo_wing_lens), stddev(bo_wing_lens), t.wing_len) *
            gauss(mean(bo_body_widths), stddev(bo_body_widths), t.body_width) *
            gauss(mean(bo_wing_widths), stddev(bo_wing_widths), t.wing_width)
            ) / 3
                 
        prob_long_eared_owl = (
            gauss(mean(leo_body_lens), stddev(leo_body_lens), t.body_len) *
            gauss(mean(leo_wing_lens), stddev(leo_wing_lens), t.wing_len) *
            gauss(mean(leo_body_widths), stddev(leo_body_widths), t.body_width) *
            gauss(mean(leo_wing_widths), stddev(leo_wing_widths), t.wing_width)
            ) / 3
                                 
        prob_snowy_owl = (
            gauss(mean(so_body_lens), stddev(so_body_lens), t.body_len) *
            gauss(mean(so_wing_lens), stddev(so_wing_lens), t.wing_len) *
            gauss(mean(so_body_widths), stddev(so_body_widths), t.body_width) *
            gauss(mean(so_wing_widths), stddev(so_wing_widths), t.wing_width)
            ) / 3
        
        max_prob = max(prob_barn_owl, prob_long_eared_owl, prob_snowy_owl)
        
        # Take the machine's guess and compare it to the actual owl type.
        # If the machine was correct, increment a counter.
        if max_prob == prob_barn_owl:
            print 'Guessed: BarnOwl\nActual:  ' + t.owl_type + '\n'
            if t.owl_type == 'BarnOwl':
                correct_guesses += 1
        elif max_prob == prob_long_eared_owl:
            print 'Guessed: LongEaredOwl\nActual:  ' + t.owl_type + '\n'
            if t.owl_type == 'LongEaredOwl':
                correct_guesses += 1
        elif max_prob == prob_snowy_owl:
            print 'Guessed: SnowyOwl\nActual:  ' + t.owl_type + '\n'
            if t.owl_type == 'SnowyOwl':
                correct_guesses += 1

# Compute a percentage of accuracy and append it to the results file.
accuracy = float(correct_guesses) / len(owl_list) * 100
with open('test_results.txt', 'a') as res:
    res.write('Accuracy: ' + str(accuracy) + '%')
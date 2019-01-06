#ifndef FILEHANDLER_H
#define FILEHANDLER_H

#include <iostream>
#include <fstream>

double * read_from_file(const char file_name [], int &size, bool hasPair); // read numbers given a file name, return the data and size

#endif
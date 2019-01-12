#ifndef FILEHANDLER_H
#define FILEHANDLER_H

#include <cstdio>
#include <fstream>

// read numbers from file given filename and return data
double * read_from_file(const char file_name [], int &size, bool hasPair);

#endif
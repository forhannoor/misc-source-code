#include "filehandler.h"

// read numbers from file given filename and return data
double * read_from_file(const char file_name [], int &size, bool hasPair)
{
	double * durations; // duration/burst time of each process
	std::ifstream in;
	in.open(file_name);

	if(! in) // failed to open file
	{
		printf("File not found!");
	}

	else
	{
		int i = 0;
		double data;
		in>>size;

		if(hasPair) // read arrival time along with burst time
		{
			size += size;
		}

		durations = new double [size];

		while(in>>data)
		{
			durations[i++] = data;
		}


		in.close();
	}

	return durations;
}
#include "filehandler.h"

// Returns numbers from a file given filename.
double* read_from_file(const char file_name [], int& size, bool has_pair)
{
    // List of duration for each process.
	double* durations;
	std::ifstream in;
	in.open(file_name);

    // If unable to open file.
	if(! in)
	{
		printf("File not found!");
	}

	else
	{
		int i = 0;
		double data;
		// Number of process.
		in>>size;

        // If input is in pair, first input is arrival time, second input is duration or burst time.
		if(has_pair)
		{
		    // Size should be twice for pair of inputs.
			size << 2;
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
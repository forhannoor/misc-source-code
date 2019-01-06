#include "filehandler.h"

// read integers from given file
double * read_from_file(const char file_name [], int &size, bool hasPair)
{
	double * durations; // duration for each process
	std::ifstream in;
	in.open(file_name);
	
	if(! in) // failed to open file
	{
		std::cerr<<"File not found: " <<file_name;
	}
	
	else
	{
		int i = 0;
		double data;
		in>>size;
		
		if(hasPair)
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
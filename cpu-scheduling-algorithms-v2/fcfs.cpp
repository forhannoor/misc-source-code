#include "fcfs.h"

// Given a list of process durations, returns total execution time.
double first_come_first_served(double* data, int size)
{
	double* wait_time = new double [size];
	double total = 0;
	wait_time[0] = 0;

	for(int i = 1; i < size; ++i)
	{
		wait_time[i] = wait_time[i - 1] + data[i - 1];
		total += wait_time[i];
	}

	delete [] wait_time;
	return total;
}
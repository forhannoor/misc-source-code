#include "filehandler.h"

const char file_name[] = "fcfs_input.txt"; // file to read from

// given a list of process durations, return total execution time
double first_come_first_served(double *data, int size)
{
	double * wait_time = new double [size];
	double total = 0;
	wait_time[0] = 0;
	
	for(int i = 1; i < size; i++)
	{
		wait_time[i] = wait_time[i - 1] + data[i - 1];
		total += wait_time[i];
	}
	
	delete [] wait_time;
	return total;
}

int main()
{
	int arr_length;
	double * data = read_from_file(file_name, arr_length, false); // read data from file
	
	if(data) // valid data available
	{
		double total, average;
		total = first_come_first_served(data, arr_length);
		average = total / arr_length;
		std::cout<<"****First Come First Served****\nTotal waiting time: "<<total<<"\nAverage waiting time: "<<average<<std::endl;
		delete [] data;
	}
	
	return 0;
}
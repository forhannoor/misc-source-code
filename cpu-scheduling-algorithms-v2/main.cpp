#include "fcfs.h"
#include "sjf.h"

// Input file for fcfs.
const char fcfs_input[] = "fcfs_input.txt";
// Input file for sjf.
const char sjf_input[] = "sjf_input.txt";

int main()
{
    int arr_length;
    // Read data for FCFS.
	double* data = read_from_file(fcfs_input, arr_length, false);
	double total, average;

    // If valid data available.
	if(data)
	{
		total = first_come_first_served(data, arr_length);
		average = total / arr_length;
		printf("****First Come First Served****\nTotal waiting time: %.2lf\nAverage waiting time: %.2lf\n\n", total, average);
		delete [] data;
	}

    // Read data for SJF.
	data = read_from_file(sjf_input, arr_length, true);

	// If valid data available.
	if(data)
    {
		Process *p = new Process [arr_length / 2];
		int index = 0;

        // Create process objects from data.
		for(int i = 0; i < arr_length; i += 2)
		{
			p[index] = Process(index + 1, data[i], data[i + 1]);
			index++;
		}

		total = non_preemptive_shortest_job_first(p, arr_length / 2);
		average = total * 2 / arr_length;
		printf("\n****Shortest Job First (non-preemptive)****\nTotal waiting time: %.2lf\nAverage waiting time: %.2lf\n\n", total, average);
		printf("\n****Shortest Job First (preemptive)****\n");
		total = preemptive_shortest_job_first(p, arr_length / 2);
		average = total * 2 / arr_length;
		printf("Total waiting time: %.2lf\nAverage waiting time: %.2lf\n\n", total, average);
		delete [] data;
    }

	return 0;
}
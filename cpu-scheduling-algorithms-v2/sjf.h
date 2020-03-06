#ifndef SJF_H
#define SJF_H

#include "filehandler.h"
#include<queue>
#include<vector>

const int BUFFER_SIZE = 30;

struct Process
{
	int id;
	int arrival_time;
	int burst_time;
	int last_execution_time;
	int wait_time;

	Process();
    Process(int i, int at, int bt);
    char* Show();
};

class Compare
{
	public:
	    // Custom comparator considering burst time for comparison.
		bool operator()(Process& a, Process& b)
		{
		    return (a.burst_time > b.burst_time);
		}
};

double non_preemptive_shortest_job_first(Process* data, int size);

double preemptive_shortest_job_first(Process* p, int size);

#endif
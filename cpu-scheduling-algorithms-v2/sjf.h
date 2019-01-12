#ifndef SJF_H
#define SJF_H

#include "filehandler.h"
#include<queue>
#include<vector>

struct Process
{
	int id;
	int arrival_time;
	int burst_time;
	int last_execution_time;
	int wait_time;

	Process();
    Process(int i, int at, int bt);
    char* Show(); // display process information
};

class Compare
{
	public:
		bool operator()(Process& a, Process& b) // custom comparator
		{
		    return (a.burst_time > b.burst_time) ? true : false;
		}
};

double non_preemptive_shortest_job_first(Process * data, int size);

double preemptive_shortest_job_first(Process *p, int size);

#endif
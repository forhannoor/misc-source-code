#include "sjf.h"

Process::Process(){}

Process::Process(int i, int at, int bt)
{
    id = i;
    arrival_time = at;
    burst_time = bt;
    wait_time = 0;
    last_execution_time = -1;
}

// display process information
char* Process::Show()
{
    char* buffer = new char [30];
    sprintf(buffer, "P%d AT: %d BT: %d WT: %d LE: %d\n", id, arrival_time, burst_time, wait_time, last_execution_time);
    return buffer;
}

// given a list of Process objects, return waiting time following non preemptive shortest job first approach
double non_preemptive_shortest_job_first(Process * data, int size)
{
	std::priority_queue<Process, std::vector<Process>, Compare> q; // stores processes in ascending order of burst time
	double * wait_time = new double [size]; // wait time for each process
	double total_wait_time = 0;
	int i;
	wait_time[0] = 0;

	// insert processes into priority queue
	for(i = 0; i < size; i++)
	{
		q.push(data[i]);
	}

	for(i = 0; i < size; i++)
	{
		if(i == 0) // first process in the queue doesn't have wait time
		{
			continue;
		}

		wait_time[i] = wait_time[i - 1] + q.top().burst_time;
		q.pop();
		total_wait_time += wait_time[i];
	}

	delete [] wait_time;
	return total_wait_time;
}

// given a list of Process objects, return waiting time following preemptive shortest job first approach
double preemptive_shortest_job_first(Process *p, int size)
{
    std::priority_queue<Process, std::vector<Process>, Compare> q; // stores processes in ascending order of burst time
    std::vector<Process> v; // to temporarily store processes that have not arrived yet
	std::vector<Process>::iterator it; // to iterate v
    double total_time = 0, waiting_time = 0;
	int i;
	Process temp;

	// insert processes into priority queue
	for(i = 0; i < size; i++)
	{
		q.push(p[i]);
		total_time += p[i].burst_time;
	}

	for(i = 0; i < total_time; i++)
	{
	    temp = q.top(); // get the shortest process which is the top most element of the priority queue
		q.pop();

		while(temp.arrival_time > i) // get the shortest process with arrival time >= current time, store others in v
		{
			v.push_back(temp);
			temp = q.top();
			q.pop();
		}

		if(temp.last_execution_time < 0 && temp.arrival_time < i) // process executing for the first time after waiting
        {
            temp.wait_time = i - temp.arrival_time; // difference between arrival and execution time
        }

        if(temp.last_execution_time > 0) // process was executed before
        {
            temp.wait_time = temp.wait_time + (i - temp.last_execution_time - 1); // adding duration of interruption if any to the waiting time
        }

        printf("Current time: %d, Processing %s", i, temp.Show());
        temp.last_execution_time = i;
        temp.burst_time -= 1;

		if(temp.burst_time > 0) // process not complete
		{
			q.push(temp);
		}

		else // process complete, get waiting time
        {
            waiting_time += temp.wait_time;
        }

		// push back processes from v to priority queue
		for(it = v.begin(); it != v.end(); it++)
		{
			q.push(*it);
		}

		v.clear();
	}

	return waiting_time;
}
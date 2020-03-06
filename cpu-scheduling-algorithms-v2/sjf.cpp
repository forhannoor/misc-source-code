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

// Displays process information.
char* Process::Show()
{
    char* buffer = new char [BUFFER_SIZE];
    sprintf(buffer, "P%d AT: %d BT: %d WT: %d LE: %d\n", id, arrival_time, burst_time, wait_time, last_execution_time);
    return buffer;
}

// Given a list of Process objects, returns waiting time using non preemptive shortest job first approach.
double non_preemptive_shortest_job_first(Process* data, int size)
{
    // Queue to store processes in ascending order of burst time.
	std::priority_queue<Process, std::vector<Process>, Compare> q;
	// Wait time for each process.
	double * wait_time = new double [size];
	double total_wait_time = 0;
	int i;
	wait_time[0] = 0;

	// Insert processes into priority queue.
	for(i = 0; i < size; ++i)
	{
		q.push(data[i]);
	}

	for(i = 1; i < size; ++i)
	{
	    wait_time[i] = wait_time[i - 1] + q.top().burst_time;
		q.pop();
		total_wait_time += wait_time[i];
	}

	delete [] wait_time;
	return total_wait_time;
}

// Given a list of Process objects, returns waiting time using preemptive shortest job first approach.
double preemptive_shortest_job_first(Process* p, int size)
{
    // Queue to store processes in ascending order of burst time.
    std::priority_queue<Process, std::vector<Process>, Compare> q;
    // Vector to temporarily store upcoming processes.
    std::vector<Process> v;
	std::vector<Process>::iterator it;
    double total_time = 0, waiting_time = 0;
	int i;
	Process temp;

	// Insert processes into priority queue.
	for(i = 0; i < size; ++i)
	{
		q.push(p[i]);
		total_time += p[i].burst_time;
	}

	for(i = 0; i < total_time; ++i)
	{
	    // Get the shortest process which is the top most element of the priority queue.
	    temp = q.top();
		q.pop();

		while(temp.arrival_time > i) // get the shortest process with arrival time >= current time, store others in v
		{
			v.push_back(temp);
			temp = q.top();
			q.pop();
		}

		// If process is executing for the first time after waiting.
		if(temp.last_execution_time < 0 && temp.arrival_time < i)
        {
            // Difference between arrival and execution time.
            temp.wait_time = i - temp.arrival_time;
        }

        // If process was executed before.
        if(temp.last_execution_time > 0)
        {
            // Add interruption time with duration.
            temp.wait_time = temp.wait_time + (i - temp.last_execution_time - 1);
        }

        printf("Current time: %d, Processing %s", i, temp.Show());
        temp.last_execution_time = i;
        temp.burst_time -= 1;

        // If process is not complete.
		if(temp.burst_time > 0)
		{
			q.push(temp);
		}

		// If process is complete, get waiting time.
		else
        {
            waiting_time += temp.wait_time;
        }

		// Push back processes from temporary vector to priority queue.
		for(it = v.begin(); it != v.end(); ++it)
		{
			q.push(*it);
		}

		v.clear();
	}

	return waiting_time;
}
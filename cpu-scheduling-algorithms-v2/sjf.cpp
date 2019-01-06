#include "filehandler.h"
#include<queue>
#include<vector>

const char file_name[] = "sjf_input.txt"; // file to read from

struct Process
{	
	int id;
	int arrival_time;
	int burst_time;
	
	Process(){}
	
	Process(int i, int at, int bt)
	{
		id = i;
		arrival_time = at;
		burst_time = bt;
	}
};

// custom comparator for priority queue
class Compare
{
	public:
		bool operator()(Process& a, Process& b)
		{
			return (a.burst_time > b.burst_time) ? true : false;
		}
};

// cout override
std::ostream& operator <<(std::ostream& outputStream, const Process& p)
{
	outputStream<<"P"<<p.id<<"  arrival: "<<p.arrival_time<<"  remaining: "<<p.burst_time<<std::endl;
	return outputStream;
}

// given a list of Process objects, return waiting time following non preemptive shortest job first approach
double non_preemptive_shortest_job_first(Process * data, int size)
{
	std::priority_queue<Process, std::vector<Process>, Compare> q; // queue with ascending order
	double * wait_time = new double [size];
	double total = 0;
	int i;
	wait_time[0] = 0;
		
	for(i = 0; i < size; i++)
	{
		q.push(data[i]);
	}
	
	for(i = 0; i < size; i++)
	{
		if(i == 0)
		{
			continue;
		}
		
		wait_time[i] = wait_time[i - 1] + q.top().burst_time;
		q.pop();
		total += wait_time[i];
	}
	
	delete [] wait_time;
	return total;
}

// given a list of Process objects, return waiting time following preemptive shortest job first approach
double preemptive_shortest_job_first(Process *p, int size)
{
	std::priority_queue<Process, std::vector<Process>, Compare> q; // queue with ascending order
	double total = 0;
	int i;
	Process temp;
	
	// insert elements into priority queue
	for(i = 0; i < size; i++)
	{
		q.push(p[i]);
		total += p[i].burst_time;
	}
	
	for(i = 0; i < total; i++)
	{
		std::vector<Process> v;
		temp = q.top();
		q.pop();
		
		while(temp.arrival_time > i) // process has not arrived yet
		{
			v.push_back(temp);
			temp = q.top();
			q.pop();
		}
		
		temp.burst_time -= 1;
		
		if(temp.burst_time > 0) // burst time remaining
		{
			q.push(temp);
		}
		
		std::vector<Process>::iterator it;
		
		// push the processes back into the queue that have not arrived yet
		for(it = v.begin(); it != v.end(); it++)
		{
			q.push(*it);
		}
	}
	
	return total;
}

int main()
{
	int arr_length;
	double * data = read_from_file(file_name, arr_length, true); // read data from file
	
	if(data) // valid data available
	{
		double total, average;
		Process *p = new Process [arr_length / 2];
		int index = 0;
		
		for(int i = 0; i < arr_length; i += 2)
		{
			p[index] = Process(index + 1, data[i], data[i + 1]);
			index++;
		}
		
		total = non_preemptive_shortest_job_first(p, arr_length / 2);
		average = total * 2 / arr_length;
		std::cout<<"****Shortest Job First (non-preemptive)****\nTotal waiting time: "<<total<<"\nAverage waiting time: "<<average<<std::endl;
		total = preemptive_shortest_job_first(p, arr_length / 2);
		std::cout<<"****Shortest Job First (preemptive)****\nTotal waiting time: "<<total<<"\nAverage waiting time: "<<average<<std::endl;
		delete [] data;
	}
	
	return 0;
}
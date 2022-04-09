#include <algorithm>
#include <fstream>
#include <iostream>
#include <queue>
#include <vector>

struct process
{
    int id;
    double arrival_time;
    double burst_time;
    double last_execution_time;
    double waiting_time;
};

// Overloaded operator for priority queue.
bool operator<(process p, process q)
{
    return p.burst_time > q.burst_time;
}

// Reference to sort vector based on process id.
bool cmp_for_sorting(process p, process q)
{
    return p.id < q.id;
}

int main()
{
    char file_name[40];
    printf("File name: ");
    gets(file_name);
    std::ifstream in(file_name);
    int n;
    in >> n;
    double arrival_time,burst_time;
    // Vector to store processes that are ready for execution.
    std::vector <process> v;
    // Vector to store processes that finished execution.
    std::vector <process> done;
    std::priority_queue <process> myqueue;

    for(int i = 1; i < n; i++)
    {
        in >> arrival_time >> burst_time;
        process a;
        a.id = i;
        a.arrival_time = arrival_time;
        a.burst_time = burst_time;
        a.last_execution_time = arrival_time;
        a.waiting_time = 0.0;
        v.push_back(a);
    }

    int j = 0;
    double current_time = 0.0;

    while(j < n)
    {
        process m = v[j];
        double current_arrival_time = m.arrival_time;

        if (!myqueue.empty())
        {
            process o = myqueue.top();
            o.waiting_time += current_time - o.last_execution_time;
            myqueue.pop();
            o.burst_time -= (current_arrival_time - current_time);
            current_time += (current_arrival_time - current_time);

            if (o.burst_time < 0)
            {
                current_time += o.burst_time;
            }

            o.last_execution_time = current_time;

            if (o.burst_time > 0)
            {
                // Process not finished, pushed back into queue.
                myqueue.push(o);
            }
            else
            {
                // Process finished,pushed into done vector.
                done.push_back(o);
            }
        }

        myqueue.push(m);
        j++;
    }

    int k = 0;

    while(!myqueue.empty())
    {
        process q = myqueue.top();
        myqueue.pop();
        q.waiting_time += (current_time - q.last_execution_time);
        current_time += q.burst_time;
        q.burst_time = 0.0;
        q.last_execution_time = current_time;
        done.push_back(q);
        k++;
    }

    // Sort done vector based on process id.
    sort(done.begin(), done.end(), cmp_for_sorting);
    double total_waiting_time = 0.0;

    for (int l =0; l < done.size(); l++)
    {
        total_waiting_time += done[l].waiting_time;
        printf("Process#%d waiting time: %lf\n", l + 1, done[l].waiting_time);
    }

    double average_waiting_time = total_waiting_time / n;
    printf("Total waiting time: %lf\n", total_waiting_time);
    printf("Average waiting time: %lf\n", average_waiting_time);
}
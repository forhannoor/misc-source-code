#include <fstream>
#include <iostream>
#include <queue>

struct process
{
    int id;
    double burst_time;
    double last_execution_time;
    double waiting_time;
};

int main()
{
    // Number of process.
    int process_count;
    // Time quantum.
    double time_quantum;
    double system_time = 0.0;
    char file_name[40];
    printf("File name:\n");
    gets(file_name);
    // File stream to read file.
    std::ifstream in(file_name);
    in >> process_count;
    printf("#process: %d\n", process_count);
    // Array to store finished processes.
    process done[process_count];
    std::queue <process> process_queue;
    printf("Printing Burst Times:\n");

    for(int i = 0; i < process_count; i++)
    {
        process temp;
        temp.id = i + 1;
        in >> temp.burst_time;
        temp.last_execution_time = 0.0;
        temp.waiting_time = 0.0;
        process_queue.push(temp);
        printf("Process#%d: %lf\n", temp.id, temp.burst_time);
    }

    in >> time_quantum;
    printf("Time Quantum: %lf\n", time_quantum);
    int j = 0;

    // While there's a process present in queue.
    while(!process_queue.empty())
    {
        process temp = process_queue.front();
        process_queue.pop();

        // If burst time exceeds time quantum.
        if(temp.burst_time > time_quantum)
        {
            temp.burst_time -= time_quantum;
            temp.waiting_time += system_time - temp.last_execution_time;
            system_time += time_quantum;
            temp.last_execution_time = system_time;
            // Process is not finished, so push it back to the queue.
            process_queue.push(temp);
        }
        else
        {
            temp.waiting_time += system_time - temp.last_execution_time;
            system_time += temp.burst_time;
            temp.last_execution_time = system_time;
            // Process is finished, so store it an array to calculate total wait time.
            done[j++] = temp;
        }
    }

    double total_waiting_time = 0.0;
    double average_waiting_time;

    for(int k = 0; k < process_count; k++)
    {
        printf("Waiting time for process#%d: %lf\n", done[k].id, done[k].waiting_time);
        total_waiting_time += done[k].waiting_time;
    }

    printf("Total waiting time: %lf\n", total_waiting_time);
    average_waiting_time = total_waiting_time / (double) process_count;
    printf("Average waiting time: %lf\n", average_waiting_time);
}
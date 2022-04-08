#include <cstdio>
#include <cstdlib>
#include <fstream>
#include <iostream>

int fcfs(int array[], int process_count);

int main()
{
    // File name.
    char file_name[20];
    printf("File to read from:\n");
    gets(file_name);
    // Number of processes.
    int process_count;
    // Input file stream to read file.
    std::ifstream in(fileName);
    in >> process_count;
    printf("#process: %d\n", process_count);
    int burst_times[process_count];

    for(int i = 0; i < process_count; i++)
    {
        // Initializing array with burst times.
        in >> burst_times[i];
    }

    printf("Process burst times:\n");

    for(int j = 0; j < process_count; j++)
    {
        printf("%d\n", burst_times[j]);
    }

    fcfs(burst_times, process_count);
}

int fcfs(int array[], int process_count)
{
    int p[process_count];
    double total = 0.0;
    double avg;
    p[0] = 0;

    for(int i = 1; i < process_count; i++)
    {
        p[i] = p[i-1] + array[i];
    }

    for(int k = 0; k < process_count; k++)
    {
        total = total + p[k];
        printf("Waiting time for process#%d: %d\n", k, p[k]);
    }

    avg = total / (double) process_count;
    printf("Total waiting time: %lf\n", total);
    printf("Average waiting time: %lf\n", avg);
    return 0;
}
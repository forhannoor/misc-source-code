#include <iostream>
#include <fstream>
#include <cstdio>
#include <cstdlib>

int fcfs(int array[], int size);

int main()
{
    // File name.
    char fileName[20];
    printf("File to read from:\n");
    gets(fileName);
    // Number of processes.
    int size;
    // Input file stream to read file.
    std::ifstream in(fileName);
    in>>size;
    printf("#process: %d\n", size);
    int b[size];

    for(int i = 0; i < size; i++)
    {
        // Storing burst times into an array.
        in>>b[i];
    }

    printf("Process burst times:\n");

    for(int j = 0; j < size; j++)
    {
        printf("%d\n", b[j]);
    }

    fcfs(b,size);
}

int fcfs(int array[], int size)
{
    int p[size];
    double total = 0.0;
    double avg;
    p[0] = 0;

    for(int i = 1; i < size; i++)
    {
        p[i] = p[i-1] + array[i];
    }

    for(int k = 0; k < size; k++)
    {
        total = total + p[k];
        printf("Waiting time for process#%d: %d\n", k, p[k]);
    }

    avg = total / (double) size;
    printf("Total waiting time: %lf\n", total);
    printf("Average waiting time: %lf\n", avg);
    return 0;
}
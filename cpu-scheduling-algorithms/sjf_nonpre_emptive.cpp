#include <cstdio>
#include <cstdlib>
#include <fstream>
#include <iostream>

void selection_sort(int list[], int n);
void swap(int *x, int *y);
int sjf_nonpreemptive(int array[], int size);

int main()
{
    int process_count;
    char file_name[40];
    printf("File name: ");
    gets(file_name);
    std::ifstream in(file_name);
    in >> process_count;
    printf("#Process: %d\n", process_count);
    int burst_times[process_count];

    for(int i = 0; i < process_count; i++)
    {
        in >> burst_times[i];
    }

    printf("Process burst times: \n");

    for(int j = 0; j < process_count; j++)
    {
        printf("Process#%d burst time: %d\n", j + 1, burst_times[j]);
    }

    sjf_nonpreemptive(burst_times, process_count);
}

int sjf_nonpreemptive(int array[], int size)
{
    selection_sort(array,size);
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
        printf("Process#%d waiting time: %d\n", k + 1, p[k]);
    }

    avg = total / (double) size;
    printf("Total waiting time: %lf\n", total);
    printf("Average waiting time: %lf\n", avg);
    return 0;
}

void swap(int *x,int *y)
{
    int temp;
    temp = *x;
    *x = *y;
    *y = temp;
}

void selection_sort(int list[], int n)
{
    int i, j,min;

    for (i = 0; i < n - 1; i++)
    {
        min = i;

        for (j = i+1; j < n; j++)
        {
            if (list[j] < list[min])
            {
                min = j;
            }
        }

        swap(&list[i], &list[min]);
    }
}
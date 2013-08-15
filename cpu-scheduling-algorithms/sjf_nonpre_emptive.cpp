#include<iostream>
#include<stdlib.h>
#include<fstream>
#include<stdio.h>

using namespace std;

void selection_sort(int list[], int n);
void swap(int *x,int *y);
int sjf_nonpreemptive(int array[],int size);

int main()
{
    int size;//number of processes
    char fileName[20];//to take file name from user
    cout<<"Enter file name:\n";
    gets(fileName);
    ifstream in(fileName);//input file stream
    in>>size;
    cout<<"Number of processes:\n"<<size;
    int b[size];
    for(int i=0;i<size;i++)
    {
        in>>b[i];
    }
    cout<<"\nProcess burst times are:\n";
    for(int j=0;j<size;j++)
    {
        cout<<b[j]<<"\n";//printing burst times
    }
    sjf_nonpreemptive(b,size);
}

int sjf_nonpreemptive(int array[],int size)
{
    selection_sort(array,size);//sorting array with selection sort
    int p[size];
    double total=0.0;
    double avg;
    p[0]=0;
    for(int i=1;i<size;i++)
    p[i]=p[i-1]+array[i];
    for(int k=0;k<size;k++)
    {
        total=total+p[k];
        cout<<"\nWaiting time for process "<<k<<":"<<p[k]<<"\n";
    }
    avg=total/(double)size;
    cout<<"\nTotal waiting time in SJF(non-preemptive) scheduling:\n"<<total;
    cout<<"\nAverage waiting time in SJF(non-preemptive) scheduling:\n"<<avg;
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

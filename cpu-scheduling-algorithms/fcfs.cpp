#include<iostream>
#include<stdlib.h>
#include<fstream>
#include<stdio.h>

using namespace std;

int fcfs(int array[],int size);

int main()
{
    char fileName[20];//to take file name from user
    cout<<"Enter file name:\n";
    gets(fileName);
    int size;//number of processes to be taken from file
    ifstream in(fileName);//input file stream to open file
    in>>size;
    cout<<"Number of processes:\n"<<size;
    int b[size];
    for(int i=0;i<size;i++)
    {
        in>>b[i];//storing burst times into an array
    }
    cout<<"\nProcess burst times are:\n";
    for(int j=0;j<size;j++)
    {
        cout<<b[j]<<"\n";//printing burst times
    }
    fcfs(b,size);
}

int fcfs(int array[],int size)
{
    int p[size];
    double total=0.0;
    double avg;
    p[0]=0;
    for(int i=1;i<size;i++)
    p[i]=p[i-1]+array[i];
    for(int k=0;k<size;k++)
    {
        total=total+p[k];
        cout<<"\nWaiting time for process "<<k<<":"<<p[k];
    }
    avg=total/(double)size;
    cout<<"\nTotal waiting time in FCFS scheduling:\n"<<total;
    cout<<"\nAverage waiting time in FCFS scheduling:\n"<<avg;
    return 0;
}

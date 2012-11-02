#include<iostream>
#include<fstream>
#include<queue>

using namespace std;

struct process
{
    int id;
    double burstTime;
    double lastExecutionTime;
    double waitingTime;
};

int main()
{
    int n;//number of processes
    double tQ;//time quantum
    double systemTime=0.0;
    char fileName[20];//to take file name from user
    cout<<"Enter fileName:\n";
    gets(fileName);
    ifstream in(fileName);//input file stream
    in>>n;
    cout<<"Number of process:"<<n<<"\n";
    process done[n];//array to keep done processes
    queue <process> q;//queue
    cout<<"Burst Times:\n";
    for(int i=0;i<n;i++)
    {
        process s;
        s.id=i+1;//id initialization
        double bt;
        in>>bt;
        s.burstTime=bt;//burst time initialization
        s.lastExecutionTime=0.0;
        s.waitingTime=0.0;
        q.push(s);//pushing into a queue
        cout<<"Process"<<s.id<<":"<<bt<<"\n";//printing burst times for each process
    }
    in>>tQ;
    cout<<"Time Quantum:"<<tQ<<"\n";
    int j=0;
    while(!q.empty())
    {
        process t=q.front();//reference to the topmost queue element
        q.pop();//removing the topmost queue element

        if(t.burstTime>tQ)
        {
            t.burstTime-=tQ;
			t.waitingTime+=systemTime-t.lastExecutionTime;
			systemTime+=tQ;
			t.lastExecutionTime=systemTime;
			q.push(t);//not done,so pushing back into queue
        }
        
        else 
        {
			t.waitingTime+=systemTime-t.lastExecutionTime;
			systemTime+=t.burstTime;
			t.lastExecutionTime=systemTime;
			done[j]=t;//done,so storing into an array to calculate waiting time for total
            j++;
        }
    }
    double totalWaitingTime=0.0;
    double averageWaitingTime;
    for(int k=0;k<n;k++)
    {
        cout<<"Waiting time for process"<<done[k].id<<":"<<done[k].waitingTime<<"\n";
        totalWaitingTime+=done[k].waitingTime;
    }
    cout<<"Total waiting time in Round Robin scheduling:"<<totalWaitingTime;
    averageWaitingTime=totalWaitingTime/(double)n;
    cout<<"\nAverage waiting time in Round Robin scheduling:"<<averageWaitingTime<<"\n";
}

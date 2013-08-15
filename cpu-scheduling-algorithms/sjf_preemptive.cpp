#include<iostream>
#include<queue>
#include<algorithm>
#include<fstream>
#include<vector>

using namespace std;

struct process
{
    int id;
    double arrivalTime;
    double burstTime;
    double lastExecutionTime;
    double waitingTime;
};

bool operator<(process p, process q)//operator to decide priority for priority queue
{
    return p.burstTime>q.burstTime;
}

bool cmpForSorting(process p, process q)//used later as a reference to sort done vector
{
    return p.id<q.id;
}

int main()
{
    char fileName[20];//to take file name from user
    cout<<"Enter file name:\n";
    gets(fileName);
    ifstream in(fileName);//input file stream
    int n;
    in>>n;
    double arrival_time,burst_time;
    vector <process> v;//vector to store processes ready for execution
    vector <process> done;//vector to store processes done execution
    
    priority_queue<process> myqueue;//priority queue
    
    for(int i=1;i<n;i++)
    {
        in>>arrival_time>>burst_time;
        process a;
        a.id = i;
        a.arrivalTime = arrival_time;
        cout<<"Arrival time of process "<<i<<":"<<a.arrivalTime<<"\n";
        a.burstTime = burst_time;
        cout<<"Burst time of process "<<i<<":"<<a.burstTime<<"\n";
        a.lastExecutionTime = arrival_time;
        a.waitingTime = 0.0;
        v.push_back(a);//storing into vector v
    }
    
    int j=0;
    double currentTime=0.0;
    
    while(j<n)
    {
        process m = v[j];
        double currentArrivalTime = m.arrivalTime;

        if (!myqueue.empty())
        {
            process o = myqueue.top();//reference to the topmost queue element
            o.waitingTime += currentTime-o.lastExecutionTime;
            myqueue.pop();//removing topmost queue element
            o.burstTime -=(currentArrivalTime-currentTime);
            currentTime +=(currentArrivalTime-currentTime);

            if (o.burstTime<0)
            currentTime +=o.burstTime;

            o.lastExecutionTime =currentTime;
            
            if (o.burstTime>0)
            myqueue.push(o);//not done,pushed back into queue
            
            else
            done.push_back(o);//done,pushed into done vector

        }
        myqueue.push(m);
        j++;   
    }
    
    int k=0;
    
    while(!myqueue.empty())
    {
        process q = myqueue.top();//reference to the topmost queue element
        myqueue.pop();//removing topmost queue element

        q.waitingTime += (currentTime-q.lastExecutionTime);
        currentTime+=q.burstTime;
        q.burstTime = 0.0;
        q.lastExecutionTime = currentTime;
        done.push_back(q);
        k++;
    }
    
    sort(done.begin(),done.end(),cmpForSorting);//sorting done vector based on process id
    
    double totalWaitingTime=0.0;
    
    for (int l =0; l<done.size(); l++)
    {
        totalWaitingTime+=done[l].waitingTime;
        cout<<"Waiting time for process "<<l<<":"<<done[l].waitingTime<<"\n";
    }

    double averageWaitingTime = totalWaitingTime/n;
    cout<<"Total waiting time in SJF(pre-emptive) scheduling:\n"<<totalWaitingTime;
    cout<<"\nAvarage waiting time in SJF(pre-emptive) scheduling:\n"<<averageWaitingTime;
}

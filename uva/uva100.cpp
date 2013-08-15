#include <iostream>
#include <cstdio>

using namespace std;


int max_cycle_length(long long a, long long b);
int cycle_length(long long n, int c);
void swap(long long &a, long long &b);


int main()
{
    long long a,b;
    while(scanf("%lld%lld", &a, &b)==2)
	{
        if(a>b)
        {
            swap(a,b);
            cout<<b<<" "<<a<<" "<<max_cycle_length(a,b)<<endl;
        }
			
		else 
            cout<<a<<" "<<b<<" "<<max_cycle_length(a,b)<<endl;
	}

    return 0;
}


int max_cycle_length(long long a, long long b)
{
    int max_length=0;

    for(long long i=a; i<=b; i++)
    {
        int temp_length=cycle_length(i,1);

        if(temp_length>max_length)
            max_length=temp_length;
    }

    return max_length;
}


int cycle_length(long long n, int c)
{
    if(n==1)
        return c;

    else if(n%2==1)
        cycle_length(((3*n)+1), c+1);

    else
        cycle_length(n/2, c+1);
}


void swap(long long &a, long long &b)
{
	long long temp=b;
	b=a;
	a=temp;
}
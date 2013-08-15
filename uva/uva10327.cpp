#include <iostream>

using namespace std;


int main()
{
    int n;

    while(cin>>n)
    {
        int *p;
        p = new int [n];

        for(int i = 0; i < n; i++)
            cin>>p[i];

        int num_ex = 0;

        for(int i = 0; i < n; i++)
            for(int j = i + 1; j < n; j++)
                if(p[i] > p[j])
                    num_ex++;

        delete [] p;
        cout<<"Minimum exchange operations : "<<num_ex<<endl;
    }

    return 0;
}
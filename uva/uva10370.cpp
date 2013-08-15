#include <iostream>
#include <iomanip>

using namespace std;


int main()
{
    int c;  // number of cases
    cin>>c;

    for(int i = 0; i < c; i++)
    {
        int n;  // number of students in class
        cin>>n;
        int * p;
        p = new int [n];    // array that holds the grades for each case
        long long sum = 0;
        int inp;

        for(int j = 0; j < n; j++)
        {
            cin>>inp;
            sum += inp;
            p[j] = inp;
        }

        double avg = sum / (double) n;
        int count = 0;

        for(int j = 0; j < n; j++)
        {
            if(p[j] > avg)  // if grade is below average
                count++;
        }

        double r = (count * 100) / (double) n;
        cout<<fixed<<setprecision(3)<<r<<"%"<<endl;
        delete [] p;
    }

    return 0;
}
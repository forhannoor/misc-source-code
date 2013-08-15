#include <iostream>
#include <vector>
#include <algorithm>

using namespace std;


vector <long long> v;

int main()
{
    long long inp;
    int size = 0;

    while(cin>>inp)
    {
        v.push_back(inp);   // push into vector
        size += 1;  // increase size
        sort(v.begin(), v.end());

        if(size % 2 == 1)   // odd size
            cout<<v[size / 2]<<endl;

        else
            cout<<(v[size / 2] + v[(size / 2) - 1]) / 2<<endl;
    }

	return 0;
}
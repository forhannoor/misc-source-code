#include <iostream>
#include <sstream>
#include <cmath>

using namespace std;


string str_rev(string a)
{
    string r = "";

    for(int i = a.length() - 1; i >= 0; i--)
        r += a[i];

    return r;
}

bool primality(string x)
{
    bool flag = true;
    stringstream ss(x);
    long long num;
    ss>>num;

    for(int i = 2; i <= sqrt(num); i++)
        if(num % i == 0)
        {
            flag = false;
            break;
        }

    return flag;
}

int main()
{
    string inp;

    while(cin>>inp)
    {
        bool r = primality(inp);

        if(r == false)
            cout<<inp<<" is not prime."<<endl;

        else
        {
            string rev = str_rev(inp);
            bool j = primality(rev);

            if(j == true && inp != rev)
                cout<<inp<<" is emirp."<<endl;

            else
                cout<<inp<<" is prime."<<endl;
        }
    }

    return 0;
}
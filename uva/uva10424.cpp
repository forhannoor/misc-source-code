#include <iostream>
#include <cstring>
#include <map>
#include <iomanip>

using namespace std;


map <char, int> m;
map <char, int>::iterator it;


int sum_digits(int a)
{
    if(a < 10)
        return a;

    int r = 0;

    while(a > 0)
    {
        r += (a % 10);
        a /= 10;
    }

    return sum_digits(r);
}


int sum(string a)
{
    int r = 0;

    for(int i = 0; i < a.size(); i++)
    {
        it = m.find(a[i]);

        if(it != m.end())
            r += it->second;
    }

    return sum_digits(r);
}


int main()
{
    string n1, n2;

    for(int i = 65; i <= 90; i++)
        m[(char)i] = i - 64;

    for(int i = 97; i <= 122; i++)
        m[(char)i] = i - 96;

    while(getline(cin, n1) && getline(cin, n2))
    {
        int s1 = sum(n1);
        int s2 = sum(n2);

        if(s1 > s2)
            cout<<fixed<<setprecision(2)<<(s2 * 100) / (double) s1<<" %"<<endl;

        else
            cout<<fixed<<setprecision(2)<<(s1 * 100) / (double) s2<<" %"<<endl;
    }

    return 0;
}
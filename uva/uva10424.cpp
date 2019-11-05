#include <cstdio>
#include <iostream>
#include <map>
#include <iomanip>

std::map <char, int> m;
std::map <char, int>::iterator it;

int sum_digits(int a)
{
    if(a < 10)
    {
        return a;
    }

    int r = 0;

    while(a > 0)
    {
        r += (a % 10);
        a /= 10;
    }

    return sum_digits(r);
}

int sum(std::string a)
{
    int r = 0;
    int limit = a.size();

    for(int i = 0; i < limit; ++i)
    {
        it = m.find(a[i]);

        if(it != m.end())
        {
            r += it->second;
        }
    }

    return sum_digits(r);
}

int main()
{
    std::string n1, n2;

    for(int i = 65; i <= 90; ++i)
    {
        m[(char)i] = i - 64;
    }

    for(int i = 97; i <= 122; i++)
    {
        m[(char)i] = i - 96;
    }

    while(getline(std::cin, n1) && getline(std::cin, n2))
    {
        int s1 = sum(n1);
        int s2 = sum(n2);

        if(s1 > s2)
        {
            printf("%.2f\n", ((s2 * 100) / (double) s1));
        }

        else
        {
            printf("%.2f\n", ((s1 * 100) / (double) s2));
        }
    }

    return 0;
}
#include <iostream>
#include <vector>
#include <algorithm>
#include <cstdio>

std::vector <long long> v;

int main()
{
    long long inp;
    int size = 0;

    while(scanf("%lld", &inp))
    {
        v.push_back(inp);
        size += 1;
        sort(v.begin(), v.end());

        if(size % 2 == 1)
        {
            printf("%lld\n", v[size / 2]);
        }

        else
        {
            printf("%lld\n", (v[size / 2] + v[(size / 2) - 1]) / 2);
        }
    }

	return 0;
}
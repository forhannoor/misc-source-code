#include <iostream>
#include <cstdio>
#include <sstream>
#include <cmath>
#include <cstring>

std::string str_rev(std::string a)
{
    std::string r = "";

    for(int i = a.length() - 1; i >= 0; --i)
    {
        r.append(1, a[i]);
    }

    return r;
}

bool is_prime(std::string x)
{
    std::stringstream ss(x);
    bool result = true;
    long long num;
    ss >> num;
    int limit = sqrt(num);

    for(int i = 2; i <= limit && is_prime; ++i)
    {
        if(num % i == 0)
        {
            result = false;
        }
    }

    return result;
}

int main()
{
    std::string inp;

    while(std::cin >> inp)
    {
        bool result = is_prime(inp);

        if(!result)
        {
            std::cout<<inp<<" is not prime.\n";
        }
        else
        {
            std::string rev = str_rev(inp);
            result = is_prime(rev);

            if(result && inp != rev)
            {
                std::cout<<inp<<" is emirp.\n";
            }
            else
            {
                std::cout<<inp<<" is prime.\n";
            }
        }
    }

    return 0;
}
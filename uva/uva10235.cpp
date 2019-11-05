#include <iostream>
#include <cstdio>
#include <sstream>
#include <cmath>

std::string str_rev(std::string a)
{
    std::string r = "";

    for(int i = a.length() - 1; i >= 0; --i)
    {
        r += a[i];
    }

    return r;
}

bool primality(std::string x)
{
    std::stringstream ss(x);
    bool is_prime = true;
    long long num;
    ss >> num;
    int limit = sqrt(num);

    for(int i = 2; i <= limit && is_prime; ++i)
    {
        if(num % i == 0)
        {
            is_prime = false;
        }
    }

    return is_prime;
}

int main()
{
    std::string inp;

    while(std::cin >> inp)
    {
        bool is_prime = primality(inp);

        if(!is_prime)
        {
            std::cout<<inp<<" is not prime.\n";
        }

        else
        {
            std::string rev = str_rev(inp);
            is_prime = primality(rev);

            if(is_prime && inp != rev)
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
/*
 * In this problem you are asked to write a simple base conversion program. You will be given a hexadecimal or
 * decimal integer number as input. You will have to output the corresponding decimal or hexadecimal number.
 * Hexadecimal numbers always starts with a `0x' and all other numbers are to be considered as decimal numbers.
 * There will be no invalid numbers in the input.
 */

#include <iostream>
#include <iomanip>
#include <sstream>

long long hex_to_deci(std::string a)
{
    std::stringstream s;
    long long r;
    s << std::hex << a;
    s >> r;
    return r;
}


int main()
{
    std::string inp;
    long long x;

    while(true)
    {
        std::cin >> inp;
        std::stringstream ss(inp);
        ss >> x;

        if(x < 0)
        {
            break;
        }
        else if(x == 0)
        {
            long long p = hex_to_deci(inp);
            std::cout << std::dec << p <<"\n";
        }
        else if(x > 0)
        {
            std::cout << "0x" << std::hex << std::uppercase << x <<"\n";
        }
    }

    return 0;
}
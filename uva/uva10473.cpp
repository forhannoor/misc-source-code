/*
 * In this problem you are asked to write a simple base conversion program. You will be given a hexadecimal or
 * decimal integer number as input. You will have to output the corresponding decimal or hexadecimal number.
 * Hexadecimal numbers always starts with a `0x' and all other numbers are to be considered as decimal numbers.
 * There will be no invalid numbers in the input.
 */


#include <iostream>
#include <iomanip>
#include <sstream>

using namespace std;


long long hex_to_deci(string a)
{
    stringstream s;
    long long r;
    s<<hex<<a;
    s>>r;
    return r;
}


int main()
{
    string inp;
    long long x;

    while(true)
    {
        cin>>inp;
        stringstream ss(inp);
        ss>>x;

        if(x < 0)  // negative input, end of string
            break;

        else if(x == 0) // hex string
        {
            long long p = hex_to_deci(inp);   // convert hex to decimal
            cout<<dec<<p<<endl;
        }

        else if(x > 0)   // decimal
        {
            cout<<"0x"<<hex<<uppercase<<x<<endl;
        }
    }

    return 0;
}
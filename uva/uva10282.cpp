#include<iostream>
#include <map>
#include <cstring>
#include <cstdio>

using namespace std;


int main()
{
    map <string, string> dictionary;
    char inp[100];
    char *ptr;
    string english, foreign;

    while(gets(inp))
    {
        if(strlen(inp) == 0)
            break;

        ptr = strtok(inp, " ");
        english = ptr;
        ptr = strtok(NULL, " ");
        foreign = ptr;
        dictionary[foreign] = english;
    }

    while(gets(inp))
    {
        foreign = inp;

        if(dictionary[foreign].length() == 0)   // not found
            cout<<"eh"<<endl;

        else
            cout<<dictionary[foreign]<<endl;
    }

    return 0;
}
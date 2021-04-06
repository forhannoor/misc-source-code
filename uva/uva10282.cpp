#include <iostream>
#include <map>
#include <cstring>
#include <cstdio>

int main()
{
    std::map <std::string, std::string> dictionary;
    std::string english, foreign;
    char inp[100];
    char *ptr;
    char *space = " ";

    while(gets(inp))
    {
        if(strlen(inp) == 0) { break; }

        ptr = strtok(inp, space);
        english = ptr;
        ptr = strtok(NULL, space);
        foreign = ptr;
        dictionary[foreign] = english;
    }

    while(gets(inp))
    {
        foreign = inp;

        if(dictionary[foreign].length() == 0)
        {
            printf("eh\n");
        }
        else
        {
            std::cout << dictionary[foreign] <<"\n";
        }
    }

    return 0;
}
#include<iostream>
#include<cstdio>

int main()
{
    int numInput;
    scanf("%d", &numInput);
    std::string input;

    while(numInput > 0)
    {
        std::cin>>input;

        if(input.size() > 3){ printf("3\n"); }

        else if(input[0] == 'o'){ printf("1\n"); }

        else{ printf("2\n"); }
        --numInput;
    }

    return 0;
}
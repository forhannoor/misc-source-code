#include <iostream>

int main()
{
    std::string input;

    while(std::getline(std::cin, input))
    {
        std::cout << input << "\n";
    }

    return 0;
}
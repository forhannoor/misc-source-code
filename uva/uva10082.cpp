#include <iostream>
#include <map>

std::map <char, char> m;

void init()
{
    m['W'] = 'Q';
    m['S'] = 'A';
    m['X'] = 'Z';
    m['E'] = 'W';
    m['D'] = 'S';
    m['C'] = 'X';
    m['R'] = 'E';
    m['F'] = 'D';
    m['V'] = 'C';
    m['T'] = 'R';
    m['G'] = 'F';
    m['B'] = 'V';
    m['Y'] = 'T';
    m['H'] = 'G';
    m['N'] = 'B';
    m['U'] = 'Y';
    m['J'] = 'H';
    m['M'] = 'N';
    m['I'] = 'U';
    m['K'] = 'J';
    m[','] = 'M';
    m['O'] = 'I';
    m['L'] = 'K';
    m['.'] = ',';
    m['P'] = 'O';
    m[';'] = 'L';
    m['/'] = '.';
    m['['] = 'P';
    m['\''] = ';';
    m['\\'] = '\'';
    m[']'] = '[';
    m['0'] = '9';
    m['1'] = '`';
    m['2'] = '1';
    m['3'] = '2';
    m['4'] = '3';
    m['5'] = '4';
    m['6'] = '5';
    m['7'] = '6';
    m['8'] = '7';
    m['9'] = '8';
    m['-'] = '0';
    m['='] = '-';
}

std::string decoded(std::string s)
{
    std::string result = "";
    char c;
    int length = s.length();

    for(int i = 0; i < length; ++i)
    {
        c = s[i];

        // If character is not a blank space.
        if(c != ' ')
        {
            c = m[c];
        }

        result += c;
    }

    return result;
}

int main()
{
    init();
    std::string inp;

    while(getline(std::cin, inp))
    {
        std::cout << decoded(inp) << "\n";
    }

	return 0;
}
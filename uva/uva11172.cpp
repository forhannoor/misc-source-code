#include <cstdio>

int main()
{
    int n, a, b;
    scanf("%d", &n);

    for(int i = 0; i < n; ++i)
    {
        scanf("%d %d", &a, &b);

        if(a  < b){ printf("<\n"); }

        else if(a > b){ printf(">\n"); }

        else{ printf("="); }
    }

    return 0;
}
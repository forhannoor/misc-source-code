#include <cstdio>
#include <climits>

int main()
{
    int n, shopCount, current, max, min, dif;
    scanf("%d", &n);

    for(int i = 0; i < n; ++i)
    {
        max = INT_MIN;
        min = INT_MAX;
        scanf("%d", &shopCount);

        for(int j = 0; j < shopCount; ++j)
        {
            scanf("%d", &current);

            if(current > max){ max = current; }
            if(current < min){ min = current;}
        }
        dif = max - min;
        dif = dif <<1;
        printf("%d\n", dif);
    }

    return 0;
}